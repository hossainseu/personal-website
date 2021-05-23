<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\CourseModel;

class HomeController extends Controller
{
    function HomeIndex(){
        $userIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate=date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$userIP,'visit_time'=>$timeDate]);
        $CoursesData= json_decode(CourseModel::orderBy('id','desc')->limit(6)->get());

        

        return view('Home',[
        
            'CoursesData'=>$CoursesData,
            
        ]);
    }
}
