<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Formation;
use App\Models\Parameter;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $heroTitle = Parameter::where('name', '=', 'APP_HOME_HERO_TITLE')->first()->value;
        $heroSubTitle = Parameter::where('name', '=', 'APP_HOME_HERO_SUB_TITLE')->first()->value;
        $courseNumber = Course::query()->count();
        $formationNumber = Formation::query()->count();

        return view('frontend.home.index', [
            'heroTitle' => $heroTitle,
            'heroSubTitle' => $heroSubTitle,
            'courseNumber' => $courseNumber,
            'formationNumber' => $formationNumber
        ]);
    }
}
