 <!-- Start Slider area -->
				
 <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
			@foreach ($slider as $rs)	
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left" style="background-image:url('{{ Storage::url($rs->image) }}')">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>{{$rs->title}} </h2>
		            				<h2>{{$rs->price}}</h2>
				                   	<a class="shopbtn" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug] )}} ">shop now</a>
		            			</div>
	            			</div>
							
	            		</div>
	            	</div>
	            </div>
            </div>
			@endforeach
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->