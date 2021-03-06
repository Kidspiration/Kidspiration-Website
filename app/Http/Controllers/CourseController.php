<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth')->only('create','store','update','edit','destroy');
    }

    public function welcome()
    {
        $courses = Course::all();
        return view ('admin.welcome', ['courses' => $courses]);
    }

    public function course()
    {
        $courses = Course::all();
        return view ('admin.course', ['courses' => $courses]);
    }

    public function courseA()
    {
        $courses = Course::where('grade', 'A')->get();
        return view ('admin.course-a', ['courses' => $courses]);
    }

    public function courseB()
    {
        $courses = Course::where('grade', 'B')->get();
        return view ('admin.course-b', ['courses' => $courses]);
    }

    public function courseC()
    {
        $courses = Course::where('grade', 'C')->get();
        return view ('admin.course-c', ['courses' => $courses]);
    }

    public function courseD()
    {
        $courses = Course::where('grade', 'D')->get();
        return view ('admin.course-d', ['courses' => $courses]);
    }

    public function courseE()
    {
        $courses = Course::where('grade', 'E')->get();
        return view ('admin.course-e', ['courses' => $courses]);
    }

    public function courseF()
    {
        $courses = Course::where('grade', 'F')->get();
        return view ('admin.course-f', ['courses' => $courses]);
    }

    public function quiz()
    {
        $courses = Course::all();
        return view ('admin.quiz', ['courses' => $courses]);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.create-course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate
        ([
            'grade' => 'required',
            'course' => 'required|unique:courses,course',
            'name' => 'required',
            'writer' => '',
            'image_1' => 'file|image|max:5000',
            'material_1' => ''
        ]);

        // Course::create($validateData);

        $course = new Course();
        $course->grade = $validateData['grade'];
        $course->course = $validateData['course'];
        $course->name = $validateData['name'];
        $course->writer = $validateData['writer'];

        if ($request['image_1'] != NULL)
            $course->image_1 = $validateData['image_1']->store('img','public');

        $course->material_1 = $validateData['material_1'];
        $course->save();

        return redirect()->route('courses.course')
        ->with('message',"{$validateData['name']} added successfully ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.show-course', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.edit-course',['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate
        ([
            'course' => 'required|unique:courses,course,'.$id,
            'image_1' => 'file|image|max:5000',
        ]);

        if ($request['image_1'] != NULL)
            $request->image_1 = $validateData['image_1']->store('img','public');

        DB::table('courses')->where('id', $id)->update
        ([
            'grade' => $request->grade,
            'name' => $request->name,
            'writer' => $request->writer,
            'course' => $request->course,
            'image_1' => $request->image_1,
            'material_1' => $request->material_1,
            'updated_at' => DB::raw('now()'),
        ]);

        return redirect()->route('courses.show', ['course' => $id])
            ->with('message', "{$request->name} updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = DB::table('courses')->where('id', $id)->delete();
        return redirect()->route('courses.course')
            ->with('message',"Course deleted successfully ");
    }
}
