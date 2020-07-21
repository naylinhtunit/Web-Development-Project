@extends('layouts.app')

@section('content')

<!--==========================
        Client Web Demo
============================-->
<section id="demo" class="section-bg">
  <div class="container">
    <div class="section-header">
      <h3 class="section-title">Website</h3>
      <span class="section-divider"></span>
      <p class="section-description">Some of our clients</p>
    </div>

    <div class="row no-gutters">
        
        @foreach ($webs as $web)

        <div class="col-lg-3 col-md-6">
            <div class="shadow-sm bg-light rounded">
                <div class="gallery-item wow fadeInUp">
                    <span>{{$web->url}}</span>
                    <a href="{{ $web->url }}" target="_blank">
                        <img src="{{ URL::to('/') }}/public/img/demo/web/{{ $web->image }}" alt="Some of our clients web portfolios">
                    </a>
                </div>
            </div>
        </div>
        
        @endforeach

    </div>

  </div>
</section><!-- #Web Demo -->
    
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