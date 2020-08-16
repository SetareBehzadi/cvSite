<?php

namespace App\Http\Controllers\Admin;

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

    public function update(Request $request)
    {
        $userId = \App\Classes\Common\User::UserId();
        $data =$request->only($this->userObj->getModel()->fillable);
//        'username', 'email', 'password','first_name','last_name','privilege','userImage'
//        $data['username'] = $request['linkedin'];
//        $data['email'] = $request['telegram'];
//        $data['instagram'] = $request['instagram'];
//        $data['facebook'] = $request['facebook'];
        $user = $this->userObj->update($userId,$data);
        return Redirect(route('home'))->with(Session::flash('flash_message', 'ویرایش کاربر با موفقیت انجام شد.'));

    }
}
