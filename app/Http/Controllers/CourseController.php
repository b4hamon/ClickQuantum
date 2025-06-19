<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Barryvdh\DomPDF\Facade\Pdf;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function generar_pdf()
    {

        $courses = Course::all();
        $pdf = Pdf::loadView('courses.generar_pdf', compact('courses'));
        return   $pdf->download('courses.pdf');
    }


    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $courses = new Course();
        $courses->course_duration = $request->course_duration;
        $courses->course_name = $request->course_name;
        $courses->course_description = $request->course_description;
        $courses->save();
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::find($id);
        return view('courses.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $courses->course_duration = $request->course_duration;
        $courses->course_name = $request->course_name;
        $courses->course_description = $request->course_description;
        $courses->save();

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses= Course::find($id);
        $courses->delete();
        return redirect()->route('courses.index');
    }
}
