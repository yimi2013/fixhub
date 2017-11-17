@extends('layouts.dashboard')

@section('content')
    @include('dashboard.projects._partials.summary')
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li><a href="">Builds</a></li>
                    <li class="active"><a href="">Stages</a></li>
                    <li><a href="">Agents</a></li>
                    <li><a href="">Artifact definitions</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active">
                        @include('dashboard.plans._partials.stages')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop