@extends('website.main.master')

@section('title','Add student')

@section('body')




<div class="mb-4 mt-3 ml-3 ">
<a href="{{route('student.index')}}" class="btn btn-outline-warning btn-lg mb-2 ">Back to Students list</a>
    </div>




    <div class="container col-lg-8 text-bold" >
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

        <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">

                  @csrf

            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="name" value="{{old('name')}}" class="form-control"  >
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" value="{{old('email')}} " class="form-control" >
              </div>

              <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" value="{{old('address')}} " class="form-control" >
              </div>

              <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
              </div>

                <input type="submit" value="Submit" class="btn btn-lg btn-success">

        </form>
    </div>



@endsection
