@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
    <a href="{{ route('users.create') }}" class="btn btn-info" style="margin-bottom:1em">Nuevo usuario</a>

    <table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->type == "admin")
                            <span class="badge badge-danger">{{ $user->type }}</span>
                        @else
                            <span class="badge badge-primary">{{ $user->type }}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">&#9998;</a>
                        {{-- <a href="{{ route('users.destroy', $user) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar el usuario?')">&#10008;</a> --}}
                        {!! Form::open(['route' => ['users.destroy', $user], 'method' => 'DELETE']) !!}
                            {!! Form::submit('&#10008;', [
                                'class' => 'btn btn-danger',
                                'onClick' => "return confirm('¿Estas seguro de eliminar al usuario?')"
                            ]) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $users->links() }}
    </div>
@endsection