<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function index($id)
    {
        $job = Job::getAllJobs()->find($id);
        return view('jobs.edit',[
            'job' => $job,
        ]);
    }

    public function post(Request $request){
        // dd($request->all());
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

    public function update(Request $request, $id){
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
        $job = Job::getAllJobs()->findOrFail($id);
        $path = $request->file('file-upload')->store('uploads', 'public');
        $job->update([
            'title' => request('job-title'),
            'author' => request('author'),
            'salary' => request('salary'),
            'job_description' => request('job-description'),
            'img_path' => $path,
        ]);

        //redirect to jobs page
        return redirect('jobs/show/'. $job->id)->with('message', 'Vacancy updated successfully');
    }


    public function destroy(Request $request, $id){
        //authorize (onHold)
        //delete job
        $job = Job::getAllJobs()->find($id);
        $job->delete();

        return redirect('/jobs');
    }
}
