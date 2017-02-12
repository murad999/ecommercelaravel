@extends('layouts.admin')
@section('title', 'Subscription List')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
		      <div class="panel-heading">Panel with panel-info class</div>
		      <div class="panel-body">
		      	<table class="table">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>description</th>
					<th>price</th>
					<th>img</th>
					<th>status</th>
					<th>Create Date</th>
					<th>Update Date</th>
					<th colspan="2">Action</th>
				</tr>
		{{-- 	 	@php
					$sl=1;
				@endphp
				@foreach($data as $item)
				<tr>
					<td>{{$sl}}</td>
					<td>{{$item->title}}</td>
					<td>{{$item->description}}</td>
					<td>{{$item->price}}</td>
					<td>{{$item->img}}</td>
					<td>{{$item->status}}</td>
					<td>{{$item->created_at}}</td>
					<td>{{$item->updated_at}}</td>
					<td><a class="btn btn-success" href="{{ URL::to('products/' . $item->id . '/edit') }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'products/' . $item->id, 'class' => '')) }}
		                    {{ Form::hidden('_method', 'DELETE') }}
		                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
		                {{ Form::close() }}
            		</td>
				</tr>
				@php
					$sl++;
				@endphp
				@endforeach  --}}
			</table>
		      </div>
		    </div>
		</div>
	</div>
</div>

@stop