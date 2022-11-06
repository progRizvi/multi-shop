<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function list(){
        $feedbacks = Feedback::all();
        return view("backend.pages.feedback.feedback",compact("feedbacks"));
    }
}