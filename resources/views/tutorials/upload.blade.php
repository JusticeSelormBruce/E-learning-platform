<form action="/super-admin/tutorials/upload" method="post" enctype="multipart/form-data">
    <div class="card w-100">
        <div class="card-header">
            Upload Tutorial
        </div>
        <div class="card-body">

            <div class="form-group input-group-sm">
                <input type="text" class="form-control" name="name" required placeholder="Tutorial Name">
                <div class="text-danger">
                 {{  $errors->first('name')}}
                </div>
            </div>
            <div class="form-group input-group-sm">
                <select name="category_id" id="" class="form-control" required>

                    @foreach($categories as $form)
                        @if($form->id ==Auth::user()->category_id)
                        <option value="{{$form->id}}">{{$form->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group input-group-sm">
                <select name="course_id" id="" class="form-control" required>
                    <option value=""> Select  Course</option>
                    @foreach($courses as $form)
                        <option value="{{$form->id}}">{{$form->name}}</option>
                    @endforeach
                </select>
                <div  class="text-danger">
                    {{$errors->first('course_id')}}
                </div>
            </div>
            <div class="form-group input-group-sm">
                <select name="form_id" id="" class="form-control" required>
                    <option value=""> Select Associated Form</option>
                    @foreach($forms as $form)
                        <option value="{{$form->id}}">{{$form->name}}</option>
                    @endforeach
                </select>
                <div  class="text-danger">
                    {{ $errors->first('form_id')}}
                </div>
            </div>
            <div class="form-group input-group-sm">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required
                                      placeholder="Tutorial Description"></textarea>
                <div  class="text-danger">
                   {{ $errors->first('description')}}
                </div>
            </div>

            <div class="form-group input-group-sm">
                <label for="" class="h3   btn-sm btn"> <input type="file" required class="form-control" name="tutorial"> Upload
                    Tutorial</label>
                <div  class="text-danger">
                   {{ $errors->first('tutorial')}}
                </div>
            </div>
            <div class="form-group input-group-sm row">
                <button class="btn btn-secondary btn-sm  mx-auto" type="submit">Save Tutorial
                </button>
            </div>
        </div>
    </div>
    @csrf
</form>
