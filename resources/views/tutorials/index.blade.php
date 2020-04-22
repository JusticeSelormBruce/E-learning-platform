@extends('layouts.Admin')
@section('render')

    <style>
        @media only screen and (max-width: 768px) {

            a {
                font-size: 8pt !important;

            }

            button {
                font-size: 8pt !important;
                width: 100% !important;
            }
        }

        a {
            text-decoration: none !important;
            color: red;
        }
    </style>
    <div class="container-fluid">
        @if(!$tutorials  ==null)

            <div class="row">
                <div class="ml-auto">
                    <section>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Upload Tutorial
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload New Tutorial</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @include('tutorials.upload')
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div>
                <h6>List of Tutorials</h6>
            </div>


            <section>
                <a class="btn btn-secondary btn-sm form-control" data-toggle="collapse" href="#collapseExample0"
                   role="button"
                   aria-expanded="false" aria-controls="collapseExample0">
                    All Uploaded Tutorials for Form 1 (One)
                </a>


                <div class="collapse" id="collapseExample0">
                    <div class="card card-body">
                        @foreach($tutorials1 as $category)



                            <section class="w-100 form-group">

                                <div>
                                    <a class="btn btn-secondary btn-sm form-control" data-toggle="collapse"
                                       href="#collapseExample00{{$category->id}}"
                                       role="button"
                                       aria-expanded="false" aria-controls="collapseExample00{{$category->id}}">
                                        {{$category->name}} <span class="mx-2"></span>{{$category->description}}<span
                                                class="mx-2"></span>{{$category->created_at}}<span class="mx-2"></span>

                                        @foreach($categories as $list)

                                            @if($list->id == $category->category_id)
                                                <div class="row">
                                                    <div class="mx-auto">
                                                        <strong>{{$list->name}}</strong>
                                                    </div>
                                                </div>

                                            @endif

                                        @endforeach


                                    </a>
                                    <div class="row">
                                        <div class="mr-auto"> @include('tutorials.delete_tutorial')</div>
                                        <div class="ml-auto input-group-sm">
                                            <form action="/post" method="post">
                                                <input type="hidden" name="tutorial_id" value="{{$category->id}}">
                                                <label for="tutorial_id">Make Tutorial Free</label>
                                                <span class="mx-3"></span>
                                                <select name="state" id="" class="form-control"
                                                        onchange="this.form.submit()">
                                                    <option value="2">No</option>
                                                    <option value="1">Yes</option>

                                                </select>

                                                @csrf
                                            </form>
                                        </div>
                                    </div>

                                </div>


                                <div class="collapse" id="collapseExample00{{$category->id}}">
                                    <div class="card card-body">
                                        <video class="w-100" height="340" controls>
                                            <source src="{{asset('storage/'.$category->tutorial)}}">

                                        </video>
                                    </div>

                                    @include('comment.add_comment')

                                    <div>
                                        <div class="form-group">
                                            <div class="bg-info">
                                                <div class="container">
                                                    @foreach($comment_for_tutorials_for_form1 as $comments)
                                                        @foreach( $AllUsers as $users)
                                                            @if($users->id == $comments->user_id)
                                                                <div class="row">
                                                                    ({{$users->name}})
                                                                    @if($users->id == Auth::user()->id)

                                                                        <li class="nav-item dropdown"
                                                                            style="list-style: none!important;">
                                                                            <a id="navbarDropdown"
                                                                               class="nav-link dropdown-toggle" href="#"
                                                                               role="button"
                                                                               data-toggle="dropdown"
                                                                               aria-haspopup="true"
                                                                               aria-expanded="false" v-pre>
                                                                                Action
                                                                            </a>

                                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                                 aria-labelledby="navbarDropdown">

                                                                                <div class="row">
                                                                                    <a href="{{route('Admins..edit.comment',['id'=>$comments->id])}}"
                                                                                       class="mx-auto text-success">
                                                                                        Edit
                                                                                    </a>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <a href="{{route('delete.comment',['id'=>$comments->id])}}"
                                                                                       class="mx-auto text-danger">Delete</a>
                                                                                </div>

                                                                            </div>
                                                                        </li>

                                                                    @endif
                                                                </div>
                                                                <div class="row">
                                                                    <p class="ml-5">{{$comments->comment}}</p>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>


                        @endforeach
                    </div>

                </div>
            </section>


            <section>
                <a class="btn btn-secondary btn-sm form-control " data-toggle="collapse" href="#collapseExample000"
                   role="button"
                   aria-expanded="false" aria-controls="collapseExample000">
                    All Uploaded Tutorials for Form 2 (Two)
                </a>


                <div class="collapse" id="collapseExample000">
                    <div class="card card-body">
                        @foreach($tutorials2 as $category)



                            <section class="w-100 form-group">
                                <a class="btn btn-secondary btn-sm form-control" data-toggle="collapse"
                                   href="#collapseExample000{{$category->id}}"
                                   role="button"
                                   aria-expanded="false" aria-controls="collapseExample000{{$category->id}}">
                                    {{$category->name}} <span class="mx-2"></span>{{$category->description}}<span
                                            class="mx-2"></span>{{$category->created_at}}<span class="mx-2">
                                        @foreach($categories as $list)

                                            @if($list->id == $category->category_id)
                                                <div class="row">
                                            <div class="mx-auto">
                                                <strong>{{$list->name}}</strong>
                                            </div>
                                        </div>
                                            @endif
                                        @endforeach

                                            </span>
                                </a>
                                <div class="row">
                                    <div class="mr-auto">    @include('tutorials.delete_tutorial2')</div>
                                    <div class="ml-auto input-group-sm">
                                        <form action="/post" method="post">
                                            <input type="hidden" name="tutorial_id" value="{{$category->id}}"
                                                   onchange="this.form.submit()">
                                            <label for="tutorial_id">Make Tutorial Free</label>
                                            <span class="mx-3"></span>
                                            <select name="state" id="" class="form-control">
                                                <option value="2">No</option>
                                                <option value="1">Yes</option>

                                            </select>

                                            @csrf
                                        </form>
                                    </div>
                                </div>

                                <div class="collapse" id="collapseExample000{{$category->id}}">
                                    <div class="card card-body">
                                        <video class="w-100" height="340" controls>
                                            <source src="{{asset('storage/'.$category->tutorial)}}">

                                        </video>
                                    </div>
                                    @include('comment.add_comment')
                                    <div>
                                        <div class="form-group">
                                            <div class="bg-info">
                                                <div class="container">
                                                    @foreach($comment_for_tutorials_for_form2 as $comments)
                                                        @foreach( $AllUsers as $users)
                                                            @if($users->id == $comments->user_id)
                                                                <div class="row">
                                                                    <span>({{$users->name}})</span>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="ml-5">{{$comments->comment}}</p>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </section>


                        @endforeach
                    </div>

                </div>
            </section>


            <section>
                <a class="btn btn-secondary btn-sm form-control " data-toggle="collapse" href="#collapseExample0000"
                   role="button"
                   aria-expanded="false" aria-controls="collapseExample0000">
                    All Uploaded Tutorials for Form 3(Three)
                </a>


                <div class="collapse" id="collapseExample0000">
                    <div class="card card-body">
                        @foreach($tutorials3 as $category)



                            <section class="w-100 form-group">
                                <a class="btn btn-secondary btn-sm form-control" data-toggle="collapse"
                                   href="#collapseExample0000{{$category->id}}"
                                   role="button"
                                   aria-expanded="false" aria-controls="collapseExample0000{{$category->id}}">
                                    {{$category->name}} <span class="mx-2"></span>{{$category->description}}<span
                                            class="mx-2"></span>{{$category->created_at}}<span class="mx-2">
                                        @foreach($categories as $list)

                                            @if($list->id == $category->category_id)
                                                <div class="row">
                                            <div class="mx-auto">
                                                <strong>{{$list->name}}</strong>
                                            </div>
                                        </div>
                                            @endif
                                        @endforeach

                                            </span>
                                </a>
                                <div class="row">
                                    <div class="mr-auto">  @include('tutorials.delete_tutorial3')</div>
                                    <div class="ml-auto input-group-sm">
                                        <form action="/post" method="post">
                                            <input type="hidden" name="tutorial_id" value="{{$category->id}}">
                                            <label for="tutorial_id">Make Tutorial Free</label>
                                            <span class="mx-3"></span>
                                            <select name="state" id="" class="form-control"
                                                    onchange="this.form.submit()">
                                                <option value="2">No</option>
                                                <option value="1">Yes</option>

                                            </select>
                                            @csrf

                                        </form>
                                    </div>
                                </div>

                                <div class="collapse" id="collapseExample0000{{$category->id}}">
                                    <div class="card card-body">
                                        <video class="w-100" height="340" controls>
                                            <source src="{{asset('storage/'.$category->tutorial)}}">

                                        </video>
                                    </div>
                                    @include('comment.add_comment')
                                    <div>
                                        <div class="form-group">
                                            <div class="bg-info">
                                                <div class="container">
                                                    @foreach($comment_for_tutorials_for_form3 as $comments)
                                                        @foreach( $AllUsers as $users)
                                                            @if($users->id == $comments->user_id)
                                                                <div class="row">
                                                                    <span>({{$users->name}})</span>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="ml-5">{{$comments->comment}}</p>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </section>


                        @endforeach
                    </div>

                </div>
            </section>

    </div>
    @else
        <div class="row">
            <h6>Sorry, You Have Not Uploaded Any Tutorial Yet, You can Click on the <strong>Upload Tutorial </strong>
                Button to upload Now</h6>
        </div>
        <section>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                Upload Tutorial
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload New Tutorial</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        </div>

                    </div>
                </div>
            </div>
        </section>
        @endif

        </div>


@endsection
