@extends('layouts.app')
{{--@extends('header')--}}
@section('content')

    {!! Form::open(['url'=> 'customer']) !!}
    @include('Form' , ['data' => 'Add Customer'])
    {!! Form::close() !!}

@endsection;
