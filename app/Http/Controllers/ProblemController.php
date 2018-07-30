<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use App\Models\Phone;
use App\Models\Model;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faults= Problem::orderBy('id', 'topic')->paginate(5);
        $phones = Phone::all();
        $models = Model::all();

        return view('admin.problems.index', compact('faults','models','phones'));
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
        $this->validate($request, array(
        'topic'=>'required',
        'type'=>'required',
        'description'=>'required',
        'model_id'=>'required'
         ));
        $fault = new Problem;
        $fault->topic = $request->topic;
        $fault->type = $request->type;
        $fault->description = $request->description;
        $fault->model_id = $request->model_id;
        $fault->save();
        return redirect()->route('problems.index')->with('success_message', 'A New fault recorded successfully!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phones=Phone::all();
        $models = Model::all();
        $problem = Problem::findOrFail($id);
        $solutions = Problem::findOrFail($id)->solutions;
        return view("admin.problems.show", compact('solutions', 'problem', 'phones', 'models'));
    }

    function model_problem($id)
    {
        $phones = Phone::all();
        $prob = Problem::all()->where('model_id', $id)->first();
        $problems = Problem::all()->where('model_id', $id);
    
        return view("front.problem", compact('phones','problems','prob'));
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
        $fault = Problem::findOrFail($id);

        $fault->delete();

        return redirect()->route('problems.index')->with('success_message', 'A fault has been successfully deleted!');
    }
}
