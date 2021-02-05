<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use App\harga_token;
use App\pelanggan;
use App\User;
use App\detail_transaksi;
use App\Token;
use View;
use DB;
use Illuminate\Support\Facades\Auth;
class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        View::share('data',DB::table('detail_transaksi')->where('keterangan','=',0));
    }
    
    public function login()
    {
        Alert::success('Anda Berhasil Login!!','Sukses')->persistent("OK");
        return redirect('beranda');
    }

    public function index()
    {

        $b = 1;
        $d = 0;
        $token = harga_token::orderby('harga')->get();
        return view('pelanggan/beranda/beranda',compact('token','b','d'))->with('i');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tagihan($id_token, $id)
    {
        $pel = pelanggan::where('id_user','=',$id)->first();
        $login = User::where('id','=',$id)->first();
        $harga = harga_token::where('id_token','=',$id_token)->first();
        if ($pel == null) {
         Alert::error('Lengkapi Data Anda Terlebih Dahulu!!','Error')->persistent("OK");
         return redirect('beranda');
     } else {
         return view('pelanggan/beranda/tagihan',compact('pel','login','harga'));
     }


 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode, $id)
    {
        $acak = rand(1000,9999).'-'.rand(1000,9999).'-'.rand(1000,9999).'-'.rand(1000,9999).'-'.rand(1000,9999);
        $a = $request->kode_transaksi;
        $now = date('Y-m-d');

        $save = detail_transaksi::create([
            'id_user' => $id,
            'id_token' => $kode,
            'tanggal_transaksi' => $now,
            'kode_transaksi' => $a,
            'keterangan' => 0
        ])->id_transaksi;

        $simpan = new Token();
        $simpan->id_transaksi = $save;
        $simpan->id_user = $id;
        $simpan->kode_token = $acak;
        $simpan->save();

        Alert::success('Adalah Kode Transaksi Anda',$a)->persistent("OK");
        return redirect('userpending');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
