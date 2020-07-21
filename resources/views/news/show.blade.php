@extends('layouts.sub-app')

@section('head')
    <meta property="og:title"         content="{{$posts->title}}" />
    <meta property="og:image"         content="{{ URL::to('/') }}/public/img/blog/post/{{ $posts->image }}" />
@endsection

@section('content')
<!--==========================
breadcrumb Section
============================-->
<nav class="breadcrumb blog-breadcrumb mb-0 py-0" aria-label="breadcrumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/blog/news')}}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$posts->title}}</li>
            </ol>
        </div>
    </div>
</nav>

<main id="main">

    <!--==========================
      Package Section
    ============================-->
    
    <section id="program" class="section-bg">
        <div class="container">
  
          <div class="section-header">
            <h3 class="section-title">News</h3>
            <span class="section-divider"></span>
            <p class="section-description">For Your Precious new</p>
          </div>
  
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card wow fadeInLeft">
                <img class="card-img-top" src="{{ URL::to('/') }}/public/img/blog/post/{{ $posts->image }}" style="width:50%;" />
                <div class="card-body">
                    <h4 class="blog-ttl">{{$posts->title}}</h4>
                    {!! $posts->detail !!}
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fforw3b.com%2Fblog&layout=button_count&size=large&appId=607104023200597&width=88&height=28" width="88" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- #package -->
  </main>
@endsection