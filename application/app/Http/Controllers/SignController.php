<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $signs = \App\Sign::with(['student', 'subject'])->paginate();
    return view('signs/index', ['signs' => $signs]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $students = \App\Student::all();
    $subjects = \App\Subject::all();
    return view('signs/create', ['subjects'=>$subjects, 'students'=>$students]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{

    $validator = \Validator::make($request->all(), [
        'test1date' => 'required|date',
        'test1grade' => 'required|numeric',
        'test2date' => 'required|date',
        'test2grade' => 'required|numeric',
        'testdate'=>'required|date',
        'testgrade'=>'required|numeric',
        'presence'=>'numeric',
        'student_id'=>'required',
        'subject_id'=>'required'

    ]);

    if ($validator->fails()) {
        return redirect()->action('SignController@create')
            ->withErrors($validator);
    }

    $data = $request->input();
    \App\Sign::create($data);
    return redirect()->action('SignController@index');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
