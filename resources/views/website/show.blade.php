@extends('website.main.master')

@section('title','Show')

@section('body')

<div class="jumbotron bg-secondary text-center text-white">

        <div class="col-lg-2 ">
            <a href="{{route('student.index')}}" class="btn btn-outline-warning btn-lg mb-2 ">Back to Students list</a>
        </div>



    <h1 class="">Student Profile</h1>
    <img src="{{ url('upload/', $student->image) }}" alt="" id="showimg" class="rounded-circle">
    <h2>My name is {{$student->name}}</h2>
    <h2>My email is {{$student->email}}</h2>
    <h2>I live in {{$student->address}}, Pakistan</h2>
</div>



@endsection
