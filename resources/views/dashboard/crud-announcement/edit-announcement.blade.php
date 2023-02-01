@extends('dashboard.index')
<main id="main" class="main">

 <div class="card">   
    <div class="card-header">Edit Announcement</div>
    <div class="card-body">
        <form method="post" action="{{ route('announcements.update', $announcement -> id) }}"
            enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Header Name </label>
                <div class="col-sm-10">
                    <input type="text" value="{{$announcement -> header}}" name="header" class="form-control" value="{{
                        $announcement->Header }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Sub_Header Name </label>
                <div class="col-sm-10">
                    <input type="text" value="{{$announcement -> sub_header}}" name="sub_header" class="form-control" value="{{
                        $announcement->Sub_Header }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Description </label>
                <div class="col-sm-10">
                    <input type="text" value="{{$announcement -> description}}" name="description" class="form-control" value="{{
                        $announcement->Description }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Image </label>
                <div class="col-sm-10">
                    <input type="file" value="{{$announcement -> image}}" name="image" class="form-control" value="{{
                        $announcement->Image }}" />
                        <img src = "{{ asset('images/' . $announcement -> image) }}" width ="100" 
                        class = "img-thumbnail" />
                        <input type="hidden" name="hidden_image" values = "{{$announcement -> image}}"
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> User ID </label>
                <div class="col-sm-10">
                    <input type="text" value="{{$announcement -> user_id}}" name="user_id" class="form-control" value="{{
                        $announcement->User_id }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $announcement -> id}}" />
                <input type="submit" class="btn btn-primary" value="Update" />
            </div>

        </form>
    </div>
 </div>

</main><!-- End #main -->