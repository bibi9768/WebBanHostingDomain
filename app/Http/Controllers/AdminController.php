<?php

namespace App\Http\Controllers;

use App\Domain;
use App\HoaDonDomain;
use App\HoaDonHosting;
use App\Hosting;
use App\Users;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.app');
    }

    public function getTrangChu()
    {
        return view('Admin.trangchu');
    }

    public function getQuanLyHDTenMien()
    {
        $hoadon = HoaDonDomain::orderBy('id', 'DESC')->paginate(10);
        return view('Admin.quanlyhoadontenmien', compact('hoadon'));
    }

    public function getQuanLyHDHosting()
    {
        $hoadon = HoaDonHosting::orderBy('id', 'DESC')->paginate(10);
        return view('Admin.quanlyhoadonhosting', compact('hoadon'));
    }

    public function getQuanLyTenMien()
    {
        $domain = Domain::orderBy('id', 'DESC')->paginate(10);
        return view('Admin.quanlytenmien', compact('domain'));
    }

    public function getSuaTenMien($id)
    {
        $domain = Domain::where('id', $id)->first();
        return view('Admin.suadomain', compact('domain'));
    }

    public function postSuaTenMien(Request $req)
    {
        $domain = Domain::where('id', $req->id)->update(
            [
                'domain' => $req->domain,
                'phidangkynamdau' => (int)$req->phidangkynamdau,
                'phiduytrimoinam' => (int)$req->phiduytrimoinam,
                'loai' => $req->loai
            ]
        );
        return redirect()->route('getQuanLyTenMien')->with(['message' => 'Đã sửa tên miền ']);;
    }

    public function getThemTenMien()
    {
        return view('Admin.themdomain');
    }

    public function postThemTenMien(Request $req)
    {
        $domain = new Domain();
        $domain->domain = $req->domain;
        $domain->phidangkynamdau = (int)$req->phidangkynamdau;
        $domain->phiduytrimoinam = (int)$req->phiduytrimoinam;
        $domain->loai = $req->loai;
        $domain->save();
        return redirect()->route('getQuanLyTenMien')->with(['message' => 'Đã thêm tên miền ']);;
    }

    public function getXoaTenMien($id)
    {
        $domain = Domain::where('id', $id)->delete();
        return redirect()->route('getQuanLyTenMien')->with(['message' => 'Đã xoá tên miền ']);
    }

    public function getQuanLyHosting()
    {
        $hosting = Hosting::paginate(10);
        return view('Admin.quanlyhosting', compact('hosting'));
    }

    public function getSuaHosting($id)
    {
        $hosting = Hosting::where('id', $id)->first();
        return view('Admin.suahosting', compact('hosting'));
    }

    public function postSuaHosting(Request $req)
    {
        $hosting = Hosting::where('id', $req->id)->update([
            'tengoi' => $req->tengoi,
            'loaihosting' => $req->loai,
            'giabatdautu' => $req->giabatdautu,
            'dungluong' => $req->dungluong,
            'bangthong' => $req->bangthong,
            'website' => $req->website,
            'phanmemquantri' => $req->phanmemquantri
        ]);
        return redirect()->route('getQuanLyHosting')->with(['message' => 'Đã cập nhật thông tin hosting']);
    }

    public function getThemHosting()
    {
        return view('Admin.themhosting');
    }

    public function postThemHosting(Request $req)
    {
        $hosting = new Hosting();
        $hosting->tengoi = $req->tengoi;
        $hosting->loaihosting = $req->loai;
        $hosting->giabatdautu = $req->giabatdautu;
        $hosting->dungluong = $req->dungluong;
        $hosting->bangthong = $req->bangthong;
        $hosting->website = $req->website;
        $hosting->phanmemquantri = $req->phanmemquantri;
        $hosting->save();
        return redirect()->route('getQuanLyHosting')->with(['message' => 'Đã thêm mới hosting']);
    }

    public function getXoaHosting($id)
    {
        $hosting = Hosting::where('id', $id)->delete();
        return redirect()->route('getQuanLyHosting')->with(['message' => 'Đã xoá một hosting']);
    }

    public function getQuanLyNguoiDung()
    {
        $nguoidung = Users::paginate(10);
        return view('Admin.quanlynguoidung', compact('nguoidung'));
    }

}
