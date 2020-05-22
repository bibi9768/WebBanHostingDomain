<?php

namespace App\Http\Controllers;

use App\ChiTietHosting;
use App\Domain;
use App\HoaDonDomain;
use App\Hosting;
use App\Users;
use Auth;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getHomePage()
    {
        return view('user.homepage');
    }

    public function getSignInPage()
    {
        return view('user.signin');
    }

    public function postSignInPage(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ], [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu không quá 20'
        ]);
        $credentials = array('email' => $req->email, 'password' => $req->password);
        if (Auth::attempt($credentials)) {
            return redirect()->route('getHomePage')->with(['flag' => 'sucess', 'message' => 'Đăng nhập thành công']);
        } else return redirect()->back()->with(['flag' => 'danger', 'message' => 'Tên đăng nhập hoặc mật khẩu không đúng']);
    }

    public function getSignUpPage()
    {
        return view('user.signup');
    }

    public function postSignUpPage(Request $req)
    {
        $this->validate($req,
            [
                'email' => 'required|email|unique:users,email',
                'pass' => 'required|min:6|max:20',
                'hoten' => 'required|max:50',
                'repass' => 'required|same:pass'
            ], [
                'email.required' => 'Vui lòng nhập email!',
                'email.email' => 'Không đúng định dạng email',
                'email.unique' => 'Email đã tồn tại trên hệ thống',
                'hoten.max' => 'Tên dài quá 50 ký tự',
                'pass.requied' => 'Vui lòng nhập mật khẩu',
                'repass.same' => 'Mật khẩu nhập lại không giống',
                'pass.min' => 'Mật khẩu ít nhất 6 ký tự',
            ]);
        $user = new Users();
        $user->hoten = $req->hoten;
        $user->email = $req->email;
        $user->password = bcrypt($req->pass);
        $user->ngaydangky = Carbon::now()->toDateTimeString();
        $user->save();
        return redirect()->route('getSignInPage')->with(['message' => 'Tạo tài khoản thành công.Hãy nhập mật khẩu để đăng nhập', 'email' => $user->email]);

    }

    public function getSignOut()
    {
        Auth::logout();
        return redirect()->route('getHomePage');
    }

    public function getCheckPage()
    {
        return view('user.check');
    }

    public function getBangGiaTenMien()
    {
        $quocte = Domain::where('loai', '1')->take(14)->get();
        $vietnam = Domain::where('loai', '2')->take(14)->get();
        $dacbiet = Domain::where('loai', '0')->take(14)->get();
        $tatca = Domain::all();

        return view('user.banggiatenmien', compact('quocte', 'vietnam', 'dacbiet', 'tatca'));
    }

    public function getWordpressHosting()
    {
        $wp1 = Hosting::where('loaihosting', '3')->first();
        $wp2 = Hosting::where('loaihosting', '3')->skip(1)->first();
        $wp3 = Hosting::where('loaihosting', '3')->skip(2)->first();
        $giawp1 = ChiTietHosting::where('idhosting', $wp1->id)->get();
        $giawp2 = ChiTietHosting::where('idhosting', $wp2->id)->get();
        $giawp3 = ChiTietHosting::where('idhosting', $wp3->id)->get();
        return view('user.wordpresshosting', compact('wp1', 'wp2', 'wp3', 'giawp1', 'giawp2', 'giawp3'));
    }

    public function getHostingLinux()
    {
        $lh1 = Hosting::where('loaihosting', '1')->first();
        $lh2 = Hosting::where('loaihosting', '1')->skip(1)->first();
        $lh3 = Hosting::where('loaihosting', '1')->skip(2)->first();
        $lh4 = Hosting::where('loaihosting', '1')->skip(3)->first();
        $lh5 = Hosting::where('loaihosting', '1')->skip(4)->first();
        $gialh1 = ChiTietHosting::where('idhosting', $lh1->id)->get();
        $gialh2 = ChiTietHosting::where('idhosting', $lh2->id)->get();
        $gialh3 = ChiTietHosting::where('idhosting', $lh3->id)->get();
        $gialh4 = ChiTietHosting::where('idhosting', $lh4->id)->get();
        $gialh5 = ChiTietHosting::where('idhosting', $lh5->id)->get();
        return view('user.hostinglinux', compact('lh1', 'lh2', 'lh3', 'lh4', 'lh5', 'gialh1', 'gialh2', 'gialh3', 'gialh4', 'gialh5'));
    }

    public function getHostingWindows()
    {
        $hw1 = Hosting::where('loaihosting', '2')->first();
        $hw2 = Hosting::where('loaihosting', '2')->skip(1)->first();
        $hw3 = Hosting::where('loaihosting', '2')->skip(2)->first();
        $hw4 = Hosting::where('loaihosting', '2')->skip(3)->first();
        $hw5 = Hosting::where('loaihosting', '2')->skip(4)->first();
        $giahw1 = ChiTietHosting::where('idhosting', $hw1->id)->get();
        $giahw2 = ChiTietHosting::where('idhosting', $hw2->id)->get();
        $giahw3 = ChiTietHosting::where('idhosting', $hw3->id)->get();
        $giahw4 = ChiTietHosting::where('idhosting', $hw4->id)->get();
        $giahw5 = ChiTietHosting::where('idhosting', $hw5->id)->get();
        return view('user.hostingwindows', compact('hw1', 'hw2', 'hw3', 'hw4', 'hw5', 'giahw1', 'giahw2', 'giahw3', 'giahw4', 'giahw5'));
    }

    public function kiemTraTenMien($name, $domain)
    {
        $quocte = Domain::where('loai', '1')->take(14)->get();
        $vietnam = Domain::where('loai', '2')->take(14)->get();
        $dacbiet = Domain::where('loai', '0')->take(14)->get();
        $tatca = Domain::all();
        // dd(($this->checkDomain($name.$domain))['status']) ;

        $fulldomain = $name . $domain;
        $domaininfo = $this->checkDomain($fulldomain);
//        if($this->checkDomain($name.$domain)['status']==0)

        return view('user.kiemtratenmien', compact('quocte', 'vietnam', 'dacbiet', 'tatca', 'domaininfo', 'fulldomain', 'name', 'domain'));

    }

    public function checkDomain($domainName)
    {
//        try {
//
//
//// Checking availability
//            {
//                return (['status' => 0, 'message' => 'Tên miền ' . $domainName . ' chưa được đăng ký']);
//            }
//            {
//                $info = $whois->loadDomainInfo($domainName);
//
//                $info = ([
//                    'created' => date("d-m-Y", $info->creationDate),
//                    'expires' => date("d-m-Y", $info->expirationDate),
//                    'owner' => $info->owner,
//                ]);
//                return (['status' => 1, 'message' => 'Tên miền ' . $domainName . ' đã được đăng ký', 'info' => $info]);
//            }
//        } catch (Throwable $e) {
//            return (['status' => 2, 'message' => 'Không thể kiểm tra tên miền ' . $domainName . '. Hãy thử lại với tên khác.']);
//        }
//    }


        try {
            $kq = file_get_contents("http://www.whois.net.vn/whois.php?domain=" . $domainName);
            if ($kq == 0) {
                return (['status' => 0, 'message' => 'Tên miền ' . $domainName . ' chưa được đăng ký']);
            }
            if ($kq == 1) {

                try {
                    $info = file_get_contents("http://www.whois.net.vn/whois.php?domain=" . $domainName . "&act=getwhois");
                } catch (Throwable $e) {
                    $info = "<i>Chưa có thông tin</i>";
                }
                return (['status' => 1, 'message' => 'Tên miền ' . $domainName . ' đã được đăng ký', 'info' => $info]);
                //Echo "tên miền đã được đăng ký";
                // Lấy whois tên miền
                //echo file_get_contents( "http://www.whois.net.vn/whois.php?domain=".$domainName."&act=getwhois");
            }
        } catch (Throwable $e) {
            return (['status' => 2, 'message' => 'Không thể kiểm tra tên miền ' . $domainName . '. Hãy thử lại với tên khác.']);
        }
    }

    public function thanhToanTenMien($name, $domain) //trang xác nhận thanh toán
    {
        $fulldomain = $name . $domain;
        $domaininfo = $this->checkDomain($fulldomain);
        if ($domaininfo['status'] == 1)
            return redirect()->route('getBangGiaTenMien');
        $quocte = Domain::where('loai', '1')->take(14)->get();
        $vietnam = Domain::where('loai', '2')->take(14)->get();
        $dacbiet = Domain::where('loai', '0')->take(14)->get();
        $tatca = Domain::all();
        $gia = Domain::where('domain', $domain)->select('phiduytrimoinam')->first()->phiduytrimoinam;
        return view('user.thanhtoandomain', compact('gia', 'quocte', 'vietnam', 'dacbiet', 'tatca', 'domaininfo', 'fulldomain', 'name', 'domain'));
    }

    public function thanhToanHosting($loai, $sothang)
    {
        $hosting = Hosting::where('id', $loai)->first();
        $gia = ChiTietHosting::where('idhosting', $hosting->id)->where('sothang', $sothang)->get()[0]->gia;


        return view('user.thanhtoanhosting', compact('hosting', 'sothang', 'gia'));
    }


    public function getCart($name, $domain)
    {
        $this->checkDomain($name . $domain);
        dd($name . $domain);
        return $name . $domain;
    }

    public function ketThucThanhToan($name, $domain)
    {
        if (!Auth::check())
            return redrect()->route('getHomePage');


        $quocte = Domain::where('loai', '1')->take(14)->get();
        $vietnam = Domain::where('loai', '2')->take(14)->get();
        $dacbiet = Domain::where('loai', '0')->take(14)->get();
        $tatca = Domain::all();

        return view('user.ketthucthanhtoan', compact('quocte', 'vietnam', 'dacbiet', 'tatca', 'domaininfo', 'fulldomain', 'name', 'domain'));
    }

    public function postKetThucThanhToan(Request $req)
    {
        $this->validate($req,
            [
                'hoten' => 'required',
                'diachi' => 'required',
                'sodienthoai' => 'required'
            ], [
            ]);
        $hd = new HoaDonDomain();
        $hd->idnguoidung = Auth::User()->id;
        $hd->hoten = $req->hoten;
        $hd->diachi = $req->diachi;
        $hd->sodienthoai = $req->sodienthoai;
        $hd->name = $req->name;
        $hd->domain = $req->domain;
        $hd->gia = $req->gia;
        $hd->ngaytao = Carbon::now()->toDateTimeString();
        $hd->phuongthucthanhtoan = '0';
        $hd->trangthaiduyet = '0';
        $hd->save();

        return redirect()->route('getHomePage');
    }

    public function getDonHangCuaToi()
    {
        $tatcadonhang = HoaDonDomain::where('idnguoidung', Auth::User()->id)->get();
        return view('user.donhangcuatoi', compact('tatcadonhang'));
    }
}
