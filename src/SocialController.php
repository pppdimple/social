<?php

namespace Mentorshiprocket\Social;

use App\Http\Controllers\Controller;

use Carbon\Carbon;

class SocialController extends Controller
{
    public function index($timezone = null)
    {	
       	date_default_timezone_set("Asia/Kolkata"); 
    	echo Carbon::now($timezone)->toDateTimeString();
    }
}