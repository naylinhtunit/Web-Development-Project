@extends('layouts.app')

@section('content')

<!--==========================
    Clients Logo Demo
============================-->
<section id="clients">
  <div class="container">
    <div class="section-header">
      <h3 class="section-title">Logo</h3>
      <span class="section-divider"></span>
      <p class="section-description">Some of our clients</p>
    </div>
    
    <div class="row wow fadeInUp">
        @foreach ($logos as $logo)
        <div class="col-md-2 client-logo">
            <img src="{{ URL::to('/') }}/public/img/demo/logo/{{ $logo->image }}" alt="Some of our clients logos">
        </div>
        @endforeach
    </div>
    
  </div>
</section><!-- #clients -->
    
    <!--==========================
      Our Ads
    ============================-->
    
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="container">
            <div class="row">
                <div class="my-ads">
                    <img src="{{ URL::to('/') }}/public/img/ads/forw3b_ads.png" alt="forw3b ads">
                </div>
            </div>
        </div>
    </div>

  </main>
@endsection