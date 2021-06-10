<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User as AppUser;
use Illuminate\Http\Request;
use App\User;

class PrincipalController extends Controller
{
    
    public function index()
    {
        
        return view('Usuario.Index');
    }

    public function about()
    {
        
        return view('about');
    }

    public function welcome()
    {
        return view('welcome');
    }

   
    public function actividad()
    {
        return view('actividad');
    }

    public function nosotros()
    {
        return view('nosotros');
    }
    public function galeria()
    {
        return view('galeria');
    }
    public function voluntary()
    {
        return view('voluntary');
    }

    public function amigoReq()
    {
        return view('amigoReq');
    }
    public function realizarDonaciones()
    {
        return view('realizarDonaciones');
    }
    public function donation()
    {
        return view('donation');
    }
    public function roles()
    {
        return view('roles.asig');
    }
    public function administration()
    {
        return view('layouts.administration');
    }
    public function adminlayout()
    {
        return view('layouts.adminlayout');
    }

}