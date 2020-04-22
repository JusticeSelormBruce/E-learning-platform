<section>
    <!-- Button trigger modal -->
    <button type="button" class="btn text-danger" data-toggle="modal"
            data-target="#exampleModaldelete{{$category->id}}">
        Delete E-Book
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModaldelete{{$category->id}}" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabeld{{$category->id}}" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabeld{{$category->id}}"> Delete E-Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-2"><a href="{{route('tutorialb.delete',['id'=>$category->id])}}"
                                              class="btn btn-sm  text-danger ">Yes</a></div>
                        <div class="col-2">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">No</span>
                            </button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
