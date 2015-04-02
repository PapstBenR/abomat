@extends('admin.layout')

@section('content')
	<div class="panel panel-default">
	    <div class="panel-body">
		    @if(!isset($subcategory))
		        {!! Form::open(array('action' => array('Admin\SubcategoryController@store', $id))) !!}
		        <legend>Create new subcategory</legend>
		    @else
		    	{!! Form::model($subcategory, array('action' => array('Admin\SubcategoryController@update', $subcategory->id))) !!}
		    	<legend>Edit subcategory</legend>
		    @endif

		    <ul>
			  @foreach($errors->all() as $error)
			    <li>{{ $error }}</li>
			  @endforeach
			</ul>
			
		    <div class="form-horizontal">
			    <div class="form-group">
			    	{!! Form::label('name','Name', ['class'=>'col-md-1 control-label']) !!}
			    	<div class="col-lg-11">
			    		{!! Form::text('name', Input::old('name'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('description','Description', ['class'=>'col-md-1 control-label']) !!}
			    	<div class="col-lg-11">
			    		{!! Form::textarea('description', Input::old('description'), ['class'=>'form-control', 'size' => '0x10']) !!}
			    	</div>
			    </div>
		    </div>

		    <a href="javascript:void(0)" class="btn btn-default pull-right">Cancel</a>
		    {!! Form::submit('Save', array('class' => 'btn btn-primary pull-right')) !!}

		    {!! Form::close() !!}
		</div>
	</div>
@stop