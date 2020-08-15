<?php


namespace App\Classes\Common;


use Illuminate\Support\Facades\Auth;

class User
{
    public static function UserId()
    {
        $userId = Auth::user()['id'];
        return $userId;
    }

    public static function UserEmail()
    {
        $userEmail = Auth::user()['email'];
        return $userEmail;
    }
    public static function UserfName()
    {

        $userfName = Auth::user()['fName'];
        return $userfName;
    }
    public static function UserlName()
    {
        $userlName = Auth::user()['lName'];
        return $userlName;
    }


}
