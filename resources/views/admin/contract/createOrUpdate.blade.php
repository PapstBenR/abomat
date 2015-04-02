@extends('admin.layout')

@section('content')
	<div class="panel panel-default">
	    <div class="panel-body">
		    @if(!isset($contract))
		        {!! Form::open(array('action' => 'Admin\ContractController@store')) !!}
		        <legend>Create new contract</legend>
		    @else
		    	{!! Form::model($contract, array('action' => array('Admin\ContractController@update', $contract->id))) !!}
		    	<legend>Edit contract</legend>
		    @endif

		    <?php
		    	if(isset($contract)){
		    		$category_id_holder = $contract->category_id;
		    		$subcategory_id_holder = $contract->subcategory_id;
		    		$company_id_holder = $contract->company_id;
		    	} else {
		    		$category_id_holder = null;
		    		$subcategory_id_holder = null;
		    		$company_id_holder = null;
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
			    	{!! Form::label('company_id','Company', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::select('company_id', $selectCompanies, $company_id_holder, ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('user_id','User ID', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('user_id', Input::old('user_id'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('membership_identification','Membership identification', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('membership_identification', Input::old('membership_identification'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('membership_identification_extra','Membership identification extra', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('membership_identification_extra', Input::old('membership_identification_extra'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('duration','Duration', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('duration', Input::old('duration'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('inception_of_treaty','Inception of treaty', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('inception_of_treaty', Input::old('inception_of_treaty'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('cancelation_period','Cancelation period', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::text('cancelation_period', Input::old('cancelation_period'), ['class'=>'form-control']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('notice','Notice', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		{!! Form::textarea('notice', Input::old('notice'), ['class'=>'form-control', 'size' => '0x10']) !!}
			    	</div>
			    </div>

			    <div class="form-group">
			    	{!! Form::label('canceled','Canceled?', ['class'=>'col-md-2 control-label']) !!}
			    	<div class="col-lg-10">
			    		<div class="checkbox">
		                    <label>
		                        {!! Form::checkbox('canceled', 'canceled') !!} open
		                    </label>
		                </div>
			    	</div>
			    </div>
		    </div>

		    <a href="javascript:void(0)" class="btn btn-default pull-right">Cancel</a>
		    {!! Form::submit('Save', array('class' => 'btn btn-primary pull-right')) !!}

		    {!! Form::close() !!}
		</div>
	</div>
@stop