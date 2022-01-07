@extends('website.main.master')

@section('title','edit')

@section('body')




<div class="mb-4 mt-3 ml-3 ">
    <a href="{{route('student.index')}}" class="btn btn-outline-warning btn-lg mb-2 ">Back to Students list</a>
        </div>



<div class="container">

    {{-- Error message --}}

        @if($errors->any())
          <div class="alert alert-danger">

            <ul>
              @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
              @endforeach
            </ul>

          </div>
        @endif

    {{-- end error message --}}


    <div class="row text-bold">
      <div class="col-lg-6">
        <form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data">

          @csrf
          @method('put')

    <div class="form-group">
      <label for="">Username</label>
      <input type="text" name="name" value="{{$student->name}}" class="form-control" placeholder="Enter your name" >
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" value="{{$student->email}} " class="form-control" placeholder="Enter your email" >
      </div>

      <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="address" value="{{$student->address}}" class="form-control" placeholder="Enter your address" >

      </div>

      <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control" >

      </div>

      <div class="form-group">

        <input type="hidden" name="my_image" value="{{$student->image}}" >

      </div>

      <input type="submit" value="Submit" class="btn btn-lg btn-success">


</form>

      </div>

      <div class="col-lg-6">
        <div class="d-flex justify-content-center">
          <div>
            <h2 class="text-center text-warning">Profile Picture</h2>
            <img src="{{ url('upload/', $student->image) }}" alt="" id="editing" class="rounded-circle">
          </div>
        </div>

      </div>

    </div>


</div>


@endsection

