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
            <h1>Member</h1>
            <div class="row">
                <div class="col-md-2">First name:</div>
                <div class="col-md-10">{{ $member->first_name }}</div>
            </div>
            <div class="row">
                <div class="col-md-2">Last name:</div>
                <div class="col-md-10">{{ $member->last_name }}</div>
            </div>
            <div class="row">
                <div class="col-md-2">Email:</div>
                <div class="col-md-10">{{ $member->email }}</div>
            </div>
            <div class="row">
                <div class="col-md-2">Street:</div>
                <div class="col-md-10">{{ $member->street }}</div>
            </div>
            <div class="row">
                <div class="col-md-2">Postzip:</div>
                <div class="col-md-10">{{ $member->postzip }}</div>
            </div>
            <div class="row">
                <div class="col-md-2">City:</div>
                <div class="col-md-10">{{ $member->city }}</div>
            </div>
            <div class="row">
                <div class="col-md-2">Country:</div>
                <div class="col-md-10">{{ $member->country }}</div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <h1>Open contracts</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Company</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allContracts as $contract)
                        @if($contract->canceled == false)
                            <tr>
                                <td>{{ $contract->id }}</td>
                                <td>{{ $contract->category_id }}</td>
                                <td>{{ $contract->subcategory_id }}</td>
                                <td>{{ $contract->company_id }}</td>
                                <td><a href="contract/edit/{{ $contract->id }}">edit</a></td>
                                <td><a href="contract/delete/{{ $contract->id }}">delete</a></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <h1>Closed contracts</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Company</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allContracts as $contract)
                        @if($contract->canceled == false)
                            <tr>
                                <td>{{ $contract->id }}</td>
                                <td>{{ $contract->category_id }}</td>
                                <td>{{ $contract->subcategory_id }}</td>
                                <td>{{ $contract->company_id }}</td>
                                <td><a href="contract/edit/{{ $contract->id }}">edit</a></td>
                                <td><a href="contract/delete/{{ $contract->id }}">delete</a></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop