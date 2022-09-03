<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialPageController extends Controller
{
    public function testimonialPage() {
        return view('testimonial');
    }
}
