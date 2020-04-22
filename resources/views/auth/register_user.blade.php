<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register Student') }}</div>

                <div class="card-body">
                    <form method="POST" action="/register-user">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
                            <label for=""
                                   class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input type="text"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Classroom') }}</label>
                            @if(Auth::user()->role_id ==3)
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
                            @else
                                <div class="col-md-6">
                                    <select id="category_id" type="text"
                                            class="form-control @error('category_id') is-invalid @enderror"
                                            name="category_id" value="{{ old('category_id') }}">
                                    @foreach($categories as $category)
                                        @if($category->id == Auth::user()->category_id)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Form/Year') }}</label>

                            <div class="col-md-6">
                                <select id="category_id" type="text"
                                        class="form-control @error('level_id') is-invalid @enderror"
                                        name="level_id" value="{{ old('level_id') }}">
                                    <option value="">Select Form/Year</option>
                                    @foreach($forms as $form)
                                        <option value="{{$form->id}}">{{$form->name}}</option>
                                    @endforeach
                                </select>


                                @error('level_id')
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

                                    <option value="{{$roles[0]->id}}">{{$roles[0]->name}}</option>

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
                                       class="form-control @error('password') is-invalid @enderror" name="password"
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register User') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
