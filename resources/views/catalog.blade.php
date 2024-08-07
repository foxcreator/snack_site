@extends('layouts.app')
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs margin-top">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Головна</a></li>
                    <li class="current">Товари</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Товари</h2>
            <p>{{ $categoryName }}<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item position-relative">
                            <div class="card bg-gray-dark">
                                <img src="{{ $product->thumbnailUrl }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section><!-- /Starter Section Section -->

@endsection
