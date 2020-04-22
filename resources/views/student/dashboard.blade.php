@extends('layouts.student')
@section('render')
    <style>

        @media only screen and (min-width: 768px) {
            .card {
                height: 40vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card {
                height: auto !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card {
                height: 40vh !important;
            }
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Profile Details
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="/uploads/avatars/{{Auth::user()->avatar}}" alt="Profile Picture"
                                     style="width: 150px; height: 150px; border-radius: 100px;">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="">
                                    <div class="row pb-1" style="background-color: #33BEFF">
                                        <div class="mx-auto"><strong class="h5">Name</strong></div>
                                    </div>
                                    <div class="row" style="background-color: #D0D3D4 ">
                                        <div class="mx-auto">
                                            <span>{{Auth::user()->name}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="row pb-1" style="background-color: #33BEFF">
                                        <div class="mx-auto"><strong class="h5">Username</strong></div>
                                    </div>
                                    <div class="row" style="background-color: #D0D3D4 ">
                                        <div class="mx-auto">
                                            <span>{{Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row pb-1" style="background-color: #33BEFF">
                                        <div class="mx-auto"><strong class="h5">Classroom</strong></div>
                                    </div>
                                    @foreach($categories as $classroom)
                                        @if($classroom->id == Auth::user()->category_id)
                                            <div class="row" style="background-color: #D0D3D4 ">
                                                <div class="mx-auto">
                                                    <span>{{$classroom->name}}</span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div>
                                    <div class="row pb-1" style="background-color: #33BEFF">
                                        <div class="mx-auto"><strong class="h5">Form/Level</strong></div>
                                    </div>
                                    @foreach($forms as $form)
                                        @if($form->id == Auth::user()->level_id)
                                            <div class="row" style="background-color: #D0D3D4 ">
                                                <div class="mx-auto">
                                                    <span>{{$form->name}}</span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Classroom Details
                    </div>
                    <div class="card-body">

                        @foreach($categories as $classroom)
                            @if($classroom->id == Auth::user()->category_id)
                                <div class="row" style="background-color: #D0D3D4 ">
                                    <div class="mx-auto">
                                        <strong>Classroom Name:</strong>
                                        <span class="mx-2">{{$classroom->name}}</span>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <strong class="mx-auto">Classroom Details</strong>
                            </div>
                        @endforeach

                        @foreach($categories as $classroom)
                            @if($classroom->id == Auth::user()->category_id)
                                <div class="row" style="background-color: #D0D3D4 ">
                                    <div class="mx-auto">
                                        <span>{{$classroom->description}}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        About Classroom Tutor
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="/uploads/avatars/{{$myTutor->avatar}}" alt="Profile Picture"
                                     style="width: 150px; height: 150px; border-radius: 100px;">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="">
                                    <div class="row pb-1" style="background-color: #33BEFF">
                                        <div class="mx-auto"><strong class="h5">Name</strong></div>
                                    </div>
                                    <div class="row" style="background-color: #D0D3D4 ">
                                        <div class="mx-auto">
                                            <span>{{$myTutor->name}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="row pb-1" style="background-color: #33BEFF">
                                        <div class="mx-auto"><strong class="h5">Username</strong></div>
                                    </div>
                                    <div class="row" style="background-color: #D0D3D4 ">
                                        <div class="mx-auto">
                                            <span>{{$myTutor->email}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row pb-1" style="background-color: #33BEFF">
                                        <div class="mx-auto"><strong class="h5">Classroom</strong></div>
                                    </div>
                                    @foreach($categories as $classroom)
                                        @if($classroom->id == $myTutor->category_id)
                                            <div class="row" style="background-color: #D0D3D4 ">
                                                <div class="mx-auto">
                                                    <span>{{$classroom->name}}</span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div>
                                    <div class="row pb-1" style="background-color: #33BEFF">
                                        <div class="mx-auto"><strong class="h5">Form/Level</strong></div>
                                    </div>
                                    @foreach($forms as $form)
                                        @if($form->id == $myTutor->level_id)
                                            <div class="row" style="background-color: #D0D3D4 ">
                                                <div class="mx-auto">
                                                    <span>{{$form->name}}</span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">


                           @include('auth.passwords.reset')


            </div>
        </div>
    </div>
    </div>

@endsection
