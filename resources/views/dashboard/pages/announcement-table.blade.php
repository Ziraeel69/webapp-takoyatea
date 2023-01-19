@extends('dashboard.index')
<main id="main" class="main">
<div class="card">
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
          @foreach ($data as $row)
            <tr>
              <td>{{ $row->header }}</td>
              <td>{{ $row->sub_header }}</td>
              <td>{{ $row->description }}</td>
              <td>{{ $row->image }}</td>
              <td>{{ $row->user_id }}</td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
      <!-- End Default Table Example -->
    </div>
  </div>
</main><!-- End #main -->