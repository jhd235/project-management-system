@extends('layouts.admin')

@section('main-title','Create Project Status')
@section('content')
    <div class="row">

        <div class="col-md-12">

            {!! Form::open(['route' => 'setup.project-status.store']) !!}

            @include('mage2setup::project-status._fields')
            <div>
                {!!  Form::submit('Save',['class' => 'btn btn-primary btn-raised']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop