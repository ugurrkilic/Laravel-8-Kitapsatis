
@extends('layouts.home')
@section('title','Contact - ' . $setting->title)
@section('content')

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6" style="background-image:url('{{asset('assets')}}/images/main/resim2.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Contact Us</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}} ">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Contact Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="wn_contact_area bg--white pt--80 pb--80">
            <div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
        					<h2 class="contact__title">Get in touch</h2>
        					<p>Her türlü soru, görüş ve öneri için bize mesaj gönderebilirsiniz.</p>
							@include('home.message')
                            <form action="{{route('sendmessage')}}" method="post">
							@csrf
                                <div class="single-contact-form space-between" >
                                    <input type="text" name="name" placeholder="Name & Surname*">
                                    
                                </div>
                                <div class="single-contact-form space-between">
                                    <input class="input" type="email" name="email" placeholder="Email*">
                                    <input class="input" type="text" name="phone" placeholder="Phone Number*">
                                </div>
                                <div class="single-contact-form">
                                    <input class="input" type="text" name="subject" placeholder="Subject*">
                                </div>
                                <div class="single-contact-form message">
                                    <textarea class="input" name="message" placeholder="Type your message here.."></textarea>
                                </div>
                               <div class="contact-btn">
                                    <button type="submit">Send Email</button>
                                </div>
                            </form>
                        </div> 
        			</div>
        			<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__address">
        					<h2 class="contact__title">Get office info.</h2>
        					{!! $setting->contact !!}
        					<div class="wn__addres__wreapper">

        						<div class="single__address">
        							<i class="icon-location-pin icons"></i>
        							<div class="content">
        								<span>address:</span>
        								<p>{{ $setting->address}}</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-phone icons"></i>
        							<div class="content">
        								<span>Phone Number:</span>
        								<p>{{ $setting->phone}}</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-envelope icons"></i>
        							<div class="content">
        								<span>Email address:</span>
        								<p>{{ $setting->smtpemail}}</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-globe icons"></i>
        							<div class="content">
        								<span>website address:</span>
        								<p>{{ $setting->smtpserver}}</p>
        							</div>
        						</div>

        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>            

@endsection
