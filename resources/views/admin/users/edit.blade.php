@extends('admin.default')

@section('page-header')
  User <small>{{ trans('admin.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
        'action' => ['UserController@update', $item->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.users.form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.edit_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

