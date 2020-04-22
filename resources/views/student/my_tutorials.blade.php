@extends('layouts.student')
@section('render')
    <style>
        a {
            text-decoration: none !important;
        }
    </style>

    @foreach($others->groupBy('category_id') as $list)
        <div class="row">

            <div class="mx-auto py-y">
                @foreach($categories as $category)
                    @if($category->id == $list[0]->category_id)
                        <span class="h3">{{$category->name}}</span>
                    @endif
                @endforeach

            </div>
        </div>
        @if($my_tutorials ==null)
            <span class="h6">Sorry No tutorials available for this classroom yet</span>


        @else
            @foreach($alltutorial as $category)

                @if($list[0]->category_id ==$category->category_id )
                    <section class="w-100 form-group">
                        <a class="btn btn-secondary btn-sm form-control" data-toggle="collapse"
                           href="#collapseExample000{{$category->id}}"
                           role="button"
                           aria-expanded="false" aria-controls="collapseExample000{{$category->id}}">
                            {{$category->name}}<span
                                class="mx-2"></span>{{$category->created_at}}<span class="mx-2"></span>
                        </a>


                        <div class="collapse" id="collapseExample000{{$category->id}}">
                            <div class="card card-body">
                                <video class="w-100" height="340" controls>
                                    <source src="{{asset('storage/'.$category->tutorial)}}">

                                </video>
                            </div>
                            <div class="container-fluid">
                                @include('comment.add_comment')
                                <div>
                                    <div class="form-group">
                                        <div>
                                            <div class="container">
                                                @foreach($comment as $comments)
                                                    @foreach( $AllUsers as $users)
                                                        @if($users->id == $comments->user_id)
                                                            <div class="row">
                                                                ({{$users->name}}) @if($users->id == Auth::user()->id)

                                                                    <li class="nav-item dropdown"
                                                                        style="list-style: none!important;">
                                                                        <a id="navbarDropdown"
                                                                           class="nav-link dropdown-toggle" href="#"
                                                                           role="button"
                                                                           data-toggle="dropdown" aria-haspopup="true"
                                                                           aria-expanded="false" v-pre>
                                                                            Action
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-right"
                                                                             aria-labelledby="navbarDropdown">

                                                                            <div class="row">
                                                                                <a href="{{route('edit.comment',['id'=>$comments->id])}}"
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
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-lg-10 col-md-10 col-sm-12"><p
                                                                        class="ml-5">{{$comments->comment}}</p></div>

                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </section>
                @endif




            @endforeach

        @endif
    @endforeach

@endsection
