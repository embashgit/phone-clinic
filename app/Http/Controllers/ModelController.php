<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model;
use App\Models\Phone;
class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        $models = Model::orderBy('id', 'name')->paginate(5);
        return View('admin.models.index', compact('models','phones'));
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
        $formInput = $request->except('image');
         $this->validate($request, array(
        'name'=>'required|max:10',
        'number'=>'required|min:4',
        'category'=>'required',
        'os'=>'required',
        'image'=>'image|mimes:png,jpg,jpeg|max:10000',
        'phone_id' => 'required'
         ));
        $image = $request->image;

        if($image){
            $imageName = date("Y-m-d"). '-' .$image->getClientOriginalName();
            $image->move(public_path('/uploads/images'), $imageName );
            $formInput['image'] = $imageName;
        }
        Model::create($formInput);
        return redirect()->route('models.index')->with('success_message', 'A New Phone model stored successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phones = Phone::all();
        $model = Model::findOrFail($id);

        return view('admin.models.show', compact('model','phones'));
    }

    public function phone_model($id)
    {
         $mainPhone = Phone::findOrFail($id);
        $phones =Phone::all();
        $phone_type = Model::all()->where('phone_id', $id);

        return view('front.phone_type', compact('phone_type', 'mainPhone', 'phones'));
        
       
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
$model = Model::findOrFail($id);
         $model->delete();

         return redirect()->route('models.index')->with('success_message', 'A model has been successfully deleted!');
    }
    
}
