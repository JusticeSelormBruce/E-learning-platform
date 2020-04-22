@extends('layouts.Admin')
@section('render')
    <style>

        @media only screen and (min-width: 768px) {
            .card {
                height: 50vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card {
                height: auto !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card {
                height:50vh !important;
            }
        }
    </style>
    <div class="container-fluid">
        @if(Auth::user()->role_id ==3)

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <form action="/super-admin/settings/add-category" method="post">
                    <div class="card">
                        <div class="card-header">
                            Add Classroom
                        </div>
                        <div class="card-body">
                            <div class="form-group input-group-sm">
                                <input type="text" class="form-control" name="name" required placeholder="Classroom Name">
                                <div  class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            </div>
                            <div class="form-group input-group-sm">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required
                                      placeholder="Classroom Description"></textarea>
                                <div  class="text-danger">
                                    {{ $errors->first('description')}}
                                </div>
                            </div>
                            <div class="form-group input-group-sm row">
                                <button class="btn btn-secondary btn-sm  mx-auto" type="submit">Save Classroom Details
                                </button>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form action="/super-admin/settings/add-course" method="post">
                    <div class="card">
                        <div class="card-header">
                            Add Course
                        </div>
                        <div class="card-body">
                            <div class="form-group input-group-sm">
                                <input type="text" class="form-control" name="title" required
                                       placeholder="Course Title">
                            </div>
                            <div class="form-group input-group-sm">
                                <input type="text" class="form-control" name="name" required placeholder="Course Name">
                            </div>
                            <div class="form-group input-group-sm">
                                <select name="category_id" id="" class="form-control" required>
                                    @foreach($categories as $form)
                                        @if($form->id == Auth::user()->category_id)
                                        <option value="{{$form->id}}">{{$form->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group input-group-sm">
                                <select name="form_id" id="" class="form-control" required>
                                    <option value=""> Select Associated Form</option>
                                    @foreach($forms as $form)
                                        <option value="{{$form->id}}">{{$form->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group input-group-sm">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required
                                      placeholder="Course Description"></textarea>
                            </div>
                            <div class="form-group input-group-sm row">
                                <button class="btn btn-secondary btn-sm  mx-auto" type="submit">Save Course Details
                                </button>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form action="/super-admin/settings/add-topic" method="post">
                    <div class="card">
                        <div class="card-header">
                            Add Topic
                        </div>
                        <div class="card-body">
                            <div class="form-group input-group-sm">
                                <input type="text" class="form-control" name="topic" required placeholder="Topic">
                            </div>
                            <div class="form-group input-group-sm">
                                <select name="course_id" id="" class="form-control" required>
                                    <option value=""> Select Associated Course</option>
                                    @foreach($courses as $form)
                                        <option value="{{$form->id}}">{{$form->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group input-group-sm">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required
                                      placeholder="Topic Description"></textarea>
                            </div>
                            <div class="form-group input-group-sm row">
                                <button class="btn btn-secondary btn-sm  mx-auto" type="submit">Save Topic Details
                                </button>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
