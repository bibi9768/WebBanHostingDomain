let app = angular.module('myApp', ['angularUtils.directives.dirPagination', 'ngSanitize']);

// Constants used by the entire app
app.constant('CONSTANTS', {
    'URI': {
        'EMA_HOSTVN_URI': 'https://ema.hostvn.net/form/submit',
        'EMA_DOWNLOAD_HOSTVN_URI': 'https://ema.hostvn.net/asset/',
        'MANAGE_HOSTVN_CARD': 'https://manage.hostvn.net/cart.php?type='
    }
});

app.filter('productPrice', function () {
    return function (str) {
        if (str.indexOf('|') !== -1) {
            let arr = str.split('|');
            return arr[1] ? arr[1] : '';
        }
        return '';
    }
});

app.filter("trust", ['$sce', function ($sce) {
    return function (htmlCode) {
        return $sce.trustAsHtml(htmlCode);
    }
}]);

app.filter("price", function () {
    return function (price) {
        price = parseInt(price);
        return price.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
    }
});

/* filter: check empty object */
app.filter('isNotEmpty', function () {
    return function (obj) {
        return !(obj === undefined || obj === null || Object.keys(obj).length === 0);
    }
});

app.filter('isDomainVN', function () {
    return function (extension) {
        return extension.indexOf('.vn') !== -1;
    }
});

