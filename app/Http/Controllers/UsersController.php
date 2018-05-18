<?php

namespace App\Http\Controllers;

use App\Entity\Users;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    //
    public function show(Users $user)
    {
        return view('users.show', compact('user'));
    }


    public function edit(Users $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, Users $user)
    {
//        dd($request->all());
        $user->update($request->all());
        return redirect()->route('users.show', $user->user_id)->with('success', '个人资料更新成功！');
    }
}
