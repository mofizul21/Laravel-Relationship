<?php

namespace App\Http\Controllers;

use App\Models\Nid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // data inserted- http://prntscr.com/ymdwfp
    public function userInfo(){
        $user   = User::find(Auth::user()->id);
        return view('welcome', compact('user'));
    }
}