app.controller('MainController', function ($rootScope, $scope, anchorSmoothScroll, $http, $window, $document, $httpParamSerializerJQLike, CONSTANTS) {
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
    $scope.ScrollBar = true;
    $scope.domain = '';
    $scope.domainExtensionsWrap = false;
    $scope.domainExtensionsWrapP = false;
    $scope.questionActive = '';
    $scope.tldDefault = ['.vn', '.com.vn', '.com', '.net', '.org'];
    $scope.InProgress = false;
    $scope.PlayVideo = false;
    $scope.showText = '';

    /*show all and show less question content*/
    $scope.showQuestionContent = function (id, string) {
        let stringLess = '';
        if (string.length > 100) stringLess = string.substr(0, 97) + '...';
        else stringLess = string;
        return $scope.questionActive === id ? string : stringLess;
    };

    $scope.setQuestionActive = function (id) {
        $scope.questionActive = $scope.questionActive === id ? '' : id;
    };

    $scope.scrollTo = function (id) {
        if (document.getElementById(id))
            anchorSmoothScroll.scrollTo(id);
    };

    $scope.setPackagePrice = function (id, price) {
        if (price.indexOf('|') !== -1) {
            let arr = price.split('|');
            price = arr[1] ? arr[1] : '';
        } else
            price = '';
        document.getElementById(id).innerText = price;
    };

    $rootScope.openDomainSearchMobile = function () {
        $scope.domainSearchMobile = !$scope.domainSearchMobile;
        $scope.scrollTo('asvTopPage');
    };

    $scope.closeDomainSearch = function () {
        $scope.domain = '';
        $scope.tldChecker = [];
        $scope.domainCheckerResult = [];
        $scope.domainSearchMobile = false;
        if (document.getElementById('domain2') !== null) {
            document.getElementById('domain2').value = '';
        }
    };

    $rootScope.isDomain = function (sld) {
        let re = new RegExp(/^((?:(?:(?:\w[\.\-\+]?)*)\w)+)((?:(?:(?:\w[\.\-\+]?){1,62})\w)+)$/);
        return sld.match(re);
    };

    $scope.domainChecker = function () {
        let domain2 = document.getElementById('domain2');
        if (domain2 !== null) {
            if (domain2.value !== '')
                $scope.domain = domain2.value;
        }

        if ($scope.domain === '') {
            $rootScope.showAlert('Bạn chưa nhập tên miền');
            return;
        }

        if (!$rootScope.isDomain($scope.domain)) {
            $rootScope.showAlert('Tên miền không đúng định dạng');
            return
        }

        $rootScope.domainChecking = true;
        $scope.domainCheckerResult = [];
        $scope.tldChecker = [];

        let domainDivide = $scope.domain.split('.');

        if (domainDivide.length > 1) {
            $scope.domain = domainDivide[0];
            domainDivide.shift();
            let tld = '.' + domainDivide.join('.');
            $scope.tldChecker = [tld];
            $scope.tldDefault = $scope.tldChecker;
            $scope.getCustomData('checkdomain59bb.html?domain=' + $scope.domain + tld)
                .then(function (response) {
                    $scope.domainCheckerResult.push(response);
                    $rootScope.domainChecking = false;
                    $scope.$apply();
                });

        } else {
            let checkbox = $document[0].querySelectorAll('#domainExtension input[type=checkbox]');
            checkbox.forEach(function (cb) {
                if (cb.checked === true) {
                    $scope.tldChecker.push(cb.value);
                }
            });
            if ($scope.tldChecker.length === 0) $scope.tldChecker = $scope.tldDefault;
            $scope.tldChecker.forEach(function (tld) {
                if (tld !== '') {
                    $scope.getCustomData('checkdomain59bb.html?domain=' + $scope.domain + tld)
                        .then(function (response) {
                            $scope.domainCheckerResult.push(response);
                            if ($scope.domainCheckerResult.length === $scope.tldChecker.length) $rootScope.domainChecking = false;
                        });
                }
            });
        }
    };

    $scope.getCustomData = function (url) {
        return new Promise(function (resolve, reject) {
            return $http({
                method: 'get',
                url: url,
            }).then(function successCallback(response) {
                return resolve(response.data);
            }, function errorCallback(error) {
                return reject(error);
            });
        });
    };

    $rootScope.toCart = function (type, service, packageSelect, p, promotion, periodSelect) {
        let url = '';
        let packageId = 0;
        let period = '';
        let periodText = document.getElementById(periodSelect).value;

        if (periodText.indexOf('|') !== -1) {
            let arr = periodText.split('|');
            period = arr[0];
            if (packageSelect !== '' && p === 0) {
                let packageText = document.getElementById(packageSelect).value;
                let arr = packageText.split('|');
                packageId = arr[0];
                url = CONSTANTS.URI.MANAGE_HOSTVN_CARD + type + '&service=' + service + '&package=' + packageId + '&period=' + period + '&promocode=' + promotion;
            } else {
                url = CONSTANTS.URI.MANAGE_HOSTVN_CARD + type + '&service=' + service + '&package=' + p + '&period=' + period + '&promocode=' + promotion;
            }
        } else {
            url = CONSTANTS.URI.MANAGE_HOSTVN_CARD + type + '&service=' + service + '&package=' + p + '&period=&promocode=' + promotion;
        }
        return $window.location.href = url;
    };

    $rootScope.mauTicPost = function (param) {
        let inData = {};
        let inputs = [];
        let idQuotePrice = 0;
        let btnBanner2 = document.getElementsByClassName('btn-banner2');
        const inputName = ['mauticform[fullname]', 'mauticform[phone]', 'mauticform[email]', 'mauticform[services]'];

        // let inputs = $document[0].querySelectorAll('#' + id + ' input[type=text], #' + id + ' input[type=hidden], #' + id + ' input[type=email], #' + id + ' select, #' + id + ' textarea');
        inputs = document.querySelectorAll('*[class*=' + param + ']');
        inputs.forEach(function (input) {
            inData[input.name] = input.value;
        });
        if (validateFormMautic(inputs)) {
            let idDownload = document.getElementsByClassName('quote-price-download');
            if (btnBanner2.length > 0) btnBanner2[0].disabled = true;
            if (idDownload.length > 0) idQuotePrice = idDownload[0].getAttribute('data-priceQuoteDownload');

            closeModal();
            $rootScope.post(CONSTANTS.URI.EMA_HOSTVN_URI, inData)
                .then(function (res) {
                    if (param === 'mauticform_quote_price' || param === 'mauticform_quote_price2') {
                        window.open(CONSTANTS.URI.EMA_DOWNLOAD_HOSTVN_URI + idQuotePrice + ":", "_blank");
                    }
                    swal("Quá trình đăng ký thành công!", "Cảm ơn bạn đã quan tâm tới dịch vụ của HOSTVN!", "success");
                    inputs.forEach(function (input) {
                        if (inputName.includes(input.name)) input.value = '';
                    });
                    //$rootScope.showAlert('Đăng ký dùng thử thành công, cảm ơn bạn đã quan tâm tới dịch vụ của HOSTVN');
                })
                .catch(function (error) {
                    inputs.forEach(function (input) {
                        if (inputName.includes(input.name)) input.value = '';
                    });
                    console.log(error);
                })
                .finally(function () {
                    if (btnBanner2.length > 0) btnBanner2[0].removeAttribute('disabled');
                })

            let JiraBody = `*Họ tên:*  ${inData['mauticform[fullname]']} \\\\ *Điện thoại:*  ${inData['mauticform[phone]']} \\\\ *Email:*  ${inData['mauticform[email]']} \\\\ *Dịch vụ:*  ${inData['mauticform[formName]']}`

            let JiraVar = {
                "fields": {
                    "project": {
                        "key": "HTKT"
                    },
                    "summary": "Đăng ký dùng thử dịch vụ",
                    "description": JiraBody,
                    "issuetype": {
                        "name": "Task"
                    }
                }
            }

            $http({
                url: "https://cp.asv.vn/rest/api/2/issue/",
                method: 'POST',
                data: JiraVar,
                headers: {
                    'Content-Type': 'application/json',
                    "Access-Control-Allow-Origin": '*',
                    'Authorization': 'Bearer dGhhbmhkbDpEdW5naGFuZw=='
                },
            }).then(function successCallback(response) {
                console.log(response);
            }, function errorCallback(error) {
                console.log(error);
            });
        }
    };

    $rootScope.mauTicPostDownload = function (id) {

    }

    $rootScope.post = function (url, inData) {
        return new Promise(function (resolve, reject) {
            return $http({
                method: 'post',
                url: url,
                data: $httpParamSerializerJQLike(inData)
            }).then(function successCallback(response) {
                return resolve(response);
            }, function errorCallback(error) {
                return reject(error);
            });
        });
    };

    $scope.checkValueById = function (id) {
        return document.getElementById(id).value !== '';
    };

    $rootScope.disableScrollBar = function () {
        $scope.ScrollBar = !$scope.ScrollBar;
        $("body").css("overflow", $scope.ScrollBar ? "auto" : "hidden");
    };

    $rootScope.showAlert = function (text) {
        $("#asvAlertText").text(text);
        $("#asvAlert").modal('show');
    };

    $scope.stopVideo = function () {
        $scope.PlayVideo = !$scope.PlayVideo;
        $scope.$apply();
    };

    $scope.lessText = function (id, string, length) {
        let stringLess = '';
        if (string.length > length) stringLess = string.substr(0, parseInt(length) - 3) + '...';
        else stringLess = string;
        return $scope.showText === id ? '<i class="icon-left-quote"></i>' + string : '<i class="icon-left-quote"></i>' + stringLess;
    };

    $scope.textActive = function (id) {
        $scope.showText = $scope.showText === id ? '' : id;
    };
});

