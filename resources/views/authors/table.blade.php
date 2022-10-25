<div class="table-responsive">
    <table class="table" id="authors-table">
        <thead>
        <tr>
            <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Birthdate</th>
        <th>Added</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $authors)
            <tr>
                <td>{{ $authors->first_name }}</td>
            <td>{{ $authors->last_name }}</td>
            <td>{{ $authors->email }}</td>
            <td>{{ $authors->birthdate }}</td>
            <td>{{ $authors->added }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['authors.destroy', $authors->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('authors.show', [$authors->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('authors.edit', [$authors->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
