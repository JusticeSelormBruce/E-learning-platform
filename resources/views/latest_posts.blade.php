@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="mx-auto">
                    <h3>Latest Post/Articles</h3>
                </div>
            </div>
        </div>
        @if($result == null)
            <div class="row">
                <div class="mx-auto">
                    <div class="lead">Sorry, No Post Yet</div>
                </div>
            </div>
            @else
            @foreach($result as $list)
                <div class="card">
                    <div class="row">
                        @foreach($AllUsers as $author)
                            @if($author->category_id ==  $list->category_id)
                                <img src="{{asset('uploads/avatars/'.$author->avatar)}}" alt="" class="img-thumbnail"
                                     width="60">
                                <span class="mx-3 lead pt-2"> Class Tutor ({{$author->name}})</span>
                                @foreach($categories as $class)
                                    @if($class->id == $author->category_id)
                                        <span class="mx-3 lead pt-2">   Classroom ({{$class->name}})</span>
                                        <span class="mx-3 lead pt-2">  <a href="{{asset('storage/'.$list->book)}}">{{$list->name}}</a>.</span>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>




                </div>
            @endforeach
        @endif


    </div>
@endsection