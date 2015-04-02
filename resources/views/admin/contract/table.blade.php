@extends('admin.layout')

@section('content')
	@if(Session::get('message_success') !== null)
		<div class="alert alert-dismissable alert-success">
    		<button type="button" class="close" data-dismiss="alert">×</button>
    		<strong>Well done!</strong> {{ Session::get('message_success') }}
		</div>
	@endif

	@if(Session::get('message_error') !== null)
		<div class="alert alert-dismissable alert-danger">
    		<button type="button" class="close" data-dismiss="alert">×</button>
    		<strong>Oh snap!</strong> {{ Session::get('message_error') }}
		</div>
	@endif
    <div class="panel panel-default">
        <div class="panel-body">
            <h1>Contracts</h1>
            <a href="contract/create" class="btn btn-primary pull-right">Add new</a>
            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>#</th>
            			<th>E-mail</th>
                        <th>Company</th>
            			<th>Category</th>
                        <th>Subcategory</th>
                        <th>Status</th>
                        <th>Details</th>
            			<th>Edit</th>
            			<th>Delete</th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($contracts as $contract)
        				<tr>
        					<td>{{ $contract->id }}</td>
        					<td>{{ $contract->user_id }}</td>
                            <td>{{ $contract->company_id }}</td>
                            <td>{{ $contract->category_id }}</td>
                            <td>{{ $contract->subcategory_id }}</td>
                            <td>{{ $contract->canceled }}</td>
                            <td><a href="contract/show/{{ $contract->id }}">show</a></td>
        					<td><a href="contract/edit/{{ $contract->id }}">edit</a></td>
        					<td><a href="contract/delete/{{ $contract->id }}">delete</a></td>
        				</tr>
        			@endforeach
            	</tbody>
            </table>
        </div>
    </div>
@stop