@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ $iCompanies }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ $iContracts }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ $iContractsCan }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ $iMember }}
                </div>
            </div>
        </div>
    </div>

    <!-- Visitor report-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10"><span>Visitors</span></div>
                        <div class="col-md-2"><a href="#" class="pull-right">more..</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop