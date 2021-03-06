@extends('layouts.app')

@section('title', 'Add Post')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Add Post</h2>

                <div class="collapsible-body">
                    {!! Form::open(['route' => 'post.store']) !!}
                    {{ Form::token() }}
                    {{ Form::hidden('_method', 'POST') }}

                    <div class="form-group">
                        {{ Form::text('title', null, ['placeholder' => 'What are you writing about..?', 'class' => 'input-block', 'required']) }}
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('body', null, ['placeholder' => 'Be inspire! Write your thoughts...', 'class' => 'input-block', 'required']) !!}
                    </div>

                    {{ Form::submit('Add Post', ['class' => 'paper-btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
