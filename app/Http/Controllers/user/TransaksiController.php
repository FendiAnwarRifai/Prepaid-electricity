<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\detail_transaksi;
use App\pelanggan;
use App\Token;
use App\User;
use Alert;
use View;
use DB;
class TransaksiController extends Controller
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
    
    public function index()
    {
        $b = 1;
        $d = 0;
        $user= DB::table('users')
        ->join('detail_transaksi','detail_transaksi.id_user','=','users.id')
        ->join('token','token.id_transaksi','=','detail_transaksi.id_transaksi')
        ->where('detail_transaksi.keterangan','=', 1)
        ->where('users.id','=',Auth::user()->id) 
        ->get();
        return view('pelanggan/transaksi/detail/grid',compact('user','b','d'))->with('i');
    }
 
    public function pending()
    {
        $id = Auth::user()->id;
        $detail = detail_transaksi::where('id_user','=',$id)->where('keterangan','=',0)->orderby('tanggal_transaksi')->get();
        return view('pelanggan/transaksi/grid',compact('detail'))->with('i');
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
        //
    }
}
