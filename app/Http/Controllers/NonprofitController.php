<?php

namespace App\Http\Controllers;

use App\Nonprofit;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

class NonprofitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nonprofits = Nonprofit::all();

        return view('nonprofits.index')->with('nonprofits', $nonprofits)->withTitle('Nonprofits');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nonprofits.create')->withTitle('Create Nonprofit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'mission' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('nonprofit')->withInput()->withErrors($validator);
        }

        $nonprofit = new Nonprofit;
        $nonprofit->name = $request->name;
        $nonprofit->mission = $request->mission;
        $nonprofit->webSite = $request->webSite;
        $nonprofit->save();

        $id = $nonprofit->id;

        return redirect('donation/create');
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
