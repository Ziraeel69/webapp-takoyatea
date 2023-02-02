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
    <div class="card-header">Add User</div>
    <div class="card-body">
        <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
            
            @csrf
            <div class="mb-3">
                <label class="col-sm-2 col-label-form"> Full Name </label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />

        </form>
    </div>
 </div>
<script>
</script>

</main><!-- End #main -->