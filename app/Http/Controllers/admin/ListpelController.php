<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\User;
use App\pelanggan;
use App\detail_transaksi;
use App\Token;
use View;
use DB;
class ListpelController extends Controller
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
        $user = User::where('role','=','user')->get();
        return view('admin/list_pel/grid',compact('user','b','d'))->with('i');
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
        $user = DB::table('users')
        ->join('pelanggan','pelanggan.id_user','=','users.id')
        ->where('users.id','=',$id)
        ->first();
        return view('admin/list_pel/view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')
        ->join('pelanggan','pelanggan.id_user','=','users.id')
        ->where('users.id','=',$id)
        ->first();
        if ($user == null) {
            Alert::warning('Data User Masih Kosong!!','Warning')->persistent("OK");
            return redirect('listpel');
        }
        return view('admin/list_pel/edit',compact('user'));
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
        $id_pelanggan = $request->id_pelanggan;
        $pelanggan = pelanggan::find($id_pelanggan);
        $pelanggan->nama = $request->nama;
        $pelanggan->tanggal_lahir = $request->tanggal_lahir;
        $pelanggan->hp = $request->hp;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->gender = $request->gender;
        $pelanggan->save();

        $user = User::find($id);
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->save();
        Alert::success('Data Berhasil Diedit!!','Tersimpan')->persistent("OK");
        return redirect('listpel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pel = pelanggan::where('id_user','=',$id)->first();
        $det = detail_transaksi::where('id_user','=',$id)->first();

        if ($pel == null && $det == null) {
            $user = User::find($id)->delete();
        }elseif ($det == null) {
           $user = User::find($id)->delete();
           $pel = pelanggan::where('id_user','=',$id)->delete();
       }else{
        $user = User::find($id)->delete();
        $pel = pelanggan::where('id_user','=',$id)->delete();
        $det = detail_transaksi::where('id_user','=',$id)->delete();
        $token = Token::where('id_user','=',$id)->delete();
    }
    Alert::success('User Berhasil Dhapus!!','Terhapus')->persistent("OK");
    return redirect('listpel');


}
}
