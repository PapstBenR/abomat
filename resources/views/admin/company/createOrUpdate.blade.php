@extends('admin.layout')

@section('content')
	<div class="panel panel-default">
	    <div class="panel-body">
		    @if(!isset($company))
		        {!! Form::open(array('action' => 'Admin\CompanyController@store')) !!}
		        <legend>Create new company</legend>
		    @else
		    	{!! Form::model($company, array('action' => array('Admin\CompanyController@update', $company->id))) !!}
		    	<legend>Edit company</legend>
		    @endif

		    <?php
		    	if(isset($company)){
		    		$category_id_holder = $company->category_id;
		    		$subcategory_id_holder = $company->subcategory_id;
		    	} else {
		    		$category_id_holder = null;
		    		$subcategory_id_holder = null;
		    	}
		    ?>
		    <ul>
			  @foreach($errors->all() as $error)
			    <li>{{ $error }}</li>
			  @endforeach
			</ul>

		    <div class="form-horizontal">
		    	<div class="form-group">
			    	{!! Form::label('category_id','Category', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::select('category_id', $selectCategories, $category_id_holder, ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('subcategory_id','Subcategory', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::select('subcategory_id', $selectSubcategories, $subcategory_id_holder, ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('short_name','Short name', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('short_name', Input::old('short_name'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('long_name','Long name', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('long_name', Input::old('long_name'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('department','Department', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('department', Input::old('department'), ['class'=>'form-control']) !!}
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

			    <div class="form-group">
			    	{!! Form::label('telephone','Telephone', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('telephone', Input::old('telephone'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('mobile','Mobile', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('mobile', Input::old('mobile'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('fax','Fax', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('fax', Input::old('fax'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('email','Email', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('email', Input::old('email'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('url','URL', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('url', Input::old('url'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('description','Description', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::textarea('description', Input::old('description'), ['class'=>'form-control', 'size' => '0x10']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('check_url','Check URL', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('check_url', Input::old('check_url'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>
		    </div>

		    <a href="javascript:void(0)" class="btn btn-default pull-right">Cancel</a>
		    {!! Form::submit('Save', array('class' => 'btn btn-primary pull-right')) !!}

		    {!! Form::close() !!}
		</div>
	</div>
@stop