<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
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
        //always get user ID from authorized object
        $user = Auth::user();

        return view('users.index')->with('user', $user)->withTitle('Couple');
    }

    /**
     * Test to make sure routes works
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
            'twoLName' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255'
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
    public function show()
    {
        $user = Auth::user();

        return view('users.index')->with('user', $user)->withTitle('Couple');
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

        return view('users.edit')->with('user', $user)->withTitle('Edit Couple');
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
        $validator = Validator::make($request->all(), [
            'oneLName' => 'required|max:255',
            'twoLName' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('user')->withInput()->withErrors($validator);
        }

        $user = User::find($id);
        $user->hashtag = $request->hashtag;
        $user->oneFName = $request->oneFName;
        $user->oneLName = $request->oneLName;
        $user->twoFName = $request->twoFName;
        $user->twoLName = $request->twoLName;
        $user->date = $request->date;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('user/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //$user = User::find($id);
        $user->delete();

        //redirect
        Session::flash('message','Successfully deleted couple!');
        return Redirect::to('/');
    }
}
