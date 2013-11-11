@extends('frontend.layouts.default')

{{-- Page Content --}}
@section('page_body')

@include('frontend.elements.navigation_main')
@include('frontend.elements.navigation_secondary')
@include('frontend.elements.promoted_posts')

<div class="row clarfix">

    <h1 class="postTitle">Search Results</h1>

</div>

<hr/>

<div class="row clearfix" style="padding-top: 0;">

    <div class="content search col">

        <article>

            <p class="lead">
                You searched for: &ldquo;{{ $searchTerm }}&rdquo; and found {{ count( $searchResults ) }} results.
            </p>

        </article>

    </div>

    <div class="sidebar post col">
        <h3 class="title">Related search terms.</h3>
    </div>

</div>

@stop
