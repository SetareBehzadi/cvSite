<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Repository;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = new Repository($user);
    }

    public function index()
    {
        $userId = \App\Classes\Common\User::UserId();
        $user = $this->userModel->find($userId);
        return view('admin.account.adminInfo',compact("user"));
    }

    public function edit(Request $request)
    {
        
    }
}
