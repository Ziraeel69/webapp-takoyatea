@extends('dashboard.index')
<main id="main" class="main">

 <div class="card">   
    <div class="card-header">Edit User</div>
    <div class="card-body">
        <form method="post" action="{{ route('user.update', $user -> id) }}">
            
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$user -> name}}" name="name" class="form-control" >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Email </label>
                <div class="col-sm-10">
                    <input type="email" value="{{$user -> email}}" name="email" class="form-control" >
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Update" >
            </div>

        </form>
    </div>
 </div>

</main><!-- End #main -->