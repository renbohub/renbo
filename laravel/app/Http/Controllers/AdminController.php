<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as Controller;

class AdminController extends Controller
{
    public function index(){
        $data['tittle'] = 'Porting - Dashboard';
        return view('pages.v_home',$data);
    }
}
