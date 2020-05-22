<?php

namespace App\Http\Controllers;

use App\HoaDonDomain;
use App\HoaDonHosting;
use App\Http\Requests;
use App\Services\PayPalService as PayPalSvc;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PaypalController extends PayPalSvc
{
    private $paypalSvc;

    public function __construct(PayPalSvc $paypalSvc)
    {
        parent::__construct();

        $this->paypalSvc = $paypalSvc;
    }

    public function index(Request $req)
    {
        if($req->type=='hosting')
        {
            $hs=new HoaDonHosting();
            $hs->idnguoidung=Auth::User()->id;
            $hs->idgoidichvu=$req->hosting;
            $hs->ngaymua=Carbon::now()->toDateTimeString();
            $hs->ngaykichhoat=Carbon::now()->next('Monday')->toDateTimeString();
            $hs->ngayhethan=Carbon::now()->next('Monday')->addMonth($req->sothang)->toDateTimeString();
            $hs->trangthaiduyet = '0';
            dd($hs);
            $hs->save();
        }
        if($req->type=='domain')
        {
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

            $data = [
                [
                    'name' => $req->name . $req->domain,
                    'quantity' => 1,
                    'price' => $req->gia,
                    'sku' => '1'
                ],
            ];
            $transactionDescription = "Thanh toán dịch vụ HTVietNam";

            $paypalCheckoutUrl = $this->paypalSvc
                // ->setCurrency('eur')
                ->setReturnUrl(url('paypal/status'))
                // ->setCancelUrl(url('paypal/status'))
                ->setItem($data)
                // ->setItem($data[0])
                // ->setItem($data[1])
                ->createPayment($transactionDescription);

            if ($paypalCheckoutUrl) {
                return redirect($paypalCheckoutUrl);
            } else {
                dd(['Error']);
            }
        }



    }

    public function status()
    {
        $paymentStatus = $this->paypalSvc->getPaymentStatus();
        dd($paymentStatus);
    }

    public function paymentList()
    {
        $limit = 10;
        $offset = 0;

        $paymentList = $this->paypalSvc->getPaymentList($limit, $offset);

        dd($paymentList);
    }

    public function paymentDetail($paymentId)
    {
        $paymentDetails = $this->paypalSvc->getPaymentDetails($paymentId);

        dd($paymentDetails);
    }
}
