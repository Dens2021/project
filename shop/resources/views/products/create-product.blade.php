@extends('layouts.main')

@section('content')
    {{ Form::open(['url' => 'create-product', 'method' => 'post']) }}

    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}

    {{ Form::label('price', 'Price') }}
    {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) }}

    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) }}

    {{ Form::label('quantity', 'Quantity') }}
    {{ Form::text('quantity', null,  ['class' => 'form-control', 'placeholder' => 'Quantity']) }}

    {{ Form::submit('Create', ['class' => 'btn btn-lg btn-primary mt-3']) }}

    <a href="/"
       class="btn btn-lg btn-outline-danger mt-3">Cancel</a>

    {{ Form::close() }}

@stop
