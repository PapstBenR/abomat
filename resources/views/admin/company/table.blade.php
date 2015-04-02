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
            <h1>Companies</h1>
            <a href="company/create" class="btn btn-primary pull-right">Add new</a>
            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>#</th>
            			<th>Short name</th>
                        <th>Long name</th>
            			<th>Category</th>
                        <th>Subcategory</th>
                        <th>Status</th>
            			<th>Edit</th>
            			<th>Delete</th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($companies as $company)
        				<tr>
        					<td>{{ $company->id }}</td>
        					<td>{{ $company->short_name }}</td>
                            <td>{{ $company->long_name }}</td>
                            <td>{{ $company->category_id }}</td>
                            <td>{{ $company->subcategory_id }}</td>
                            <td>{{ $company->status }}</td>
        					<td><a href="company/edit/{{ $company->id }}">edit</a></td>
        					<td><a href="company/delete/{{ $company->id }}">delete</a></td>
        				</tr>
        			@endforeach
            	</tbody>
            </table>
        </div>
    </div>
@stop