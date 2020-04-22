@extends('layouts.Admin')
@section('render')
    <div class="container">
        <div class="form-group">
            <form action="/edit-comment-Admins-index" method="post">
                @method('PATCH')
                <div class="strong">Edit Comment</div>
                <div class="row">
                    <input type="hidden" value="{{$comment->id}}" name="id">
                </div>
                <div class="row">
                    <textarea name="comment" id="" cols="30" rows="10" class="form-control">{{$comment->comment}}</textarea>
                </div>
                <div class="row">
                    <div class="ml-auto">
                        <button class="btn btn-sm btn-primary" type="submit"> UpdateComment</button>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>

@endsection
