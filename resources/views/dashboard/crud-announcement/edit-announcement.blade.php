@extends('dashboard.index')
<main id="main" class="main">

@if($errors -> any())

    <div class = "alert, alert-danger">
        <ul>
            @foreach ($errors -> all() as $error)

                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif


 <div class="card">   
    <div class="card-header">Edit Announcement</div>
    <div class="card-body">
        <form method="post" action="{{ route('announcements.update', $Announcement -> id) }}" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Header Name </label>
                <div class="col-sm-10">
                    <input type="text" name="header" class="form-control" value="{{
                        $Announcement->Header }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Sub_Header Name </label>
                <div class="col-sm-10">
                    <input type="text" name="sub_header" class="form-control" value="{{
                        $Announcement->Sub_Header }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Description </label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" value="{{
                        $Announcement->Description }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Image </label>
                <div class="col-sm-10">
                    <input type="text" name="image" class="form-control" value="{{
                        $Announcement->Image }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> User ID </label>
                <div class="col-sm-10">
                    <input type="text" name="user_id" class="form-control" value="{{
                        $Announcement->User_id }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />

        </form>
    </div>
 </div>

</main><!-- End #main -->