<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use DB;
// use App\Models\Data;

class karyawanController extends Controller
{
    function show(){
        
        $data = karyawan::all();
        return view('pages.list', ['karyawan' => $data]);
    }

    function addData (Request $req){

        // print_r($req->input());
        $data = new karyawan;
        $data->Nama = $req->nama;
        $data->Alamat = $req->alamat;
        $data->NoKtp = $req->NoKtp;
        $data->save();
        return redirect('/');
    }

    public function delete($NoKtp)
    {
        $max = DB::table('karyawan')->max('id') + 1; 
        DB::delete('delete from karyawan where NoKtp = ?', [$NoKtp]);
        DB::statement("ALTER TABLE karyawan AUTO_INCREMENT =  $max");
        return redirect('/')->with('success','Data Deleted');
    }

    public function edit($NoKtp)
    {
        $karyawan = DB::select('select * from karyawan where NoKtp = ?', [$NoKtp]);
        return view('pages.editForm',['karyawan'=>$karyawan]);
    }

    public function update(Request $req,$NoKtp)
    {
        $nama = $req->input('Nama'); 
        $alamat = $req->input('Alamat');
        $NoKtp = $req->input('NoKtp');
        $NoKtpC = $req->input('NoKtp');
        
        DB::update('update karyawan set Nama = ?, Alamat = ?, NoKtp = ? where NoKtp = ?',
        [$nama, $alamat, $NoKtp, $NoKtpC]);
        return redirect('/');
    }
}
