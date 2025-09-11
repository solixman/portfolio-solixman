<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{


    public function index()
    {
        try {
        
            $user = User::with('skills', 'projects', 'experiences', 'educations')->find(1);
            return view('dashboard', compact('user'));
        } catch (Exception $e) {
        return $e->getMessage();
        }
        
    }


    public function showProject($id)
    {
        try {
            $project = Project::find($id);
            return view('project', compact('project'));
        } catch (Exception $e) {
            return back()->with(['error' => 'something went wrong']);
        }
    }
}
