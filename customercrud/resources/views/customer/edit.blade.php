@extends('header')
@section('content')
    {!! Form::model($customers , ['action'=> ['CustomerController@update', $customers -> customer_id] , 'method' => 'PATCH']) !!}
    @include('Form' , ['data'=>'Update Customer Data']);
    {!! Form::close()!!}
@stop
