@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('interface.welcome.panelHeading')</div>

                <div class="panel-body">
                    @lang('interface.welcome.panelBody')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
