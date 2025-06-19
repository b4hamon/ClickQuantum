<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Activity;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function actgenerar_pdf()
     {
 
         $activities = Activity::all();
         $pdf = Pdf::loadView('activities.actgenerar_pdf', compact('activities'));
         return   $pdf->download('activities.pdf');
     }
 
    public function index()
    {
        $activities = Activity::all();
        $courses = Course::all();
     
        return view('activities.index', compact('activities','courses'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $activities = new Activity();
        $activities->activity_description = $request->activity_description;
        $activities->activity_date_limit = $request->activity_date_limit;
        $activities->id_course = $request->id_course;
        $activities->save();


        return redirect()->route('activities.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
   
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activities = Activity::findOrFail($id);
        $courses = Course::all();
        return view('activities.edit', compact('activities','courses'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activities = Activity::find($id);
        $activities->activity_description = $request->activity_description;
        $activities->activity_date_limit = $request->activity_date_limit;
        $activities->id_course = $request->id_course;
       
        $activities->save();


        return redirect()->route('activities.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activities = Activity::find($id);
        $activities->delete();
        return redirect()->route('activities.index');
    }
}
