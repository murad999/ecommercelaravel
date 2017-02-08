@extends('layouts.admin')
@section('title', 'Roles List')
@section('content')
<h1 class="page-header">Roles List {{link_to_route('roles.create','Add Role',[],array('class'=>'btn btn-success pull-right'))}}</h1>
 <div class="row">
        <div class="col-sm-12 col-md-12">        
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>SI#</th>
                  <th>Role Name</th>
                  <th width="30%">Description</th> 
                  <th class="center">Created</th>
                  <th>Updated</th>
                  <th>Status</th>                     
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
             @php  $options=''; $i=1; @endphp
              @foreach ($roles as $data) <?php $options.='<option value="'.$data->id.'">'.$data->name.'</option>'; ?>         
                  <tr>
                  <td>{{$i}}</td>
                   <td>{{$data->name}}</td>
                  <td>{!!$data->description!!}</td>
                  <td>{{showDateWithFormat($data->created_at)}}</td>
                  <td>{{showDateWithFormat($data->updated_at)}}</td>
                  <td>{{$data->status}}</td>                  
                  <td> 
                  	{!!  HTML::decode(link_to_route('roles.edit', '<span aria-hidden="true" class="glyphicon glyphicon-edit"></span>', array($data->id)))!!}
                    @if($data->is_deletable=='1')
                    <button type="button" data-toggle="modal" data-target="#myModal" onClick="callModal('{{$data->id}}')" class='btn btn-danger btn-xs delete-button'><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
                    @endif
                </tr>
                 @php $i=$i+1; @endphp             
                 @endforeach                           
                </tbody>
                </table>
                </div>
                
        </div>
      </div>


      	<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Select any role for all the users under this role</h4>
                  </div>
                  <div class="modal-body">
                  {{ Form::open(array('route' => array('roles.destroy', 'remove-id'),'method'=>'DELETE',
            'class' =>'delete-form', 'id'=>'del-form')) }}    
                    {{Form::select('role_id',array(),null,array('class' => 'form-control', 'id'=>'selectBox'))}} 
                 </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{ Form::submit('Confirm Delete',array('class'=>'btn btn-primary'))}}              
                  </div>
                  {{ Form::close() }}
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
@stop