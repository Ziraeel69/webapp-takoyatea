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
            <div class="col col-md-6"><b>Announcement Data</b></div>
            <div class="col col-md-6">
                <a href="{{ route('announcements.create') }}" class="btn btn-success btn-sm float-start"> Add Announcement </a>
            </div>
        </div>
    </div>
    <div class="card-body">
      <h5 class="card-title"><b>Announcement Table</b></h5>

      <!-- Default Table -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Header</th>
            <th scope="col">Sub_header</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">User_id</th>
          </tr> 
        </thead>
        <tbody>
          
            @if(count($data) > 0)
                    @foreach ($data as $row)

                            <tr> 
                              <td>{{ $row->header }}</td>
                              <td>{{ $row->sub_header }}</td>
                              <td>{{ $row->description }}</td>
                              <td>{{ $row->image }}</td>
                              <td>{{ $row->user_id }}</td>
                                    <td>
                                        <form method="post" action= "{{ route('announcements.destroy',
                                        $row->id) }}">
                                          @csrf
                                          @method('DELETE')
                                          <a href="{{ route('announcements.edit', $row ->id) }}" 
                                            class="btn btn-warning btn-sm"> Edit </a>
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