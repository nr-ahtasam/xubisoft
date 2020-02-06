@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col_md_6 offset-md-4">
      <form action="{{route('information_create')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
          <label for="project">Project Name</label>
          <input type="text" class="form-control" id="project" aria-describedby="emailHelp"name="project_name">
        </div>

        <div class="form-group">
          <label for="git">Github Link</label>
          <input type="text" class="form-control" id="git"name="github">
        </div>
        <button type="submit" class="btn btn-primary offset-3">Submit</button>
      </form>
    </div>

  </div>
</div>







@endsection
