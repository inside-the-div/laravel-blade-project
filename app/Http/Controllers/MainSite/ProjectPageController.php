<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
    public function projectPage() {
        return view('project');
    }
}
