@extends('layouts.sub-app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('public/filter-tel/css/intlTelInput.css') }}">

<style>
	#error-msg {
		color: #EA4335;
	}
	#valid-msg {
		color: #34A853;
	}
	.hide {
	    display: none;
	}
</style>

<main id="main">
          
    <!--==========================
      Contact us
    ============================-->
    <div class="section-bg">

        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-2 col-md-12"></div>
                
                <div class="col-lg-7 col-md-12">
                            
                    <div class="form">
    			    
    			        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        
                        <form  method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name">
                            </div>
                            @error('name')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        	
                            <div class="form-group">
                                <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email">
                            </div>
                            @error('email')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        	
                            <div class="form-group">
                                <input type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{old('tel')}}" id="phone">
                        		<span id="valid-msg" class="hide">✓ Valid</span>
                        		<span id="error-msg" class="hide"></span>
                            </div>
                            @error('tel')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        	
                            <div class="form-group">
                        			<select class="form-control" name="contacts_categorys_id">
                        			    @foreach($contacts_categorys as $contacts_category)
                        			      <option value="{{$contacts_category->id}}">{{ $contacts_category->package }}</option>
                        			    @endforeach
                        		  	</select>
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Message">{{old('message')}}</textarea>
                            </div>
                            @error('message')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        	
                            <div class="form-group">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                            @error('g-recaptcha-response')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        	
                        	<div class="form-group">
                                <button class="btn btn-success" type="submit" title="Send Message">Send</button>
                            </div>
                        </form>
                    
                    </div>
                            
                </div>
                
            </div>
            
        </div>
        
    </div>

    <!--==========================
      Our Team Section
    ============================-->
    
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Our Team</h3>
                <span class="section-divider"></span>
                <p class="section-description"></p>
            </div>
        
        <div class="row">
            
            <div class="col-lg-3 col-md-6">
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="member">
                    <img src="{{asset('public/img/team/owner_one.png')}}" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Mr.Nay</h4>
                            <span>Owner</span>
                            <div class="social">
                                <a href="viber://chat?number=09766033123"><i class="fab fa-viber"></i></a>
                                <a href="https://www.facebook.com/ForW3b/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="tel:09766033123"><i class="ion-ios-telephone-outline"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="member">
                    <img src="{{asset('public/img/team/team_bg.png')}}" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Coming Soon</h4>
                            <span>coming soon</span>
                            <div class="social">
                                <a href="viber://chat?number=09766033123"><i class="fab fa-viber"></i></a>
                                <a href="https://www.facebook.com/ForW3b/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="tel:09766033123"><i class="ion-ios-telephone-outline"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
            </div>
        
        </div>
        
        </div>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ asset('public/filter-tel/js/intlTelInput.js') }}"></script>
	
	<script>
		var input = document.querySelector("#phone"),
	    errorMsg = document.querySelector("#error-msg"),
	    validMsg = document.querySelector("#valid-msg");

		// Error messages based on the code returned from getValidationError
		var errorMap = [ "Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

		// Initialise plugin
		var intl = window.intlTelInput(input, {
		    utilsScript: "{{ asset('public/filter-tel/js/utils.js') }}"
		});

		var reset = function() {
		    input.classList.remove("error");
		    errorMsg.innerHTML = "";
		    errorMsg.classList.add("hide");
		    validMsg.classList.add("hide");
		};

		// Validate on blur event
		input.addEventListener('blur', function() {
		    reset();
		    if(input.value.trim()){
		        if(intl.isValidNumber()){
		            validMsg.classList.remove("hide");
		        }else{
		            input.classList.add("error");
		            var errorCode = intl.getValidationError();
		            errorMsg.innerHTML = errorMap[errorCode];
		            errorMsg.classList.remove("hide");
		        }
		    }
		});

		// Reset on keyup/change event
		input.addEventListener('change', reset);
		input.addEventListener('keyup', reset);
	</script>
	
</main>
@endsection