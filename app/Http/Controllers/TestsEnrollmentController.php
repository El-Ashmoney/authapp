<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\TestEnrollment;

class TestsEnrollmentController extends Controller
{
    public function sendTestNotification(){
        $user = User::first();
        $enrollmentData = [
            'body'              => 'You recived new test notification',
            'enrollmentText'    => 'You are allowed to enroll',
            'url'               => url('/'),
            'thankyou'          => 'You have 15 days to enroll',
        ];
        $user->notify(new TestEnrollment($enrollmentData));
    }
}
