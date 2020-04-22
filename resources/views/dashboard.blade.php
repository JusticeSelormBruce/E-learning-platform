@extends('layouts.Admin')
@section('render')
    <style>

        .size {
            width: 100px;
            height: 100px;
            border-radius: 100px;
        }

        @media only screen and (min-width: 768px) {
            .card {
                height: 30vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card {
                height: auto !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card {
                height: 30vh !important;
            }
        }
    </style>

    @if(Auth::user()->role_id ==3)
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">Total Number of Students</div>
                        <div class="d-flex py-3 px-5">
                            <img src="{{asset('icons/users.png')}}" alt="Users Avatar" class="size">
                            <span class="mx-5"></span>
                            <h1 class="pt-4">{{$students_population}}</h1>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">Total Number of Administrators</div>
                        <div class="d-flex py-3 px-5">
                            <img src="{{asset('icons/admin.png')}}" alt="Users Avatar" class="size">
                            <span class="mx-5"></span>
                            <h1 class="pt-4">{{$admins_population}}</h1>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">Total Number of Active Classrooms</div>
                        <div class="d-flex py-3 px-5">
                            <img src="{{asset('icons/clssroom.png')}}" alt="classroom Avatar" class="size">
                            <span class="mx-5"></span>
                            <h1 class="pt-4">{{$classrooms}}</h1>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row mx-lg-2">
                <div class="card w-100" style="height: 90vh!important;">
                    <div class="card-header"> All Courses Details</div>

                    <div class="card-body">

                        @include('courses_details')
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-lg-2">
            <div class="card w-100" style="height: 90vh!important;">
                <div class="card-header"> All Students Details</div>

                <div class="card-body">
                    <table id="table_id" class="table-bordered table-striped">
                        <thead>
                        <tr>

                            <th>Name</th>
                            <th>Classroom</th>
                            <th>Level</th>
                            <th>Avatar</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>
                                    @foreach($categories as $category)
                                        @if($category->id ==$student->category_id)
                                            {{$category->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($forms as $form)
                                        @if($form->id ==$student->level_id)
                                            {{$form->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td><img src="{{asset('storage/'.$student->avatar)}}" alt="User Avatar"></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="row mx-lg-2">
            <div class="card w-100" style="height: 90vh!important;">
                <div class="card-header"> All Administrators Details</div>
                <div class="card-body">
                    @include('admin_details')
                </div>

            </div>

        </div>
        </div>
    @else
        @include('admin_dashboard')
    @endif
@endsection
