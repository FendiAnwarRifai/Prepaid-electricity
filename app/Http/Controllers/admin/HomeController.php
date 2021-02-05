<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\harga_token;
use View;
use DB;
class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
        {
            $this->middleware('auth');
            View::share('data',DB::table('detail_transaksi')->where('keterangan','=',0)->count());
        }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function pemisah(){
     if (Auth::user()->role == "admin") {
        return redirect('/home');
    } else {
        return redirect('beranda');
    }
}
public function alertlogin()
{
    if (Auth::user()->role == "admin") {
        Alert::success('Anda Berhasil Login!!','Sukses')->persistent("OK");
        return redirect('/home');
    } else {
        return redirect('userpage');
    }

}
public function index()
{
    $b = 1;
    $d = 0;
    $token = harga_token::orderby('harga')->get();
    return view('admin/beranda/beranda',compact('token','b','d'))->with('i');

}
}
