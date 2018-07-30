<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use DB;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $random_phones = Phone::orderBy(DB::raw('RAND()'))->take(4)->get();

        $phones = Phone::orderBy('id', 'name')->paginate(5);

        return view('phones.index', compact('phones', 'random_phones'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        return view('admin.phones.create');
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
        'brand'=>'required|max:10'
         ));
        $phone = new Phone;
        $phone->brand = $request->brand;
        
        $phone->save();

   
        return redirect()->route('phones.index')->with('success_message', 'A New Phone stored successfully!');
        
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $phone = Phone::findOrFail($id);
        $phones = Phone::all();
        return View('admin.phones.show', compact("phone", 'phones','model'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::findOrFail($id);
        $phone->delete();
        
        return redirect()->route('phones.index')->with('success_message', ' Detroyed successfully!');

    }
}
