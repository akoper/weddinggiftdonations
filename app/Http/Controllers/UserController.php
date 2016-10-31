<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        die("Hit!!!!!!!!!!!!");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create')->withTitle('Couple Getting Married');
    }

    /**
     * Show the form for searching for a user/couple
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('users.search')->withTitle('Find a Wedding');
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
            'oneLName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('user')->withInput()->withErrors($validator);
        }

        $user = new User;
        $user->hashtag = $request->hashtag;
        $user->oneFName = $request->oneFName;
        $user->oneLName = $request->oneLName;
        $user->twoFName = $request->twoFName;
        $user->twoLName = $request->twoLName;
        $user->date = $request->date;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $id = $user->id;

        return redirect('user/' . $id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show')->with('user', $user)->withTitle('Couple');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return View::make('user.edit')->with('user', $user)->withTitle('Edit Couple');
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
        //set validation rules
        $rules = array(
            'name' => 'required|max:150',
            'start'	=>	'max:19',
            'end'	=>	'max:19|after:start',
            'metric_id'	=>	'integer|max:2000000000',
            'p'	=>	'max:2'
        );

        //validate
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::to('projects/' . $id . '/edit')->withErrors($validator)->withInput();
        } else {
            //add to database
            $project = Project::find($id);
            $project->name = Input::get('name');
            $project->start = Input::get('start');
            $project->end = Input::get('end');
            $project->metric_id = Input::get('metric_id');
            if(Input::get('p') == 'on') { $project->p = 1; } else { $project->p = 0; }
            $project->save();

            //redirect
            Session::flash('message','Successfully updated task!');
            return Redirect::to('projects');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        //redirect
        Session::flash('message','Successfully deleted couple!');
        return Redirect::to('/');
    }
}
