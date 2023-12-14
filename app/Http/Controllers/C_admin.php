<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_admin extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function index()
    {
        $role = session('role');
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$getallonsiswa);
        $siswaon = json_decode($response);

        // dd($siswaon);
        // die;

        return view('adminpage', [
            'role' => $role,
            'siswa' => $siswaon,
            'urlapi' => $this->urlApi, // Assuming the data key holds the actual blog data // Assuming the pagination data is separate
        ]);
    }

    public function r_admin()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$alladmin);
        $admin = json_decode($response)->data->original;

        // dd($admin);
        // die;

        return view('r_admin', [
            'admin' => $admin
        ]);
    }

    public function c_admin()
    {
        return view('c_admin');
    }

    public function u_admin()
    {
        return view('u_admin');
    }

    public function d_admin()
    {
        return view('d_admin');
    }
}
