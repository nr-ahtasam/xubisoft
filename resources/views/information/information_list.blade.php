@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-11">

      <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PROJECT NAME</th>
      <th scope="col">GIHUB</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @forelse($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->name}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->project_name}}</td>
      <td>{{$list->github}}</td>
      <td>
        <a href="#"class="btn btn-primary">EDIT</a>
        <a href="#"class="btn btn-danger">DELETE</a>
      </td>
    </tr>


    @empty
    <h1>No data </h1>

    @endforelse




  </tbody>
</table>




<!-- Paginate start -->
{{$lists->links()}}
<!-- Paginate end -->





    </div>

  </div>

</div>

@endsection
