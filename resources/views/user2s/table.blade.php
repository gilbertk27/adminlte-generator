<div class="table-responsive">
    <table class="table" id="user2s-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user2s as $user2)
            <tr>
                <td>{{ $user2->name }}</td>
            <td>{{ $user2->email }}</td>
            <td>{{ $user2->email_verified_at }}</td>
            <td>{{ $user2->password }}</td>
            <td>{{ $user2->remember_token }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['user2s.destroy', $user2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('user2s.show', [$user2->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('user2s.edit', [$user2->id]) }}"
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
