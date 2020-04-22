<table id="table_id11" class="table-bordered table-striped">
    <thead>
    <tr>

        <th>Title</th>
        <th>Name</th>
        <th>Level</th>
        <th> Short Description</th>

    </tr>
    </thead>
    <tbody>
    @foreach($courses as $student)
        <tr>
            <td>{{$student->title}}</td>
            <td>{{$student->name}}</td>
            <td>
                @foreach($forms as $form)
                    @if($form->id ==$student->form_id)
                        {{$form->name}}
                    @endif
                @endforeach
            </td>
            <td>
                {{$student->description}}
            </td>

        </tr>
    @endforeach
    </tbody>
</table>

