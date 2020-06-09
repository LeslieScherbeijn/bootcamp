<?php

namespace App\Http\Controllers;

use App\Article;
use App\Assignment;
use App\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    //Show every grade on a dedicated grade page
    public function index()
    {
        $grade = Grade::latest()->get();

        return view('grade.index', ['grade' => $grade]);
    }

    //This function shows the assignments to the page from the
    //Assignment database
    public function show($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.show', ['details' => $grade->details, 'grade' => $grade]);
    }

    //Here you can create a new grade in the
    //Grade Database
    public function create()
    {
        //
    }


//Edit an existing article within the
//Article database
    public function edit(Grade $grade)
    {
        return view('grade.edit', ['grade' => $grade]);
    }

    //Save the edited grade in the
    //Grade database
    public function update(Grade $grade)
    {
       //dd(request());
        $grade->update($this->validateGrade());

        return redirect('/grade' . $grade->Id);

    }

    //Give parameters which every grade should have in the
    //Grade database
    protected function validateGrade()
    {
       return request()->validate([
            'Course' => 'required',
            'EC' => 'required',
        ]);
    }
}
