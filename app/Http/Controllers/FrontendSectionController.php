<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontendSections;

class FrontendSectionController extends Controller
{
 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $frontsections = FrontendSections::all();

        return view("Admin.Sections.index",compact('frontsections'));
    }
}
