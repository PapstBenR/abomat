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
            <h1>Members</h1>
            <a href="member/create" class="btn btn-primary pull-right">Add new</a>
            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>#</th>
            			<th>Email</th>
                        <th>First name</th>
            			<th>Last name</th>
                        <th>Country</th>
                        <th>Details</th>
            			<th>Edit</th>
            			<th>Delete</th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($members as $member)
        				<tr>
        					<td>{{ $member->id }}</td>
        					<td>{{ $member->email }}</td>
                            <td>{{ $member->first_name }}</td>
                            <td>{{ $member->last_name }}</td>
                            <td>{{ $member->country }}</td>
                            <td><a href="member/show/{{ $member->id }}">show</a></td>
        					<td><a href="member/edit/{{ $member->id }}">edit</a></td>
        					<td><a href="member/delete/{{ $member->id }}">delete</a></td>
        				</tr>
        			@endforeach
            	</tbody>
            </table>
        </div>
    </div>
@stop