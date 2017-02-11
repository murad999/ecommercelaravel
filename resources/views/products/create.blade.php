@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-8">
			{{ Form::model(request()->old(),['route' =>'products.store']) }}
				<div class="form-group">
					{{ Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a catagory']) }}
				</div>
				<div class="form-group">
				    {{ Form::label('title', null, ['class' => 'control-label']) }}
				    {{ Form::text('title', null, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					{{ Form::label('description', null, ['class' => 'control-label']) }}
					{{Form::textarea('description',null,['class' => 'form-control'])}}
				</div>
				<div class="form-group">
				    {{ Form::label('price', null, ['class' => 'control-label']) }}
				    {{ Form::text('price', null, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
				    {!! Form::label('Product Image') !!}
				    {!! Form::file('image', null) !!}
				</div>
				<div class="form-group">
					{{ Form::select('status', ['active' => 'Active', 'deactive' => 'Deactive'], null, ['class' => 'selected']) }}
				</div>
				{{ Form::submit('Submit',array('class'=>'btn btn-success')) }}
			{{ Form::close() }}
		</div>
	</div>

@stop