@extends('frontend.layouts.default')

{{-- Page Content --}}
@section('page_body')

    @include('frontend.elements.navigation_main')
    @include('frontend.elements.navigation_secondary')
    @include('frontend.elements.promoted_posts')


<div class="homepageFeatured row clearfix">

    <div class="featured content col">
        <a href="#" title="Click to view featured article">
            <h1>Featured Content Title</h1>
            <span>Three Word Tagline</span>
            <img src="assets/img/featured-placer.jpg" />
        </a>
    </div>

    <div class="advert sidebar col">
        <img src="http://placehold.it/300x250" />
    </div>

</div>

<div class="row clearfix">

    <div class="content col">
        <div class="row clearfix">
            <div class="col">
                <h3 class="title">PHP Programming<span>.</span></h3>
                <ul class="postList">
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>The structure of arrays in PHP</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>The pro's and cons of using composer</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>Why after 8 years im still a PHP developer</h4>
                        </a>
                    </li>
                    <li class="stats">
                        <a href="#">114 more articles in <span>PHP Programming</span>.</a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h3 class="title">Photography<span>.</span></h3>

                <ul class="postList">
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>My Canon 350D is still my day to day camera</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>Is it just me or do photographers seem to be treated like dirt?</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>Why are there no amazing self hosted gallery packages?</h4>
                        </a>
                    </li>
                    <li class="stats">
                        <a href="#">89 articles in <span>Photography</span>.</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="row clearfix">

            <div class="col">
                <h3 class="title">Art<span>.</span></h3>
                <ul class="postList">
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>My Canon 350D is still my day to day camera</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>Is it just me or do photographers seem to be treated like dirt?</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>Why are there no amazing self hosted gallery packages?</h4>
                        </a>
                    </li>
                    <li class="stats">
                        <a href="#">64 more articles in <span>Art</span>.</a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h3 class="title">Fashion<span>.</span></h3>
                <ul class="postList">
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>My Canon 350D is still my day to day camera</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>Is it just me or do photographers seem to be treated like dirt?</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/115x75" />
                            <h4>Why are there no amazing self hosted gallery packages?</h4>
                        </a>
                    </li>
                    <li class="stats">
                        <a href="#">259 more articles in <span>Fashion</span>.</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    @include('frontend.elements.sidebar_homepage')

</div>

@stop
