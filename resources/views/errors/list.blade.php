<div class="alert alert-danger">
    @foreach($errors->get($name) as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach
</div>