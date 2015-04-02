@extends('admin.layout')

@section('content')
	<div class="panel panel-default">
	    <div class="panel-body">
		    @if(!isset($member))
		        {!! Form::open(array('action' => 'Admin\MemberController@store')) !!}
		        <legend>Create new member</legend>
		    @else
		    	{!! Form::model($member, array('action' => array('Admin\MemberController@update', $member->id))) !!}
		    	<legend>Edit member</legend>
		    @endif

		    <ul>
			  @foreach($errors->all() as $error)
			    <li>{{ $error }}</li>
			  @endforeach
			</ul>

		    <div class="form-horizontal">
		    	<div class="form-group">
		            <label class="col-lg-2 control-label">Radios</label>
		            <div class="col-lg-10">
		                <div class="radio radio-primary">
		                    <label>
		                        {!! Form::radio('gender', 'male', true) !!}
		                        Male
		                    </label>
		                </div>
		                <div class="radio radio-primary">
		                    <label>
		                        {!! Form::radio('gender', 'female') !!}
		                        Female
		                    </label>
		                </div>
		            </div>
		        </div>

			    <div class="form-group">
			    	{!! Form::label('first_name','First name', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('first_name', Input::old('first_name'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('last_name','Last name', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('last_name', Input::old('last_name'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('email','Email', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('email', Input::old('email'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('street','Street', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('street', Input::old('street'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('postzip','Postzip', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('postzip', Input::old('postzip'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('city','City', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('city', Input::old('city'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('county','Country', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('country', Input::old('country'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

		    </div>

		    <a href="javascript:void(0)" class="btn btn-default pull-right">Cancel</a>
		    {!! Form::submit('Save', array('class' => 'btn btn-primary pull-right')) !!}

		    {!! Form::close() !!}
		</div>
	</div>
@stop