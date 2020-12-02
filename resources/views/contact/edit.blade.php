@extends('layouts.app')
@section('content')
   <div class="container">
   @if ($errors->all())
   <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
   </ul>
   @endif
    {!! Form::open(['action' => ['contactcontroller@update', $data->id], 'method'=>'PUT']) !!}
        <dev class="col-md-6">
            <div class="form-group">
            {!! Form::label('NAME') !!}
            {!! Form::text('name',$data->name,["class"=>"form-control"])!!}
            </div>   
        </dev>
        <dev class="col-md-6">
            <div class="form-group">
            {!! Form::label('EMAIL') !!}
            {!! Form::text('email',$data->email,["class"=>"form-control"])!!}
            </div>   
        </dev>
        <dev class="col-md-6">
            <div class="form-group">
            {!! Form::label('PHONE') !!}
            {!! Form::text('phone',$data->phone,["class"=>"form-control"])!!}
            </div>   
            <input type="submit" value="อัพเดท" class="btn btn-primary">
            <a href="/contact" class="btn btn-success">กลับ</a>
        </dev>
    {!! Form::close() !!}
    </div>
@endsection