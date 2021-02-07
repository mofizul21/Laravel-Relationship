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
        $nids = Nid::where('user_id', Auth::user()->id)->get();
        return view('welcome', compact('nids'));
    }
}
