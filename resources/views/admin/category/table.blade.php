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
            <h1>Categories</h1>
            <a href="category/create" class="btn btn-primary pull-right">Add new</a>
            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>#</th>
            			<th>Name</th>
            			<th>Subcategories</th>
            			<th>Edit</th>
            			<th>Delete</th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($categories as $category)
        				<tr>
        					<td>{{ $category->id }}</td>
        					<td>{{ $category->name }}</td>
        					<td><a href="subcategory/{{ $category->id }}">show</a></td>
        					<td><a href="category/edit/{{ $category->id }}">edit</a></td>
        					<td><a href="category/delete/{{ $category->id }}">delete</a></td>
        				</tr>
        			@endforeach
            	</tbody>
            </table>
        </div>
    </div>
@stop