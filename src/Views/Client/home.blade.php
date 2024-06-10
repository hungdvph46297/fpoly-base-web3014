@extends('layouts.master')
@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">New</h2>
                    <article class="card">
                        <div class="post-slider slider-sm">
                            <img src="{{ $productFirstLatest['img_thumbnail'] }}" class="card-img-top" alt="post-thumb">
                        </div>

                        <div class="card-body">
                            <h3 class="h4 mb-3"><a class="post-title"
                                    href="post-details.html">{{ $productFirstLatest['c_name'] }}</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="{{ asset('assets/client/images/john-doe.jpg') }}">
                                        <span>Charls Xaviar</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>{{ $productFirstLatest['created_at'] }}
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="tags.html">Color</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>{{ $productFirstLatest['overview'] }}</p>
                            <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Trending Post</h2>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ $productFirstLatest['img_thumbnail'] }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">{{ $productFirstLatest['c_name'] }}</a></h4>
                                <ul class="card-meta list-inline mb-0">
<li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>{{ $productFirstLatest['created_at'] }}
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ $productFirstLatest['img_thumbnail'] }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">{{ $productFirstLatest['c_name'] }}</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>{{ $productFirstLatest['created_at'] }}
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ $productFirstLatest['img_thumbnail'] }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">{{ $productFirstLatest['c_name'] }}</a></h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>{{ $productFirstLatest['created_at'] }}
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title"></h2>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ $productFirstLatest['img_thumbnail'] }}">
                            <div class="ml-3">
<h4><a href="post-details.html" class="post-title">{{ $productFirstLatest['c_name'] }}</a></h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>{{ $productFirstLatest['created_at'] }}
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ $productFirstLatest['img_thumbnail'] }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">{{ $productFirstLatest['c_name'] }}</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>{{ $productFirstLatest['created_at'] }}
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ $productFirstLatest['img_thumbnail'] }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">{{ $productFirstLatest['c_name'] }}</a></h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>{{ $productFirstLatest['created_at'] }}
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>



                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </section>
@endsection