@extends('web.layouts.app')
@section('main_section')
    <section class="py-5">
        <div class="container">
            <h1 class="titles mb-3">{{ $category?->name ?: 'Search Products' }}</h1>
            <div class="row g-3">
                <div class="col-sm-4 col-lg-3 col-6">
                    <div class="bg-white shadow rounded overflow-hidden border product_img">
                        <a href="{{ route('product.index') }}">
                            <figure>
                                <img src="{{ asset('images/661e5d03b6431.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="p-3 text-center">
                            <b>Product 1</b>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <del class="text-danger">₹ 10,000</del>
                                <div class="fs-4 ms-2 text-success">
                                    ₹ 9,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 col-6">
                    <div class="bg-white shadow rounded overflow-hidden border product_img">
                        <a href="{{ route('product.index') }}">
                            <figure>
                                <img src="{{ asset('images/661e5d03b6431.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="p-3 text-center">
                            <b>Product 1</b>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <del class="text-danger">₹ 10,000</del>
                                <div class="fs-4 ms-2 text-success">
                                    ₹ 9,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 col-6">
                    <div class="bg-white shadow rounded overflow-hidden border product_img">
                        <a href="{{ route('product.index') }}">
                            <figure>
                                <img src="{{ asset('images/661e5d03b6431.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="p-3 text-center">
                            <b>Product 1</b>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <del class="text-danger">₹ 10,000</del>
                                <div class="fs-4 ms-2 text-success">
                                    ₹ 9,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 col-6">
                    <div class="bg-white shadow rounded overflow-hidden border product_img">
                        <a href="{{ route('product.index') }}">
                            <figure>
                                <img src="{{ asset('images/661e5d03b6431.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="p-3 text-center">
                            <b>Product 1</b>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <del class="text-danger">₹ 10,000</del>
                                <div class="fs-4 ms-2 text-success">
                                    ₹ 9,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 col-6">
                    <div class="bg-white shadow rounded overflow-hidden border product_img">
                        <a href="{{ route('product.index') }}">
                            <figure>
                                <img src="{{ asset('images/661e5d03b6431.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="p-3 text-center">
                            <b>Product 1</b>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <del class="text-danger">₹ 10,000</del>
                                <div class="fs-4 ms-2 text-success">
                                    ₹ 9,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 col-6">
                    <div class="bg-white shadow rounded overflow-hidden border product_img">
                        <a href="{{ route('product.index') }}">
                            <figure>
                                <img src="{{ asset('images/661e5d03b6431.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="p-3 text-center">
                            <b>Product 1</b>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <del class="text-danger">₹ 10,000</del>
                                <div class="fs-4 ms-2 text-success">
                                    ₹ 9,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 col-6">
                    <div class="bg-white shadow rounded overflow-hidden border product_img">
                        <a href="{{ route('product.index') }}">
                            <figure>
                                <img src="{{ asset('images/661e5d03b6431.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="p-3 text-center">
                            <b>Product 1</b>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <del class="text-danger">₹ 10,000</del>
                                <div class="fs-4 ms-2 text-success">
                                    ₹ 9,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3 col-6">
                    <div class="bg-white shadow rounded overflow-hidden border product_img">
                        <a href="{{ route('product.index') }}">
                            <figure>
                                <img src="{{ asset('images/661e5d03b6431.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <div class="p-3 text-center">
                            <b>Product 1</b>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <del class="text-danger">₹ 10,000</del>
                                <div class="fs-4 ms-2 text-success">
                                    ₹ 9,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (!empty($category))
                <h4 class="titles my-5">{{ $category?->name }}</h4>
                <p>
                    {!! $category?->description !!}
                </p>
            @endif
        </div>
    </section>
@endsection
