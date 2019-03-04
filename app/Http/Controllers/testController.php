<?php

namespace App\Http\Controllers;

use Session;
use App\Test;
use Illuminate\Http\Request;

class testController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();
        return view('tests.index', compact('tests', $tests));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required',
            'bg' => 'required',
            'dexcom' => 'required',
            'bg_photo' => 'required|image',
            'dexcom_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ]);
        $bg_photo = $request->bg_photo;
        $bg_photo_new_name = time().$bg_photo->getClientOriginalName();
        $bg_photo->move('bgreadings/', $bg_photo_new_name);

        $dexcom_photo = $request->dexcom_photo;
        $dexcom_photo_new_name = time().$dexcom_photo->getClientOriginalName();
        $dexcom_photo->move('dexcomreadings/', $dexcom_photo_new_name);
        
        $tests = Test::create([
            'date' => $request->date,
            'time' => $request->time,
            'bg' => $request->bg,
            'dexcom' => $request->dexcom,
            'bg_photo' => 'bgreadings/' . $bg_photo_new_name,
            'dexcom_photo' => 'dexcomreadings/' . $dexcom_photo_new_name,  
        ]);
        Session::flash('success', 'Post created successfully.');
        return redirect('/tests');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $tests = Test::findOrFail($id);
        $tests->delete();
        Session::flash('deleted', 'Your entry has been deleted');
        return redirect('/tests');
    }
}
