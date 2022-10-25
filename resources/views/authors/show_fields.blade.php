<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $authors->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $authors->last_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $authors->email }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-12">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    <p>{{ $authors->birthdate }}</p>
</div>

<!-- Added Field -->
<div class="col-sm-12">
    {!! Form::label('added', 'Added:') !!}
    <p>{{ $authors->added }}</p>
</div>

