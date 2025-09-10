<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    

    public function index(){

            $user=User::with('skills','projects','experiences','educations')->find(1);
                
            return view('dashboard',compact('user'));
        }

}
