
            <table id="table_id1" class="table-bordered table-striped" >
                <thead>
                <tr>

                    <th>Name</th>
                    <th>Classroom</th>
                    <th>Email</th>
                    <th>Avatar</th>

                </tr>
                </thead>
                <tbody>
                @foreach($admins as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>
                            @foreach($categories as $category)
                                @if($category->id ==$student->category_id)
                                    {{$category->name}}
                                @endif
                            @endforeach
                        </td>
                        <td>
                          {{$student->email}}
                        </td>
                        <td><img src="{{asset('storage/'.$student->avatar)}}" alt="User Avatar"></td>

                    </tr>
                @endforeach
                </tbody>
            </table>

