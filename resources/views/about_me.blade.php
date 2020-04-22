@extends('layouts.Admin')
@section('render')

    <div class="container">
        @if(!$me ==null)
            <form action="/update-about-me" method="post">
                @method('PATCH')
                <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
                <div class="form-group">
                    <div>
                        <label for="description">About You Description</label>

                        <textarea name="about"  class="form-control" required>{{$me->about}}</textarea>
                        <div>{{$errors->first('about')}}</div>
                    </div>

                    <script>
                        CKEDITOR.replace('description', {
                            removePlugins: 'image'
                        });

                    </script>
                </div>
                <div class="row">
                    <div class="mx-auto -25">
                        <button class="btn btn-success btn-sm" type="submit">Update Details</button>
                    </div>
                </div>
                @csrf
            </form>
            @else
            <form action="/about-me" method="post">
                <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
                <div class="form-group">
                    <div>
                        <label for="description">About You Description</label>

                        <textarea name="about"  class="form-control" required></textarea>
                        <div>{{$errors->first('about')}}</div>
                    </div>

                    <script>
                        CKEDITOR.replace('description', {
                            removePlugins: 'image'
                        });

                    </script>
                </div>
                <div class="row">
                    <div class="mx-auto -25">
                        <button class="btn btn-success btn-sm" type="submit">Save</button>
                    </div>
                </div>
                @csrf
            </form>
            @endif


    </div>


@endsection
