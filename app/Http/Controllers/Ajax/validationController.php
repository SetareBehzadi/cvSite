<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;



class validationController extends Controller
{
    //
    public function validateUserName(Request $request)
    {
        $user=new User();
        $privilege = $request['privilege'];
        $message=$user->checkUniqueUserName($request, $privilege);
        return response()->json($message);
    }

    public function validateCategoryName(Request $request)
    {
        $category=new FrequentlyQuestionCategory();
        $message=$category->checkUniqueName($request);
        return response()->json($message);
    }

    public function testNotif(Request $request)
    {

        $notificationObj = new Notification;
        $orderObj = new Order;
        $tokens = $orderObj->getOrderDeviceToken();

        foreach ($tokens as $token){
            $notification = [
                'title' => 'نظرسنجی',
                'sound' => true,
                'order_id' => $token['order_id'],
                'package_id' => $token['package_id'],
                'restaurant_logo' => $token['log'],
                'package_image' => $token['package_img'],
            ];

            \Log::info('token');
            \Log::info($token);
            \Log::info($notification);
            $notificationObj->sendNotification($token['token'],$notification);

            $orderObj->updateAfterNotification($token['order_id']);
            \Log::info('updateAfterNotification');

        }
    }
}
