{!! Form::hidden('user_id', 1) !!}
<div class="form-group">
    {!! Form::label('customer_id','Customer Id') !!}
    {!! Form::text('customer_id',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('customer_name','Customer Name') !!}
    {!! Form::text('customer_name',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','Phone') !!}
    {!! Form::text('phone',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('address',' Address') !!}
    {!! Form::text('address',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('city','City') !!}
    {!! Form::text('city',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country',' Country') !!}
    {!! Form::text('country',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($data , ['class'=> 'btn btn-primary form-control']) !!}
</div>


