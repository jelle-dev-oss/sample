<?php

namespace App\Http\Controllers;

use App\Models\User;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::with('profile')->get();

        return view('members.index', compact('members'));
    }
}
