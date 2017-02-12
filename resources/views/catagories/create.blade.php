@extends('layouts.admin')
@section('title', 'Subscription List')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-info">
			      <div class="panel-heading">Catagory Create/Include <a class="btn btn-success right" href="{{ URL::to('admin/catagories/') }}">Back to index</a></div>
			      	<div class="panel-body">
				      	@if (count($errors) > 0)
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						{{ Form::model(request()->old(),['route' =>'catagories.store']) }}
						
							<div class="form-group">
							    {{ Form::label('title', null, ['class' => 'control-label']) }}
							    {{ Form::text('title', null, ['class' => 'form-control']) }}
							</div>
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