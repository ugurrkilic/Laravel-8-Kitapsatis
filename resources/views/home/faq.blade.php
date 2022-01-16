@extends('layouts.home')
@section('title','FAQ')
@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4" style="background-image:url('{{asset('assets')}}/images/main/resim2.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Faq</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Faq</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Faq Area -->
		<section class="wn__faq__area bg--white pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="wn__accordeion__content">
							<h2>Aşağıda sıkça sorulan sorular bulunmaktadır, cevabınızı kendiniz bulabilirsiniz.</h2>
						</div>
                        @foreach ($datalist as $rs)
						<div id="accordion" class="wn_accordion" role="tablist">
                        
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingOne">
						          	<h5>
						                <a class="collapsed" data-toggle="collapse" href="#collapseOne{{$rs->id}}" role="button" aria-expanded="true" aria-controls="collapseOne">{{$rs->question}} </a>
						          	</h5>
						        </div>
						        <div id="collapseOne{{$rs->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="card-body">{!! $rs->answer !!} </div>
						        </div>
						    </div>
                          
						</div>
                        @endforeach 
					</div> 
				</div> 
			</div> 
		</section>
		<!-- End Faq Area -->		

@endsection