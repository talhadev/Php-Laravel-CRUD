@extends('layouts.app')
{{--@extends('header')--}}
@section('content')

@foreach($customers as $customer)

    <customer>
        <div class="row" style="margin-left: 70px">


            <div class="col-md-1">

                <p>{{$customer->customer_id}}</p>
            </div>

            <div class="col-md-2" >
                <p>{{$customer->customer_name}}</p>
            </div>

            <div class="col-md-2">
                <p>{{$customer->phone}}</p>

            </div>

            <div class="col-md-2">
                <p>{{$customer->address}}</p>
                <p></p>
            </div>

            <div class="col-md-2">
                <p>{{$customer->city}}</p>
            </div>

            <div class="col-md-2">
                <p>{{$customer->country}}</p>
                <p></p>
            </div>
        </div>

            </customer>
    <style>
        .row > div {

            border: #000000 solid 1px;
            text-align: left;

        }
    </style>

    @endforeach
    @stop