<?php

namespace App\Http\Controllers;

use App\Models\Nid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function userInfo(){
        $user   = User::find(Auth::user()->id);
        $nid    = Nid::where('user_id', Auth::user()->id)->first();
        return view('welcome', compact('nid', 'user'));
    }
}
