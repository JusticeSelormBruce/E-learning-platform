
<form action="/others" method="post" class="pb-5">
    <select name="user_id" id="" class="form-control" required>
        <option value="">select student to add to classroom</option>
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}} <span class="mx-2">({{$user->email}})</span></option>
        @endforeach
    </select>
    <div class="form-group">
        <input type="hidden" name="category_id" value="{{Auth::user()->category_id}}" class="form-control">
    </div>
    <select name="form_id" id="" class="form-control" required>
        <option value="">select student Form/level</option>
        @foreach($forms as $form)
            <option value="{{$form->id}}">{{$form->name}}</option>
        @endforeach
    </select>
    <div class="row">
        <div class="mx-auto">
            <button class="btn btn-success btn-sm" type="submit">Add Student to classroom</button>
        </div>
    </div>
    @csrf
</form>
