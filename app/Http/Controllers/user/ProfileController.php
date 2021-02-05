<?php

namespace App\Http\Controllers\user;
use App\pelanggan;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use View;
use DB;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
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
    
    public function index($id)
    {
        $pel = pelanggan::where('id_user','=',$id)->first();
        $test = User::where('id','=',$id)->first();
        return view('pelanggan/myprofile',compact('pel','test'));
        
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
         //validasi data
        $this->validate($request, [
            'id_user' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'gender' => 'required'
        ]);

    //menyimpan ke table harga_token kemudian redirect page
        $p = pelanggan::find($request->id_pelanggan);

        if ($p == null) {
         $save = new pelanggan($request->all());
         $save->save();
     } else {
        $pel = pelanggan::find($request->id_pelanggan);
        $pel->id_user = $request->id_user;
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
    Alert::success('Data Berhasil Disimpan!!','Tersimpan')->persistent("OK");
    return redirect('beranda');
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
}
