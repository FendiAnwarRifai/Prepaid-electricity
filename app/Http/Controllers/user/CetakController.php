<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use DB;
class CetakController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function cetak_pdf($id , $id_transaksi)
    {
        $user= DB::table('users')
        ->join('pelanggan','pelanggan.id_user','=','users.id')
        ->join('detail_transaksi','detail_transaksi.id_user','=','users.id')
         ->join('harga_token','harga_token.kode','=','detail_transaksi.id_token')
        ->join('token','token.id_transaksi','=','detail_transaksi.id_transaksi')
        ->where('users.id','=',$id)
        ->where('detail_transaksi.id_transaksi','=',$id_transaksi)
        ->first();
        // $pdf = PDF::loadview('pelanggan/transaksi/detail/cetak_pdf',compact('user'));
        // $pdf->setPaper('a5', 'landscape');
        // return $pdf->download(''.$user->nama.' ('.$user->kode_transaksi.')');
        return view('pelanggan/transaksi/detail/cetak_pdf',compact('user'));
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
