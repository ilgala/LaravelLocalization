@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('interface.home.panelHeading')</div>

                <div class="panel-body">
                    @lang('interface.home.panelBody')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
