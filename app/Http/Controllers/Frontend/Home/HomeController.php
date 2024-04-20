<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Formation;
use App\Models\Parameter;
use App\Models\Profile;
use Illuminate\View\View;
use PhpParser\Builder;

class HomeController extends Controller
{
    public function index(): View
    {
        $heroTitle = Parameter::where('name', '=', 'APP_HOME_HERO_TITLE')->first()->value;
        $heroSubTitle = Parameter::where('name', '=', 'APP_HOME_HERO_SUB_TITLE')->first()->value;
        $courseNumber = Course::query()->count();
        $formationNumber = Formation::query()->count();
        $userRegistrationNumber = Profile::where('name', '=', 'CUSTOMER')->count();
        $heightLightedCourses = Course::with('category')->where('number_view', '>', 200)
            ->limit(3)
            ->get()
        ;
        $heightLightedFormations = Formation::with('category')->where('number_view', '>', 200)
            ->limit(3)
            ->get()
        ;
        $lastTestimonials = Comment::with('user')->limit(3)->orderByDesc('created_at')->get();

        return view('frontend.home.index', [
            'heroTitle' => $heroTitle,
            'heroSubTitle' => $heroSubTitle,
            'courseNumber' => $courseNumber,
            'formationNumber' => $formationNumber,
            'userRegistrationNumber' => $userRegistrationNumber,
            'categories' => Category::select('*')->limit(10)->get(),
            'heightLightedCourses' => $heightLightedCourses,
            'heightLightedFormations' => $heightLightedFormations,
            'lastTestimonials' => $lastTestimonials
        ]);
    }
}
