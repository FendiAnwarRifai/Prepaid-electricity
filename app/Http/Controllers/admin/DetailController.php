<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\detail_transaksi;
use App\pelanggan;
use App\Token;
use App\User;
use Alert;
use View;
use DB;
class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        View::share('data',DB::table('detail_transaksi')->where('keterangan','=',0)->count());
    }

    public function index()
    {
        $b = 1;
        $d = 0;
        $user= DB::table('users')
        ->join('pelanggan','pelanggan.id_user','=','users.id')
        ->where('users.role','=','user')
        ->get();
        return view('admin/transaksi/hasil/grid',compact('user','b','d'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //tunggal
        $pel= DB::table('users')
        ->join('pelanggan','pelanggan.id_user','=','users.id')
        ->where('users.id','=',$id)
        ->first();
        //perulangan
        $user= DB::table('users')
        ->join('detail_transaksi','detail_transaksi.id_user','=','users.id')
        ->join('token','token.id_transaksi','=','detail_transaksi.id_transaksi')
        ->where('users.id','=',$id)
        ->orderBy('detail_transaksi.tanggal_transaksi', 'desc')
        ->get();

        return view('admin/transaksi/hasil/lihat',compact('user','pel'))->with('i');

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = detail_transaksi::where('id_user','=',$id);
        $detail->delete();
        $token = token::where('id_user','=',$id);
        $token->delete();
        Alert::success('Data Berhasil Dihapus!!','Terhapus')->persistent("OK");
        return redirect('detail');
    }
}
