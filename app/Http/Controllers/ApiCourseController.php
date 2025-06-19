<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class ApiCourseController extends Controller
{
    /**
     * Display a listing of the resorce.
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
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
        return response()->json($courses);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = Course::find($id);
        return response()->json($courses);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::find($id);
        return response()->Json($courses);
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
        return response()->json($courses);

    }

    public function destroy(string $id)
    {
        $courses = Course::find($id);
        $courses->delete();
        return response()->Json($courses);
    }
}
