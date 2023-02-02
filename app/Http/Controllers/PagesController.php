<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class PagesController extends Controller
{
    //
    public function index()
    {
        $announcements = Announcement::all();

        return view('landingpage', ['announcements' => $announcements]);
    }

    public function login()
    {
        return view('login');
    }
}