/* controller for list */
app.controller('ListData', function ($rootScope, $scope, $http) {
    $rootScope.loading = false;
    $scope.itemsPage = 10;

    $scope.loaderInit = function (action) {
        let inData = {action: action};
        $rootScope.loading = true;
        $http({
            method: 'get',
            url: ajax,
            params: inData
        }).then(function successCallback(response) {
            $scope.datas = response.data;
        }, function errorCallback(error) {
            //console.log(error);
        }).finally(function () {
            $rootScope.loading = false;
        });
    };

    $scope.setItemPage = function (item) {
        $scope.itemsPage = item;
    };

    $scope.isSetItemPage = function (itemNum) {
        return $scope.itemsPage === itemNum;
    };

    $scope.sort = function (keyName) {
        $scope.sortKey = keyName;
        $scope.reverse = !$scope.reverse;
    };
});

app.directive('myEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.myEnter);
                });

                event.preventDefault();
            }
        });
    };
});

/* anchorSmoothScroll */
app.service('anchorSmoothScroll', function () {

    this.scrollTo = function (eID) {
        let startY = currentYPosition();
        let stopY = elmYPosition(eID);
        let distance = stopY > startY ? stopY - startY : startY - stopY;
        if (distance < 100) {
            scrollTo(0, stopY);
            return;
        }
        let speed = Math.round(distance / 100);
        if (speed >= 20) speed = 20;
        let step = Math.round(distance / 25);
        let leapY = stopY > startY ? startY + step : startY - step;
        let timer = 0;
        if (stopY > startY) {
            for (let i = startY; i < stopY; i += step) {
                setTimeout("window.scrollTo(0, " + (leapY - 120) + ")", timer * speed);
                leapY += step;
                if (leapY > stopY) leapY = stopY;
                timer++;
            }
            return;
        }
        for (let i = startY; i > stopY; i -= step) {
            setTimeout("window.scrollTo(0, " + (leapY - 120) + ")", timer * speed);
            leapY -= step;
            if (leapY < stopY) leapY = stopY;
            timer++;
        }

        function currentYPosition() {
            if (self.pageYOffset) return self.pageYOffset;
            if (document.documentElement && document.documentElement.scrollTop)
                return document.documentElement.scrollTop;
            if (document.body.scrollTop) return document.body.scrollTop;
            return 0;
        }

        function elmYPosition(eID) {
            let elm = document.getElementById(eID);
            let y = elm.offsetTop;
            let node = elm;
            while (node.offsetParent && node.offsetParent != document.body) {
                node = node.offsetParent;
                y += node.offsetTop;
            }
            return y;
        }
    };
});

