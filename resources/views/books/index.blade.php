@extends('layouts.Admin')
@section('render')

    <style>
        @media only screen and (max-width: 768px) {

            a {
                font-size: 8pt!important;

            }
            button{
                font-size: 8pt!important;
                width: 100%!important;
            }
        }
        a{
            text-decoration: none!important;
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
                            Upload E-Book
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload New E-Book</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @include('books.upload')
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div>
                <h6>List of E-Books</h6>
            </div>


            <section>
                <a class="btn btn-secondary btn-sm form-control" data-toggle="collapse" href="#collapseExample0"
                   role="button"
                   aria-expanded="false" aria-controls="collapseExample0">
                    All Uploaded E-Books for Form 1 (One)
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

                                                    </span>
                                        </a>
                                        <div class="row">
                                            <div class="mr-auto">@include('books.delete_tutorial')</div>
                                            <div class="ml-auto input-group-sm">
                                                <form action="/post-ebook" method="post">
                                                    <input type="hidden" name="tutorial_id" value="{{$category->id}}">
                                                    <label for="tutorial_id">Make E-Book Free</label>
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
                                    <p><a href="{{asset('storage/'.$category->book)}}">   {{$category->name}} </a></p>
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
                    All Uploaded E-Books for Form 2 (Two)
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
                                    <div class="mr-auto"> @include('books.delete_tutorial2')</div>
                                    <div class="ml-auto input-group-sm">
                                        <form action="/post-ebook" method="post">
                                            <input type="hidden" name="tutorial_id" value="{{$category->id}}">
                                            <label for="tutorial_id">Make E-Book Free</label>
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
                                <div class="collapse" id="collapseExample000{{$category->id}}">
                                    <div class="card card-body">
                                        <p>Open  <a href="{{asset('storage/'.$category->book)}}">{{$category->name}}</a>.</p>

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
                    All Uploaded E-Books for Form 3(Three)
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
                                    <div class="mr-auto">@include('books.delete_tutorial3')</div>
                                    <div class="ml-auto input-group-sm">
                                        <form action="/post-ebook" method="post">
                                            <input type="hidden" name="tutorial_id" value="{{$category->id}}">
                                            <label for="tutorial_id">Make E-Book Free</label>
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
                                        <p>Open  <a href="{{asset('storage/'.$category->book)}}">{{$category->name}}</a>.</p>

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
            <h6>Sorry, You Have Not Uploaded Any E-Books Yet, You can Click on the <strong>Upload E-Books </strong>
                Button to upload Now</h6>
        </div>
        <section>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                Upload E-Books
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload New E-Book</h5>
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
