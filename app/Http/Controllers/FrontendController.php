<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Members;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Publications;
use App\Models\Research;

class FrontendController extends Controller
{
    public function index() {

        $news = News::all();
        return view('Frontend.index')->with('news', $news);
    }

    public function single_news($id) {

        $news = News::find($id);
        $all_news = News::all();
        return view('Frontend.single_news')->with(['news'=> $news, 'all_news'=>$all_news]);
    }

    public function research() {
        $research = Research::all();
        return view('Frontend.research')->with(['research'=> $research]);
    }

    public function single_research($id) {
        $research = Research::all();
        $single_research = Research::find($id);
        return view('Frontend.single_research')->with(['research'=> $research, 'single_research'=>$single_research]);
    }

    public function activities() {
        $activities = Activity::all();
        return view('Frontend.activities')->with(['activities'=> $activities]);
    }

    public function single_activity($id) {
        $activities = Activity::all();
        $single_activity = Activity::find($id);
        return view('Frontend.single_activity')->with(['activities'=> $activities, 'single_activity'=>$single_activity]);
    }

    public function publication() {
        $publication = Publications::all();
        return view('Frontend.publication')->with(['publication'=> $publication]);
    }

    public function single_publication($id) {
        $publication = Publications::all();
        $single_publication = Publications::find($id);
        return view('Frontend.single_publication')->with(['publication'=> $publication, 'single_publication'=>$single_publication]);
    }

    public function members() {
        $members = Members::all();
        return view('Frontend.members')->with(['members'=> $members]);
    }

    public function student() {
        $members = Members::all();
        return view('Frontend.student')->with(['members'=> $members]);
    }

    public function researcher() {
        $members = Members::all();
        return view('Frontend.researcher')->with(['members'=> $members]);
    }

    public function single_members($id) {
        $members = Members::all();
        $single_member = Members::find($id);
        return view('Frontend.single_member')->with(['members'=> $members, 'single_member'=>$single_member]);
    }

    public function about_us() {
        return view('Frontend.about_us');
    }



}