$(document).ready(function () {
    // Set content Modal
    $('.prduct-combo-btn').on('click', function () {
        let idButton = $(this).attr('id'),
            getText = $(this).parent().parent().find('h3').text(),
            modalClass = $('.modalCombo'),
            idService = $(this).data('service');
        $('.combo-box-title-modal').text(getText);
        modalClass.attr('id', 'OpenModalCombo' + idButton);
        $("input.mauticform_services[type=hidden]").attr('id', 'mauticform_dangkydungthu_services' + idButton);
        $("input.mauticform_id[type=hidden]").attr('id', 'mauticform_dangkydungthu_id' + idButton);
        $("input.mauticform_return[type=hidden]").attr('id', 'mauticform_dangkydungthu_return' + idButton);
        $("input.mauticform_name[type=hidden]").attr('id', 'mauticform_dangkydungthu_name' + idButton);
        $("input.mauticform_messenger[type=hidden]").attr('id', 'mauticform_dangkydungthu_messenger' + idButton);
        $("input.mauticform_id").val(idService);
    });

    let didScroll;
    let lastScrollTop = 0;
    let delta = 5;
    let navbar = document.getElementById("navbar");
    let productNav = document.getElementById('productNav');
    let bottomNav = document.getElementById('bottomNav');
    let mfCollapsedBar = document.getElementsByClassName('mf-copy-to-parent');
    let collapsedBar = document.getElementsByClassName('mf-bar-collapsed');
    let distance = 0;
    if (productNav) distance = $('#productNav').offset().top;
    //if (productNav) distance = productNav.offsetTop;
    let driverWidth = window.innerWidth;

    //if reload page
    if (window.pageYOffset > 40) navbar.style.top = "-100px";

    //resize event
    window.onresize = function () {
        driverWidth = window.innerWidth;
        if (window.pageYOffset <= 40) {
            navbar.style.top = driverWidth > 576 ? "40px" : "0";

        }
        if (productNav) {
            if (driverWidth < 992) productNav.classList.remove("product-nav-sticky");
        }
    };

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 100);

    function hasScrolled() {
        let st = $(this).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        if (st > lastScrollTop && st > 40) {
            let productNavTop = '0px';
            if (collapsedBar && collapsedBar.length == '0') {
                if (mfCollapsedBar && mfCollapsedBar.length > 0) productNavTop = '50px';
            }

            navbar.style.top = "-100px";
            if (bottomNav) bottomNav.style.bottom = "0";
            if (productNav) productNav.style.top = productNavTop;
        } else {
            let productNavTop = '50px';

            if (navbar.style.top === '50px') {
                productNavTop = '100px';
            }

            //scroll up
            if (st + $(window).height() < $(document).height()) {
                let navbarTop = '0';
                if (mfCollapsedBar.length > 0 && (collapsedBar && collapsedBar.length === 0)) navbarTop = '50px';
                navbar.classList.add('top-menu-wrap-scroll');
                navbar.style.top = navbarTop;
                if (bottomNav) bottomNav.style.bottom = "-44px";
                if (productNav) productNav.style.top = productNavTop;
            }
        }

        //default
        if (st < 40) {
            let top = '40px';
            if (!(mfCollapsedBar.length > 0 && (collapsedBar && collapsedBar.length === 0))) top = '0px';
            navbar.classList.remove('top-menu-wrap-scroll');
            navbar.style.top = driverWidth > 576 ? top : "0";
        }

        lastScrollTop = st;

        //product nav
        if (driverWidth > 992) {
            if (productNav) {
                if (window.pageYOffset > distance) {
                    productNav.classList.add("product-nav-sticky");
                } else {
                    productNav.classList.remove("product-nav-sticky");
                }
            }
        }
    }

    //toggle icon
    $("#accordionMenuMobile").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
            .prev()
            .find("i:last-child")
            .toggleClass("icon-upload icon-download-1");
    });

    $("#accordionQuestion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
            .find("i")
            .toggleClass("icon-upload icon-download-1");
    });

    //tooltip
    $('[data-toggle="tooltip"]').tooltip({html: true});

    $('#asvVideo').on('hidden.bs.modal', function () {
        angular.element(document.getElementById('myAppBody')).scope().stopVideo('test');
    });
});


