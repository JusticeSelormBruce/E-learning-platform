@component('mail::message')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{$data['name']}}</h1>
            <h3 class="lead">{{$data['subject']}}</h3>
            <p class="lead">{{$data['body']}}</p>
        </div>
    </div>
@endcomponent
