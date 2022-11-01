<?php

namespace App\Http\Controllers;

use App\Models\coursemodel;

use Illuminate\Http\Request;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $courses = coursemodel::all();
        return view ('showAllCourses')->with('courses', $courses);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new coursemodel;
        $course->Course_Name = $request->Course_Name;    
        $course->Teacher_Name = $request->Teacher_Name;  
        $course->Credit_Hours = $request->Credit_Hours;  
        $course->Teaching_Day = $request->Teaching_Day;  
        $course->save();
        return redirect('course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Course_Code
     * @return \Illuminate\Http\Response
     */
    public function show($Course_Code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Course_Code
     * @return \Illuminate\Http\Response
     */
    public function edit($Course_code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Course_Code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Course_Code)
    {
        $course = courseModel::find($Course_Code);
        $course->Course_Name = $request->Course_Name;    
        $course->Teacher_Name = $request->Teacher_Name;  
        $course->Credit_Hours = $request->Credit_Hours;  
        $course->Teaching_Day = $request->Teaching_Day;  
        $course->save();
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Course_Code
     * @return \Illuminate\Http\Response
     */
    public function destroy($Course_Code)
    {
        $course = courseModel::find($Course_Code);
        $course->delete();
        return redirect('course');
    }
}
