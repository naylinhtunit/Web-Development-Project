@extends('layouts.sub-app')

@section('content')
<!--==========================
breadcrumb Section
============================-->
<nav class="breadcrumb blog-breadcrumb mb-0 py-0" aria-label="breadcrumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                <li class="align-middle pl-3"><i class="fa fa-eye pr-1"></i>{{ $analytics[0]['pageViews'] }}</li>
            </ol>
        </div>
    </div>
</nav>

<main id="main">
    
    <!--==========================
      Fb Post Section
    ============================-->
    <section id="program" class="section-bg">
        <div class="container">
          
            <div class="row">
                
                <!-- Left Article -->
                <div class="col-md-8 col-lg-8">
                    <div class="row">
                       
                       <!-- Start Fb Post --> 
                        <div class="fw-post">
                            <div class="section-header">
                                <h3 class="section-title">News</h3>
                                <span class="section-divider"></span>
                                <div class="section-description">
                                    <p>For Your Precious news</p>
                                    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fforw3b.com&width=83&layout=button_count&action=like&size=small&share=false&height=21&appId=607104023200597" width="83" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="card-columns">
                                    @foreach($posts as $post)
                                        <div class="card">
                                            <img class="card-img-top w-100" src="{{ URL::to('/') }}/public/img/blog/post/{{ $post->image }}" alt="{{$post->title}}">
                                            <div class="card-body">
                                                <p class="card-text"><small class="text-muted">{{ date('D M Y', strtotime($post->created_at)) }}</small></p>
                                                <h5 class="card-title">{{$post->title}}</h5>
                                                <p class="card-text">{!! Str::words($post->detail, 10,' . . .') !!}</p>
                                                <a href="{{ url('/blog/news', $post->id) }}">Continue →</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <div class="col-lg-6 offset-lg-3 d-flex">
                                    {{$posts->render("pagination::bootstrap-4")}}
                                </div>
                            </div>
                        </div>
                        <!-- End Fb Post -->
                        
                    </div>
                </div>
                
                <!-- Right Label -->
                <div class="col-md-4 col-lg-4 pt-5 mt-5">
                    
                    <h4 class="mb-4 blog-label pt-5 mt-5">Latest News</h4>
                    <div class="sidebar-item tags">
                        <ul>
                            @foreach ($last_post as $last)
                            <li><a href="/blog/news/{{$post->id}}">{{$last->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Sample Themes -->
                    <h4 class="mb-4 blog-label mt-5">Latest sample themes</h4>
                    
                    @foreach ($last_theme as $last)    
                    <!-- Blog Card -->
                    <div class="border-top pt-4 pb-4">
                        <article>
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <h5 class="label-ttl">{{$last->title}}</h5>
                                    <p class="label-des">{!!  substr(strip_tags($last->note), 0, 160) !!}</p>
                                    <a href="/blog/themes/{{$last->id}}">Read More >></a>
                                </div>
                                
                                <div class="col-5">
                                    <img class="img-fluid" src="{{ URL::to('/') }}/public/img/blog/demo/{{ $last->image }}">
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Card -->
                    @endforeach
                        
                </div>
                
            </div>
            
        </div>
    </section><!-- #package -->
    
    <!--==========================
      Our Ads
    ============================-->
    
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
        <div class="container">
            <div class="row">
                <div class="my-ads">
                    <img src="{{ URL::to('/') }}/public/img/ads/forw3b_ads.png" alt="forw3b_ads">
                </div>
            </div>
        </div>
    </div>
    
  </main>
@endsection