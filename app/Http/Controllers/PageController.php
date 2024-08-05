<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function customerLogin()
    {
        return view('customer-login');
    }

    public function ownerLogin()
    {
        return view('owner-login');
    }

    public function updateRoomVacancy()
    {
        return view('owner-room-vacancy');
    }
}
