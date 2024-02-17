@extends('frontend.layouts.master')

@section('content')

 <!-- ======= Hero Section ======= -->
@include('frontend.home.components.hero')
<!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    @include('frontend.home.components.about')
    <!-- End About Section -->

    <!-- ======= Values Section ======= -->
    @include('frontend.home.components.values')
    <!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    @include('frontend.home.components.counts')
    <!-- End Counts Section -->


    <!-- ======= Services Section ======= -->
    @include('frontend.home.components.services')
    <!-- End Services Section -->



    <!-- ======= Clients Section ======= -->
    @include('frontend.home.components.clients')
    <!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    @include('frontend.home.components.recent-blog-posts')
    <!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    @include('frontend.home.components.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection
