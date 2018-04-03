@if(count($errors) > 0)
    <div class="alert alert-danger alert-block" role="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif