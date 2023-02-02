<?php

namespace App\Http\Controllers;
use App\Http\controllers\controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function index()
    {
    
        // $announcement = Announcement::all();
        // return view('dashboard.pages.announcement-table', ['data' => $announcement ]);
    
        $data = user::latest() -> paginate(5);
        return view('dashboard.pages.user-table', compact('data')) -> with('i', (request()->input('page', 1) -1) *5);
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.crud-user.insert-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([

            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',

        ]);

        $user = new User;

        
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request->password);
       
        $user -> save();
        
        return redirect() -> route('user.index') -> with (
            'success', 'User Added successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.crud-user.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request -> validate([

            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $user->update($request->all());

        // $announcement -> header = $request -> header;
        // $announcement -> sub_header = $request -> sub_header;
        // $announcement -> description =  $request -> request;
        // $announcement -> image = $request -> image;
        // $announcement -> user_id = $request -> user_id;
        // $announcement -> save();

        return redirect() -> route('user.index') -> with('success', 'User Data 
        has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user -> delete();
            return redirect()->route('user.index')->with('success', 
            'User Data Deleted Successfully');

    }
}
