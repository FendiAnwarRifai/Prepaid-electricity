<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Alert;
use View;
use DB;
class ProfadminController extends Controller
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

    public function index($id)
    {
        $pel = Admin::where('id_admin','=',$id)->first();
        $test = User::where('id','=',$id)->first();
        return view('admin/profile',compact('pel','test'));
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
                 //validasi data
        $this->validate($request, [
            'id_user' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'gender' => 'required'
        ]);

        $p = Admin::find($request->id_user);

        if ($p == null) {
         $save = new Admin();
         $save->id_admin = $request->id_user;
         $save->nama = $request->nama;
         $save->tanggal_lahir = $request->tanggal_lahir;
         $save->hp = $request->hp;
         $save->alamat = $request->alamat;
         $save->gender = $request->gender;
         $save->save();
     } else {
        $pel = Admin::find($request->id_user);
        $pel->id_admin = $request->id_user;
        $pel->nama = $request->nama;
        $pel->tanggal_lahir = $request->tanggal_lahir;
        $pel->hp = $request->hp;
        $pel->alamat = $request->alamat;
        $pel->gender = $request->gender;
        $pel->save();
    }
    $login = User::find($request->id_user);
    $login->name = $request->nama;
    $login->save();
    Alert::success('Profile Berhasil Disimpan!!','Tersimpan')->persistent("OK");
    return redirect('/home');
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

    public function reset($id)
    {
        $akun = User::find($id);
        $akun->password = bcrypt('APTL');
        $akun->save();
        Alert::success('Password Berhasil Direset','Sukses')->persistent("OK");
        return redirect('/home');

    }
}
