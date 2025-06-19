<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::all();
        return view('registration.index');
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
        $registrations = new Registration();
        $registrations->user_id = $request->user_id;
        $registrations->id_course = $request->id_course;
        $registrations->registration_date = $request->registration_date;
        $registrations->save();
        return redirect()->route('registrations.index');
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
        $registrations = Registration::find($id);
        return view('registrations.edit', compact('registrations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $registrations = Registration::find($id);
        $registrations->id_course = $request->id_course;
        $registrations->course_name = $request->course_name;
        $registrations->registration_date = $request->registration_date;
        $registrations->save();

        return redirect()->route('registrations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registrations= Registration::find($id);
        $registrations->delete();
        return redirect()->route('regi$registrations.index');
    }
}
