@extends('admin.template.main')

@section('title', 'Lista de categorías')

@section('content')
    <a href="{{ route('categories.create') }}" class="btn btn-primary" style="margin-bottom:1em">Nueva categoría</a>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acción</th>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">&#9998;</a>
                        {{-- <a href="{{ route('categories.edit', $category) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar el usuario?')">&#10008;</a> --}}
                        {!! Form::open(['route' => ['categories.destroy', $category], 'method' => 'DELETE']) !!}
                            {!! Form::submit('&#10008;', [
                                'class' => 'btn btn-danger',
                                'onClick' => "return confirm('¿Estas seguro de eliminar la categoría?')"
                            ]) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $categories->links() }}
    </div>
@endsection