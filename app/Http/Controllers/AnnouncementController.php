<?php

namespace App\Http\Controllers;

use App\Http\controllers\controller;
use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        // $announcement = Announcement::all();
        // return view('dashboard.pages.announcement-table', ['data' => $announcement ]);
    
        $data = Announcement::latest() -> paginate(5);
        return view('dashboard.pages.announcement-table', compact('data')) -> with('i', (request()->input('page', 1) -1) *5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.crud-announcement.insert-announcement');
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

            'header' => 'required',
            'sub_header' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|',
            'user_id' => 'required'

        ]);

        $file_name = time() . '.' . request()-> image -> getClientOriginalExtension();
        request() -> image -> move(public_path('images'), $file_name);
        $announcement = new Announcement;

        $announcement -> header = $request -> header;
        $announcement -> sub_header = $request -> sub_header;
        $announcement -> description = $request -> description;
        $announcement -> image = $file_name;
        $announcement -> user_id = $request -> user_id;

        $announcement -> save();
        
        return redirect() -> route('announcements.index') -> with (
            'success', 'Announcement Added successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('dashboard.crud-announcement.edit-announcement', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnouncementRequest  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        $request -> validate([

            'header' => 'required',
            'sub_header' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpeg,gif,svg|max:2048|',
            'user_id' => 'required'

        ]);

        $image = $request -> hidden_image;

        if($request->image != '')
        {
            $image = time() . '.' . request()->image->getClientOriginalExtention();
            request() -> image -> move(public_path('images'), $image);
        }   
        $announcement = Announcement::find($request->hidden_id);

        $announcement -> header = $request -> header;
        $announcement -> sub_header = $request -> sub_header;
        $announcement -> description =  $request -> description;
        $announcement -> image = $image;
        $announcement -> user_id = $request -> user_id;
        $announcement -> save();

        return redirect() -> route('announcements.index') -> with('success', 'Announcement Data 
        has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement -> delete();
            return redirect()->route('announcements.index')->with('success', 
            'Announcement Data Deleted Successfully');

    }
}
