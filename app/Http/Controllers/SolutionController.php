<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution;
use App\Models\Phone;
use App\Models\Comment;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = Solution::all();

        return view('solution.index', compact('solutions'));
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
        'description'=>'required|min:10',
        'image'=>'nullable',
        'problem_id'=>'required'
         ));
        $solution = new Solution;
        $solution->description = $request->description;
        $solution->problem_id = $request->problem_id;
        
        $solution->save();

   
        return redirect()->back()->with('success_message', 'New Solution added successfully!');
        
    }

    public function delete($id)
    {
        $solution = Solution::findOrFail($id);
        $solution->delete();
        
        return redirect()->back()->with('success_message', ' Detroyed successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function probsolution($id){


        $solution = Solution::FindOrFail($id);

        return view('solution.show', compact('solution'));
    }




    public function problem_solution($id)
    {
        $phones =Phone::all();

         
        $solutions = Solution::all()->where('problem_id', $id);

        $problem = $id;

        return view('front.solutions', compact('solutions','phones', 'problem'));
    }

     public function comment(Request $request, $id)
    {
        $solution_comment = Solution::FindOrFail($id);
        $usercom = new Comment;
        $usercom->post = $request->post;
        $usercom->solution_id = $solution_comment->id;
        $usercom->save();
         return redirect()->back();
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
        $solution = Solution::findOrFail($id);
        $solution->delete();
        
        return redirect()->back()->with('success_message', ' Detroyed successfully!');

    }
}
