<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function about(){
        return view('home.about');
    }

    public function services(){
        return view('services.index');
    }

    public function home_health_and_qa(){
        return view('services.hospice_coding_and_qa');
    }

    public function hospice_coding_and_qa(){
        return view('services.hospice_coding_and_qa');
    }

    public function clinical_administrative(){
        return view('services.clinical_administrative');
    }

    public function revenue_cycle_management(){
        return view('services.revenue_cycle_management');
    }

    public function care_management(){
        return view('services.care_management');
    }

    public function hospice_billing(){
        return view('services.hospice_billing');
    }
    public function home_health_billing(){
        return view('services.home_health_billing');
    }

  
    public function insights(){
        return view('insights.index');
    }

    public function insights_1(){
        return view('insights.insights_1');
    }

    public function careers(){
        return view('home.careers');
    }

    public function partner_with_us(){
        return view('home.partner_with_us');
    }

    public function privacy_policy(){
        return view('home.privacy_policy');
    }

    

}
