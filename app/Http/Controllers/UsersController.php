<?php

namespace App\Http\Controllers;

use App\Entity\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function show(Users $user)
    {
        return view('users.show', compact('user'));
    }
}
