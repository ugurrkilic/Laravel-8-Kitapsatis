@extends('layouts.home')
@section('title','About Us - ' . $setting->title)
@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4"style="background-image:url('{{asset('assets')}}/images/main/resim2.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">About Us</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}} ">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">About Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<section class="wn__faq__area bg--white pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="wn__accordeion__content">
							{!! $setting->aboutus !!}
						</div>
					</div> 
				</div> 
			</div> 
		</section>
		<!-- End Faq Area -->		

@endsection