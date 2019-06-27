<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Category;
use App\DailyRoutine;
use App\Gender;
use App\Meal;
use Illuminate\Http\Request;

class DietController extends Controller
{
    public function index(Request $request)
    {
        $genders = Gender::withTranslations($request->lang)->get();
        $activities = Activity::withTranslations($request->lang)->get();
        $routines = DailyRoutine::withTranslations($request->lang)->get();
        $meals = Meal::withTranslations($request->lang)->get();
        $categories = Category::withTranslations($request->lang)
            ->with(['eatables' => function ($query) use ($request) {
                $query->withTranslations($request->lang);
            }])
            ->get()
            ->keyBy('name');

        return view('diet', compact('genders', 'activities', 'routines', 'meals', 'categories'));
    }
}
