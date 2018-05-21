<?php

namespace App\Http\Controllers;

use App\Entity\Users;
use App\Handlers\ImageUploadHandler;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    //
    public function show(Users $user)
    {
        return view('users.show', compact('user'));
    }


    public function edit(Users $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, ImageUploadHandler $uploader, Users $user)
    {
        $this->authorize('update', $user);
        $data = $request->all();

        if ($request->avatar)
        {
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 362);
            if ($result)
            {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);

        return redirect()->route('users.show', $user->user_id)->with('success', '个人资料更新成功！');
    }
}
