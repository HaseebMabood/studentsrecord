@extends('website.main.master')

@section('title','Student List')

@section('body')

<div class="container">

    <div class="row mt-3 mb-3">

        {{-- <div class="col-lg-6">
            <button class=" btn btn-primary  btn-lg">Students List</button>
        </div> --}}

        <div class="col-lg-6">
            <a href="{{route('student.create')}}" class="btn btn-outline-warning btn-lg  ">Add New Students</a>
        </div>


    </div>


                    {{-- show success message--}}

                    @if(session()->has('success'))
                         <div class="alert alert-success" >
                            {{session()->get('success')}}
                         </div>
                    @endif

                    {{-- end message --}}


                     {{-- show error message--}}

                     @if(session()->has('error'))
                     <div class="alert alert-danger" >
                        {{session()->get('error')}}
                     </div>
                @endif

                {{-- end message --}}

            {{-- Table start --}}

                <table class="table table-bordered bg-dark text-white">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th style="width: 135px">Profile picture</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($std as $st )
                        <tr class="text-center">
                            <td>{{$st->id}}</td>
                            <td>
                                <img src="{{ url('upload/', $st->image) }}" alt="" id="indeximg" class="rounded-circle">
                            </td>
                            <td style="width: 170px">{{$st->name}}</td>
                            <td>{{$st->email}}</td>
                            <td>{{$st->address}}</td>


                            <td><a href="{{ route('student.show',$st) }}" class="btn btn-primary">Show</a></td>


                            <td><a href="{{ route('student.edit',$st) }}" class="btn btn-success">Edit</a></td>

                            <td>
                            <form action="{{ route('student.destroy',$st->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            {{-- table end --}}
            <div class=" d-flex justify-content-center align-items-center ">
                <div>{{$std->links("pagination::bootstrap-4")}}</div>
            </div>

</div>

@endsection
