<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{



   public function index()
   {
    return view('register',
    [
      'title'=>'register'
    ]);

   }

   public function store(Request $request)
   {

     $data = $request->validate([
        'username'=>'required|string|min:4|max:255',
        'nama' => 'required|string|min:4|max:255',
        'jabatan'=> 'required|in:Kepala,Guru,Siswa',
        'institusi'=> 'required|in:SmknCompreng,SmknCimahi,SmknPadalarang',
        'kota'=> 'required|in:Subang,Cimahi,Bandung',
        'nohp' => 'required|min:8|max:18',
        'email' => 'required|string|email:dns|max:255|unique:users',
        'password' => 'required|string|min:3|max:8|confirmed',
    ]);

    User->creaate($data); 

   }

 

}
