<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function dashboard() {
        $users = User::simplePaginate(15);
        return view('dashboard')->with('users', $users);
    }
}
