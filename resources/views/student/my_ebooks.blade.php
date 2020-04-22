@extends('layouts.student')
@section('render')

    @if($my_ebooks ==null)
        <span class="h6">Sorry No E-Books  available for this classroom yet</span>
    @else
        @foreach($my_ebooks as $category)



            <section class="w-100 form-group">
                <a class="btn btn-secondary btn-sm form-control" data-toggle="collapse"
                   href="#collapseExample0000{{$category->id}}"
                   role="button"
                   aria-expanded="false" aria-controls="collapseExample0000{{$category->id}}">
                    {{$category->name}}
                </a>

                <div class="collapse" id="collapseExample0000{{$category->id}}">
                    <div class="card card-body">
                        <p>Open <a href="{{asset('storage/'.$category->book)}}">{{$category->name}}</a>.</p>

                    </div>

                </div>
            </section>


        @endforeach

    @endif
@endsection
