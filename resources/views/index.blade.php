@extends('layouts.app')

@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
        
        <h2><span class="typed"></span></h2>
        <p>{{ Lang::get('web_dev_ser', array(), Helper::lang()) }}</p>
        <div class="web-demo">
            <!--<img src="{{asset('public/img/fb_banner.png')}}" alt="banner">-->
        </div>
        
        <div class="holder">
            <span class="scroll-btn">
                <a href="#more-features">
                    <span class="mouse">
                        <span>
                        </span>
                    </span>
                </a>
            </span>
            <i class="fa fa-chevron-down moreArrow moving"></i>
        </div>
        
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Our Services
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">{{ Lang::get('service', array(), Helper::lang()) }}</h3>
          <span class="section-divider"></span>
          <p class="section-description"></p>
        </div>

        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="box wow fadeInLeft">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <h4 class="title">Website Development</h4>
                        <p class="description">{{ Lang::get('web', array(), Helper::lang()) }}</p>
                    </div> 
                    <div class="col-lg-5 col-md-6">
                        <img class="service-img" src="{{asset('public/img/services/laptop.png')}}">
                    </div>
                </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12">
            <div class="box wow fadeInLeft">
                <div class="row"> 
                    <div class="col-lg-5 col-md-6">
                        <img class="service-img" src="{{asset('public/img/services/responsive.png')}}">
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <h4 class="title">What is responsive web design?</h4>
                        <p class="description">{{ Lang::get('mobile', array(), Helper::lang()) }}</p>
                    </div>
                </div>
            </div>
          </div>

          <!--<div class="col-lg-6">-->
          <!--  <div class="box wow fadeInRight">-->
          <!--    <div class="icon"><i class="fas fa-pen"></i></div>-->
          <!--    <h4 class="title">Graphic Design</h4>-->
          <!--    <p class="description">You want your company to make a great first impression. The use of logos, pictures and design can help create a professional image of your company in the eyes of your audience. Your company’s branding begins with a great logo then expands to every aspect of your business communications, be it stationery, presentation templates, brochures, ads, websites or video.</p>-->
          <!--  </div>-->
          <!--</div>-->

        </div>
      </div>
    </section><!-- #Our services -->

    <!--==========================
      Faq Section
    ============================-->
    <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Frequently Asked Questions</h3>
          <span class="section-divider"></span>
          <!--<p class="section-description"></p>-->
        </div>

        <ul id="faq-list" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1" aria-expanded="false">{{ Lang::get('faq1_title', array(), Helper::lang()) }} <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list" style="">
              <p>{{ Lang::get('faq1_content', array(), Helper::lang()) }}</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">{{ Lang::get('faq2_title', array(), Helper::lang()) }} <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>{{ Lang::get('faq2_content', array(), Helper::lang()) }}</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">{{ Lang::get('faq3_title', array(), Helper::lang()) }} <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>{{ Lang::get('faq3_content', array(), Helper::lang()) }}</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">{{ Lang::get('faq4_title', array(), Helper::lang()) }} <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>{{ Lang::get('faq4_content', array(), Helper::lang()) }}</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">{{ Lang::get('faq5_title', array(), Helper::lang()) }} <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>{{ Lang::get('faq5_content', array(), Helper::lang()) }}</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">{{ Lang::get('faq6_title', array(), Helper::lang()) }} <i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>{{ Lang::get('faq6_content', array(), Helper::lang()) }}</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq7" class="collapsed">{{ Lang::get('faq7_title', array(), Helper::lang()) }} <i class="ion-android-remove"></i></a>
            <div id="faq7" class="collapse" data-parent="#faq-list">
              <p>{!! nl2br(e(Lang::get('faq7_content', array(), Helper::lang()))) !!}</p>
            </div>
          </li>

        </ul>

      </div>
    </section>

    <!--==========================
      Package Section
    ============================-->
    <section id="package" class="section-bg">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Packages</h3>
            </div>
            
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="true">Service Fee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="maintain-tab" data-toggle="tab" href="#maintain" role="tab" aria-controls="maintain" aria-selected="false">Maintenance Fee</a>
                </li>
            </ul>
            <div class="tab-content">
                
                <!--Service-->
                <div class="tab-pane fade show active" id="service" role="tabpanel" aria-labelledby="service-tab">
                    <div class="sub-section-header">
                        <p>{{ Lang::get('web_fees', array(), Helper::lang()) }}</p>
                    </div>
          
                    <div class="row">
          
                        <div class="col-lg-4 col-md-6">
                            <div class="box featured wow fadeInLeft">
                                <h4>{{ Lang::get('plan_s', array(), Helper::lang()) }}</h4>
                                <p class="package-price">500,000<sup> MMK</sup></p>
                                <ul>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_s_p', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_s_u', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_s', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_l', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_d', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_cd', array(), Helper::lang()) }}</li>
                                </ul>
                                <a href="{{ url('/contact') }}" target="_blank" class="get-started-btn">Get Started</a>
                            </div>
                        </div>
              
                        <div class="col-lg-4 col-md-6">
                            <div class="box featured wow fadeInUp">
                                <h4>{{ Lang::get('plan_m', array(), Helper::lang()) }}</h4>
                                <p class="package-price">1000,000<sup> MMK</sup></p>
                                <ul>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_m_p', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_m_u', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_s', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_l', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_d', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('eCommerce', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_cd', array(), Helper::lang()) }}</li>
                                </ul>
                                <a href="{{ url('/contact') }}" target="_blank" class="get-started-btn">Get Started</a>
                            </div>
                        </div>
              
                        <div class="col-lg-4 col-md-6">
                            <div class="box featured wow fadeInRight">
                                <h4>{{ Lang::get('plan_l', array(), Helper::lang()) }}</h4>
                                <p class="package-price">1500,000<sup> MMK</sup></p>
                                <ul>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_l_p', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_m_u', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_l_s', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_l', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_d', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('eCommerce', array(), Helper::lang()) }}</li>
                                    <li><i class="ion-android-checkmark-circle"></i> {{ Lang::get('plan_c_cd', array(), Helper::lang()) }}</li>
                                </ul>
                                <a href="{{ url('/contact') }}" target="_blank" class="get-started-btn">Get Started</a>
                            </div>
                        </div>
          
                    </div>
                </div>
                
                <!--Maintenance-->
                <div class="tab-pane fade" id="maintain" role="tabpanel" aria-labelledby="maintain-tab">
                    
                    <div class="sub-section-header">
                        <p>{{ Lang::get('mm_fees', array(), Helper::lang()) }}</p>
                    </div>
                  
                    <table class="table table-hover table-success table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Month</th>
                                <th scope="col">Maintenance Fee</th>
                                <th scope="col">Package</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>One</td>
                                <td class="package-price">150,000<sup> MMK</sup></td>
                                <td>Small</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>One</td>
                                <td class="package-price">200,000<sup> MMK</sup></td>
                                <td>Medium</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>One</td>
                                <td class="package-price">250,000<sup> MMK</sup></td>
                                <td>Large</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                
            </div>

        </div>
    </section><!-- #package -->

    <!--==========================
             Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>{{ Lang::get('why_choose', array(), Helper::lang()) }}</h3>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">3</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2</span>
            <p>Hard Workers</p>
          </div>
  
        </div>

      </div>
    </section>
    
    <!--==========================
      Latest news
    ============================-->
    
    <section id="news" class="py-5">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Recent Blog Posts</h3>
                <span class="section-divider"></span>
            </div>
            
            <div class="row">
                @foreach($last_post as $post)
                <div class="col-lg-4 col-md-12">
                    <figure class="photo mb-0"><img src="{{ URL::to('/') }}/public/img/blog/post/{{ $post->image }}" alt="{{$post->title}}" />
                        <figcaption>
                            <h2>{{$post->title}}</h2>
                        </figcaption>
                        <a href="/blog/news/{{$post->id}}"></a>
                    </figure>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
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