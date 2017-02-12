@extends('layouts.admin')
@section('title', 'Subscription List')
@section('content')

	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-info">
			      <div class="panel-heading">Product Create/Include</div>
			      	<div class="panel-body">
						{{ Form::model(request()->old(),['route' =>'products.store','file'=>true]) }}
							<div class="form-group">

								{!! Form::label('parent_name', null, ['class' => 'control-label']) !!}
								
									<select name="parent_id">
									<option value="0">Select</option>}
									option
									@foreach ($data as $element)
										<option value="{{$element->id}}">{{$element->title}}</option>
										@endforeach
									</select>
								
								
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
								{!! Form::label('status', null, ['class' => 'control-label']) !!}
								{{ Form::select('status', ['active' => 'Active', 'deactive' => 'Deactive'], null, ['class' => 'selected']) }}
							</div>
							{{ Form::submit('Submit',array('class'=>'btn btn-success')) }}
						{{ Form::close() }}
					</div>
				</div>	
			</div>
		</div>
	</div>

@stop