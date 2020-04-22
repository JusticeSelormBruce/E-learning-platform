@extends('layouts.Admin')

@section('render')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(Auth::user()->role_id ==3)
                    <div class="card">

                        <div class="card-header">{{ __('Register An Admin') }}</div>

                        <div class="row">
                            <div class="ml-auto mr-5">

                                <section>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn text-primary" data-toggle="modal"
                                            data-target="#exampleModaldeletere">
                                        Register Student
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModaldeletere" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabeldre" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabeldre"> Register
                                                        Student</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    @include('auth.register_user')
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/register-user">
                                @csrf

                                <div class="form-group row">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="hidden" name="level_id">
                                <div class="form-group row">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Classroom') }}</label>

                                    <div class="col-md-6">
                                        <select id="category_id" type="text"
                                                class="form-control @error('category_id') is-invalid @enderror"
                                                name="category_id" value="{{ old('category_id') }}">
                                            <option value="">Select Classroom</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>


                                        @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                    <div class="col-md-6">
                                        <select id="category_id" type="text"
                                                class="form-control @error('role_id') is-invalid @enderror"
                                                name="role_id" value="{{ old('role_id') }}">
                                            <option value="">Select Role</option>
                                            <option value="{{$roles[1]->id}}">{{$roles[1]->name}}</option>
                                            <option value="{{$roles[2]->id}}">{{$roles[2]->name}}</option>

                                        </select>


                                        @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0 pb-5">
                                    <div class="mx-auto">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Register  Admin') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @else
                    @include('auth.register_user')
                @endif
                <div class="card">
                    <div class="card-header">Add Existing  Student to Classroom</div>
                    <div class="card-body">
                        @include('others')
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
