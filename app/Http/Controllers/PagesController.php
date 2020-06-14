<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Weclome to this Simple Post Laravel Framework";
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = [
          'title' => 'Services',
          'services' => ['Web Design', 'ProgrammingKnowledge', 'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
