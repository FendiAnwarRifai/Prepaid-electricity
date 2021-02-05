<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\detail_transaksi;
use App\Token;
use App\User;
use Alert;
use View;
use DB;
class PendingController extends Controller
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
        $det = DB::table('users')
        ->join('detail_transaksi','detail_transaksi.id_user','=','users.id')
        ->where('detail_transaksi.keterangan','=',0)
        ->get();
        return view('admin/transaksi/tunda/grid',compact('det','b','d'))->with('i');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_transaksi)
    {
        $user = DB::table('users')
        ->join('detail_transaksi','detail_transaksi.id_user','=','users.id')
        ->where('detail_transaksi.id_transaksi','=',$id_transaksi)
        ->first();
        return view('admin.transaksi.tunda.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_transaksi)
    {
        $user = detail_transaksi::find($id_transaksi);
        $user->keterangan = $request->keterangan;
        $user->save();
        Alert::success('Data Berhasil Diperbarui!!','Tersimpan')->persistent("OK");
        return redirect('pending');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi)
    {
        $det = detail_transaksi::find($id_transaksi);
        $det->delete();
        $token = token::find($id_transaksi);
        $token->delete();
        Alert::success('Data Berhasil Dihapus!!','Terhapus')->persistent("OK");
        return redirect('pending');
    }
}
