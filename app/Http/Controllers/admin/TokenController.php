<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\harga_token;
use Alert;
use View;
use DB;
class TokenController extends Controller
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
        return view('admin.beranda.tambah_token');
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
            'kode' => 'required',
            'nominal' => 'required',
            'harga' => 'required'
        ]);

    //menyimpan ke table harga_token kemudian redirect page 
        $nominal = $request->nominal;
        $harga = $request->harga;
        $nominal_str = preg_replace("/[^0-9]/", "", $nominal);
        $harga_str = preg_replace("/[^0-9]/", "", $harga);
        $save = new harga_token($request->all());
        $save->nominal = $nominal_str;
        $save->harga = $harga_str;
        $save->save();
        Alert::success('Data Berhasil Ditambahkan!!','Tersimpan')->persistent("OK");
        return redirect("/home");
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
    public function edit($id_token)
    {
        $token = harga_token::where('id_token','=',$id_token)->first();
        return view('admin.beranda.edit_token',compact('token'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_token)
    {
        //validasi data
        $this->validate($request, [
            'kode' => 'required',
            'nominal' => 'required',
            'harga' => 'required'
        ]);

    //menyimpan ke table harga_token kemudian redirect page 
        $token = harga_token::find($id_token);
        $token->kode = $request->get('kode');
        $token->nominal = preg_replace("/[^0-9]/", "", $request->get('nominal'));
        $token->harga = preg_replace("/[^0-9]/", "", $request->get('harga'));
        $token->save();
        Alert::success('Data Berhasil Diupdate!!','Update')->persistent("OK");
        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_token)
    {
        $token = harga_token::find($id_token);
        $token->delete();
        Alert::success('Data Berhasil Dihapus!!','Terhapus')->persistent("OK");
        return redirect("/home");
    }
}
