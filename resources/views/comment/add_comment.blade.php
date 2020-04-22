<div class="form-group">
    <form action="/add-comment" method="post">
        <div class="strong">Add Comment</div>
        <div class="row">
            <input type="hidden" value="{{$category->id}}" name="tutorial_id">
        </div>
        <div class="row">
            <input type="hidden" value="{{Auth::user()->category_id}}" name="classroom_id">
        </div>
        <div class="row">
            <input type="hidden" value="{{$category->form_id}}" name="form_id">
        </div>
        <div class="row">
            <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="row">
        <div class="ml-auto">
            <button class="btn btn-sm btn-primary" type="submit"> Comment</button>
        </div>
        </div>
        @csrf
    </form>
</div>
