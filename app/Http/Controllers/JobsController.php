<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Vacancy;
use App\Models\User;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        $vacancies = Vacancy::all();
        $firstVacancies = $vacancies->take(3);
        $otherVacancies = $vacancies->skip(3);
        
        return view('jobs.index',[
            'jobs' => Job::has('user')->with('user')->latest()->simplePaginate(5),
            'vacancies' => Vacancy::has('employer')->get(),
            'firstVacancies' => $firstVacancies,
            'otherVacancies' => $otherVacancies,
            
        ]);
    }

    public function create(Request $request)
    {
        if (Auth::guest()){
            $request->session()->flash('status', 'You need to have an account to create posts.');
            return redirect('/login');
        }

        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job,]);
    }

    public function edit(Request $request, Job $job){
        if (Auth::guest()){
            $request->session()->flash('status', 'You need to have an account and log in to edit posts.');
            return redirect('/login');
        }

        if ($job->user->isNot(Auth::user())){
            abort(403);
        }

        return view('jobs.edit', ['job' => $job,]);
    }

    public function store(Request $request){
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:6'],
            'description' => ['required', 'min:24'],
            'file-upload' => ['required'],
        ]);

        $path = $request->file('file-upload')->store('uploads', 'public');
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
            'img_path' => $path,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/jobs');
    }

    public function update(Request $request, Job $job){
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:6'],
            'description' => ['required', 'min:24'],
            'file-upload' => ['required'],
        ]);

        if ($job->user->isNot(Auth::user())){
            abort(403);
        }

        $path = $request->file('file-upload')->store('uploads', 'public');
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
            'img_path' => $path,
        ]);

        return view('jobs.show', ['job' => $job]);
    }

    public function destroy(Request $request, Job $job){
        if (Auth::guest()){
            $request->session()->flash('status', 'You need to have an account and log in to delete posts.');
            return redirect('/login');
        }

        if ($job->user->isNot(Auth::user())){
            abort(403);
        }

        if ($job->user->is(Auth::user())){
            $job->delete();
        }

        
        return redirect('/jobs');
    }
}
