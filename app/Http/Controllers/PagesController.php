<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{

    public function index()
    {
         if (\Auth::guest())
         {
            return view('pages.index');
         }
         else
         {
             $user_id = auth()->user()->id;
             $user = User::find($user_id);
             return view('dashboard')->with('posts', $user->posts);
         }
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }
}
