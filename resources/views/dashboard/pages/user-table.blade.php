@extends('dashboard.index')
<main id="main" class="main">

@if($message = Session::get('success'))

  <div class="alert alert-success">
      {{ $message }}
  </div>
@endif
  <div class="card">

    <div class="card-header"
        <div class ="row">
            <div class="col col-md-6"><b>User Data</b></div>
            <div class="col col-md-6">
                <a href="{{ route('user.create') }}" class="btn btn-success btn-sm float-start"> Add User </a>
            </div>
        </div>
    </div>
    <div class="card-body">
      <h5 class="card-title"><b>User Table</b></h5>

      <!-- Default Table -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">User_id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
          </tr> 
        </thead>
        <tbody>
            
            @if(count($data) > 0)
                    @foreach ($data as $row)

                            <tr> 
                              <td>{{ $row->user_id }}</td>
                              <td>{{ $row->name }}</td>
                              <td>{{ $row->email }}</td>
                                    <td>
                                        <form method="post" action= "{{ route('user.destroy',
                                        $row->id) }}">
                                          @csrf
                                          @method('DELETE')
                                          <a href="{{ route('user.edit', $row ->id) }}"  
                                            class="btn btn-warning btn-sm"> Update </a>
                                          <input type="submit" class ="btn btn-danger btn-sm"
                                                value = "DELETE" >
                                        </form> 
                                    </td>
                            </tr>  

                    @endforeach
            @else
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
              @endif
         
          
        </tbody>
      </table>
      {!! $data->links() !!}
      <!-- End Default Table Example -->
    </div>
  </div>
</main><!-- End #main -->