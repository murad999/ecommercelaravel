@extends('layouts.admin')
@section('title', 'Subscription List')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-info">
		      <div class="panel-heading"><a class="btn btn-success" href="{{ URL::to('admin/catagories/' . 'create') }}">Add New Catagory</a></div>
		      <div class="panel-body">
		      	<table class="table">
				<tr>
					<th>SL</th>
					<th>Title</th>
					<th>Catagory</th>
					<th>status</th>
					<th>Create Date</th>
					<th>Update Date</th>
					<th colspan="2">Action</th>
				</tr>
			 	@php
					$sl=1;
				@endphp
				@foreach($data as $item)
				<tr>
					<td>{{$sl}}</td>
					<td>{{$item->title}}</td>
					@if ($item->catagories['id']==0)
						<td>{{'Root Catagory'}}</td>
					
					@else
					<td>{{$item->catagories['title']}}</td>
					@endif
					<td>{{$item->status}}</td>
					<td>{{$item->created_at}}</td>
					<td>{{$item->updated_at}}</td>
					<td><a class="btn btn-success" href="{{ URL::to('admin/catagories/' . $item->id . '/edit') }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'catagories/' . $item->id, 'class' => '')) }}
		                    {{ Form::hidden('_method', 'DELETE') }}
		                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
		                {{ Form::close() }}
            		</td>
				</tr>
				@php
					$sl++;
				@endphp
				@endforeach 
			</table>
		      </div>
		    </div>
		</div>
	</div>
</div>

@stop