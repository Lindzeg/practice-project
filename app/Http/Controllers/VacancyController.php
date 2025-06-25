<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;


class VacancyController extends Controller
{

    public function index()
    {
        $vacancies = Vacancy::all();
        return view('vacancies.index',[
            'vacancies' => Vacancy::has('employer')->get(),
        ]);
    }

     public function create(Request $request)
    {
        if (Auth::guest()){
            $request->session()->flash('status', 'You need to have an account to create a vacancy.');
            return redirect('/login');
        }
        return view('vacancies.create');
    }

    public function edit(Request $request, Vacancy $vacancy )
    {
        //auth
        return view('vacancies.edit', ['vacancy' => $vacancy ]);
    }

    public function show(Request $request, Vacancy $vacancy)
    {
        return view('vacancies.show',[ 'vacancy' => $vacancy ]);
    }

    public function store(Request $request)
    {
        //validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:24'],
            'employment' => ['required'],
            'location' => ['required'],
            'working-hours' => ['required'],
            'education' => ['required'],
            'salary' => ['required'],           
        ]);

        Vacancy::create([
            'title' => request('title'),
            'description' => request('description'),
            'location' => request('location'),
            'hours' => request('working-hours'),
            'employment' => request('employment'),
            'education' => request('education'),
            'salary' => request('salary'),
            'employer_id' => auth()->user()->employer->id,
        ]);
        
        return redirect('/jobs');
    }

    public function update(Request $request, Vacancy $vacancy)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:24'],
            'employment' => ['required',],
            'location' => ['required', ],
            'working-hours' => ['required',],
            'education' => ['required',],
            'salary' => ['required'],           
        ]);

        if ($vacancy->employer->isNot(Auth::user()->employer)){
            abort(403);
        }

        $vacancy->update([
            'title' => request('title'),
            'description' => request('description'),
            'location' => request('location'),
            'hours' => request('working-hours'),
            'employment' => request('employment'),
            'education' => request('education'),
            'salary' => request('salary'),
            'employer_id' => auth()->user()->employer->id,
        ]);

        return view('vacancies.show', ['vacancy' => $vacancy]);
    }

    public function destroy(Request $request, Vacancy $vacancy)
    {
        if (Auth::guest()){
            $request->session()->flash('status', 'You need to have an account and log in to delete posts.');
            return redirect('/login');
        }

        if ($vacancy->employer->isNot(Auth::user()->employer)){
            abort(403);
        }

        if ($vacancy->employer->is(Auth::user()->employer)){
            $vacancy->delete();
        }
        
        return redirect('/vacancies');
    
    }

}

