<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function GuzzleHttp\default_ca_bundle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class SanatoriumsController extends Controller
{
    public function showSanatorium(Request $request, $sanatorium_id)
    {
       /*  $user = $request->user();
        $course = Course::find($course_id);
        $chapters = Chapter::where(['course_id' => $course_id])->with('themes')->get();
        $themes = Theme::where(['course_id' => $course_id])->get(); */
        /* return $course; */
        return view('sanatoriums.index', /* compact('course', 'themes', 'chapters') */);
        
    }
}