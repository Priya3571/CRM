<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        if (Session::has('aid')) {
            return view('admin/dashboard');
        } elseif (Session::has('mid')) {
            echo view('m/dashboard');
        }  elseif (Session::has('uid')) {
            echo view('u/dashboard');
         } else {
            return view('index');
        }
    }

}