function validateFormMautic(data) {
    let inData = [],
        fullNameState = true,
        emailState = true,
        phoneState = true;

    data.forEach(function (input) {
        inData[input.name] = {
            'value': input.value,
            'className': input.className
        };
    });

    let fullName = inData['mauticform[fullname]'] || '';
    email = inData['mauticform[email]'] || '',
        phone = inData['mauticform[phone]'] || '',
        mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/,
        phoneFormat = /^[0-9]{10,12}$/,
        fullNameError = document.getElementsByClassName(fullName.className + '_error')[0] || '',
        emaillError = document.getElementsByClassName(email.className + '_error')[0] || '',
        phoneError = document.getElementsByClassName(phone.className + '_error')[0] || '';

    if (fullName && !fullName.value) {
        fullNameError.hidden = false;
        fullNameError.innerHTML = 'Vui lòng nhập họ tên';
        fullNameState = false;
    }

    if (email && !email.value) {
        emaillError.hidden = false;
        emaillError.innerHTML = 'Vui lòng nhập địa chỉ Email';
        emailState = false;
    }

    if (phone && !phone.value) {
        phoneError.hidden = false;
        phoneError.innerHTML = 'Vui lòng nhập số điện thoại';
        phoneState = false;
    }

    // VAlidate Format
    if (fullName.value) {
        if (!(fullName.value.length > 1 && fullName.value.length < 30)) {
            fullNameError.hidden = false;
            fullNameError.innerHTML = 'Nhập họ tên khoảng 2-20 ký tự';
            fullNameState = false;
        } else {
            fullNameError.hidden = true;
            fullNameState = true;
        }
    }

    if (email && email.value) {
        if (!email.value.match(mailformat)) {
            emaillError.hidden = false;
            emaillError.innerHTML = 'Địa chỉ Email của bạn không hợp lệ';
            emailState = false;
        } else {
            emaillError.hidden = true;
            emailState = true;
        }
    }

    if (phone && phone.value) {
        if (!phone.value.match(phoneFormat)) {
            phoneError.hidden = false;
            phoneError.innerHTML = 'Số điện thoại của bạn không hợp lệ';
            phoneState = false;
        } else {
            phoneError.hidden = true;
            phoneState = true;
        }
    }

    if (fullNameState && emailState && phoneState) {
        return true;
    } else {
        return false;
    }
}

function closeModal() {
    $('#modalSupport, #modalDownload ,#OpenModalCombo, #advisorySupport, #pricingSupport2, #pricingDownload2').modal('hide');
}
