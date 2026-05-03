<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PageController extends Controller
{
    public function home()
    {
        $projects = Project::where('is_published', true)
            ->orderBy('sort_order')
            ->get();

        return view('home', compact('projects'));
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function services()
    {
        return view('services');
    }

    public function faq()
    {
        return view('faq');
    }

    public function policies()
    {
        return view('policies');
    }

    public function portfolio()
    {
        $projects = Project::where('is_published', true)
            ->orderBy('sort_order')
            ->get();

        return view('portfolio', compact('projects'));
    }

    public function project(Project $project)
    {
        if (! $project->is_published) {
            abort(404);
        }

        return view('layouts.project', compact('project'));
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function sent()
    {
        return view('sent-correctly');
    }

    public function ragForm()
    {
        return view('rag-form');
    }

    public function scheduleForm()
    {
        return view('schedule-form');
    }
}
