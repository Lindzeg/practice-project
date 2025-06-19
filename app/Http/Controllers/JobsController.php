<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;

class JobsController extends Controller
{
    public function index()
    {

    }

    public function create(Request $request)
    {
        if (Auth::guest()){
            $request->session()->flash('status', 'You need to have an account to create posts.');
            return redirect('/login');
        }

        if ($job->employer->user->isNot(Auth::user())){
            abort(403);
        }

        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job,]);
    }

    public function store(Request $request){
        request()->validate([
            'title' => ['required', 'min:3'],
            'author' => ['required', 'min:1'],
            'salary' => ['required', 'min:6'],
            'description' => ['required', 'min:24'],
            'file-upload' => ['required'],
        ]);

        $path = $request->file('file-upload')->store('uploads', 'public');
        Job::create([
            'title' => request('title'),
            'author' => request('author'),
            'salary' => request('salary'),
            'description' => request('description'),
            'img_path' => $path,
        ]);

        return redirect('/jobs');
    }

    public function update(Request $request, Job $job){
        //validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'author' => ['required', 'min:1'],
            'salary' => ['required', 'min:6'],
            'description' => ['required', 'min:24'],
            'file-upload' => ['required'],
        ]);

        if ($job->employer->user->isNot(Auth::user())){
            abort(403);
        }

        //update job
        $path = $request->file('file-upload')->store('uploads', 'public');
        $job->update([
            'title' => request('title'),
            'author' => request('author'),
            'salary' => request('salary'),
            'description' => request('description'),
            'img_path' => $path,
        ]);

        return redirect('jobs/show/'. $job->id);
    }

    public function edit(Request $request, Job $job){
        if (Auth::guest()){
            $request->session()->flash('status', 'You need to have an account and log in to edit posts.');
            return redirect('/login');
        }

        if ($job->employer->user->isNot(Auth::user())){
            abort(403);
        }

        return view('jobs.edit', ['job' => $job,]);
    }

    public function destroy(Request $request, Job $job){
        if (Auth::guest()){
            $request->session()->flash('status', 'You need to have an account and log in to delete posts.');
            return redirect('/login');
        }

        if ($job->employer->user->isNot(Auth::user())){
            abort(403);
        }

        $job->delete();
        return redirect('/jobs');
    }
}
