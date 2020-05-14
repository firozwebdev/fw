<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.get');
    }
}
