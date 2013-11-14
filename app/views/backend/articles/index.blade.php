@extends('Admin::backend.layouts.default')

{{-- Page Title --}}
@section('title')
Network
@parent
@stop

{{-- Page Content --}}
@section('content')
<div class="container auto-max-width">
    <div class="page-header">
        <h1>
            <span class="glyphicon glyphicon-pushpin reposition"></span>
            Network
            <small>Management</small>

            <div class="pull-right">
                <a class="btn btn-small btn-info" href="#">
                    <span class="glyphicon glyphicon-question-sign"></span>
                </a>

                <a class="btn btn-small btn-primary" href="{{ route('administration.network.add') }}">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    Add New
                </a>
            </div>
        </h1>
    </div>

    <table class="table table-striped table-condensed">
        <thead>
        <tr>
            <th style="width:30px;">#</th>
            <th style="width: 100px;">Actions</th>
        </tr>
        </thead>
        <tbody class="table-hover">
        @if ( count( $articles ) == 0 )
        <tr>
            <td colspan="5">Sorry, there are no records available.</td>
        </tr>
        @else
        @foreach($articles as $article)
        <tr>
            <td>{{ $network->id }}</td>
            <td>&ndash;</td>

        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
@stop
