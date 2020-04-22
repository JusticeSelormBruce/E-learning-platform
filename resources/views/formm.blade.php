
<section class=" mx-lg-5">
    <form action="/talk-to-us"method="post">
        <div class="form-group input-group-sm text-muted lead">
            <div class="row">

                    <label for="">Name</label>

                <input type="text" class="form-control" required name="name">
            </div>
            <div class="row">

                    <label for="">Subject</label>

                <input type="text" class="form-control" required name="subject">
            </div>
            <div class="row">

                    <label for="">Body</label>

                <textarea name="body" id="" cols="30" rows="8" required class="form-control"></textarea>

            </div>
            <div class="row">
                <div class="mx-auto"><button class="btn btn-sm btn-success mt-3" type="submit">Send Message</button></div>
            </div>
        </div>
        @csrf
    </form>
</section>
