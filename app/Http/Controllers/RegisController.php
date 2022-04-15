<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $field = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'namawisata' => 'required',
            'alamatwisata' => 'required',
            'certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



        User::create([
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => bcrypt($field['password']),
            'role' => 'owner',
        ]);



        $image = $request->certificate->storeOnCloudinaryAs('abp', $request->fileName);
        $path = $image->getSecurePath();

        Wisata::create([
            'username' => $field['username'],
            'nama_wisata' => $field['namawisata'],
            'alamat' => $field['alamatwisata'],
            'credential' => $path,
        ]);
        return redirect('/login');
    }
}
