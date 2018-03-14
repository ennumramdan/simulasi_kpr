<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->id == 1){
            $users = User::orderBy('id')->get();
        } else {
            $users = User::where('id', $user->id)->orderBy('id')->get();
        }

        return view('home', [
            'user' => Auth::user(),
            'users' => $users
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $user = User::find($id);
        return view('edit', [
            'user' => $user
            ]);
    }

    /**
   * Update the specified resource in storage.
   *
   * @param  Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
    public function update(Request $request, int $id)
    {
        $data = $request->all();
        if($request->hasFile('npwp')) {
          $file = $request->file('npwp');
          $filename = time(). '.' . $file->getClientOriginalExtension();
          $file->move(public_path('/images'), $filename);
          
          $data['npwp'] = '/images' . '/' . $filename;
        }
        if($data['password'] == '') {
            unset($data['password']);
        }

        User::find($id)->update($data);
        
        // redirect
        return redirect()->route('home')
        ->with('message', 'Profile Updated');
    }

    /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('home')
        ->with('message', 'Users Deleted');
    }
    
}