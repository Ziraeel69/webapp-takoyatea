@extends('dashboard.index')
<main id="main" class="main">

 <div class="card">   
    <div class="card-header">Edit User</div>
    <div class="card-body">
        <form method="post" action="{{ route('user.update', $user -> id) }}"
            enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Header Name </label>
                <div class="col-sm-10">
                    <input type="text" value="{{$user -> name}}" name="name" class="form-control" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Email </label>
                <div class="col-sm-10">
                    <input type="text" value="{{$user -> email}}" name="sub_header" class="form-control" >
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $user -> id}}" >
                <input type="submit" class="btn btn-primary" value="Update" >
            </div>

        </form>
    </div>
 </div>

</main><!-- End #main -->