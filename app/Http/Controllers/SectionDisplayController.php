<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Subsection;

class SectionDisplayController extends Controller
{
    //
    public function welcome() {
        $sections = Section::all();
        $subsections = Subsection::all();
    
        return view('welcome', ['sections' => $sections, 'subsections' => $subsections]);
    }

    public function displaySection($id) {
        $subsections = Subsection::where('section_id', $id)->get();
        $section = Section::where('id', $id)->firstOrFail();
        return view ('sections/sectionshow', ['subsections'=> $subsections, 'section' => $section]);
    }
}
