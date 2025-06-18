<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job,]);
    }

    public function store(Request $request){
        request()->validate([
            'job-title' => ['required', 'min:3'],
            'author' => ['required', 'min:1'],
            'salary' => ['required', 'min:6'],
            'job-description' => ['required', 'min:24'],
            'file-upload' => ['required'],
        ]);

        $path = $request->file('file-upload')->store('uploads', 'public');
        Job::create([
            'title' => request('job-title'),
            'author' => request('author'),
            'salary' => request('salary'),
            'job_description' => request('job-description'),
            'img_path' => $path,
        ]);

        return redirect('/jobs');
    }

    public function update(Request $request, Job $job){
        //validate
        request()->validate([
            'job-title' => ['required', 'min:3'],
            'author' => ['required', 'min:1'],
            'salary' => ['required', 'min:6'],
            'job-description' => ['required', 'min:24'],
            'file-upload' => ['required'],
        ]);

        //authorize (onHold)

        //update job
        $path = $request->file('file-upload')->store('uploads', 'public');
        $job->update([
            'title' => request('job-title'),
            'author' => request('author'),
            'salary' => request('salary'),
            'job_description' => request('job-description'),
            'img_path' => $path,
        ]);
        return redirect('jobs/show/'. $job->id);
    }

    public function edit(Request $request, Job $job){
        return view('jobs.edit', ['job' => $job,]);
    }

    public function destroy(Request $request, Job $job){
        //authorize (onHold)
        $job->delete();
        return redirect('/jobs');
    }
}
