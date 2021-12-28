@extends('layouts.home')
@section('title','References - ' . $setting->title)
@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">References</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('home')}} ">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">References</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- End Bradcaump area -->
        <!-- End Bradcaump area -->
		<section class="wn__faq__area bg--white pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="wn__accordeion__content">
							{!! $setting->references !!}
						</div>
					</div> 
				</div> 
			</div> 
		</section>
		<!-- End Faq Area -->		

@endsection