<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Common\Image;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    protected $userObj;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->userObj =$repository;
    }

    public function index()
    {
        $userId = \App\Classes\Common\User::UserId();
        $user = $this->userObj->find($userId);
        return view('admin.account.adminInfo',compact("user"));
    }

    public function updateAcount(Request $request)
    {
        $userId = \App\Classes\Common\User::UserId();
        $data =$request->only(['username','first_name','last_name','email']);

        $user = $this->userObj->update($userId,$data);

        if ($request->hasFile('userImage')) {
            if($request->file('userImage')->isValid()) {
                $fileName = Image::uploadImage($request->file('userImage'), "/uploads/users/usersImage", $user['userImage']);

                $this->userObj->update($userId,['userImage' => $fileName]);
            }
        }

        return back()->with(Session::flash('flash_message', 'ویرایش کاربر با موفقیت انجام شد.'));

    }

    public function editPassword()
    {
        $user = \App\Classes\Common\User::UserId();
        return view('admin.account.changePasswordPage', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $userId = \App\Classes\Common\User::UserId();

        $user = $this->userObj->update($userId,['password' => bcrypt($request['newPassword'])]);
        return back()->with(Session::flash('flash_message', 'ویرایش رمزعبور با موفقیت انجام شد.'));
    }
}
