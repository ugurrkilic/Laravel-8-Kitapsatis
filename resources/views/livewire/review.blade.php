<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @if (session()->has('message'))
    <div class="alert alert-success">
    {{ session('message') }}
    </div>
    @endif

<form class="reviews-form" wire:submit.prevent="store" >
@csrf
                        <div class="form-group">
                          <label for="email">Subject</label>
                          <input class="form-control" wire:model="subject" type="text" >
						  @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                          <label for="review">Review <span class="require">*</span></label>
                          <textarea class="form-control" wire:model="review" rows="8" type="text" ></textarea>
						  @error('review')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                                                <div class="input-rating">
                                                @error('rate')<span class="text-danger">{{ $message }}</span>@enderror
                                                <strong   class="text-uppercase">You Rating: </strong>
                                                
                                                <div class="stars">
                                                   <input type="radio" id="star5" wire:model="rate" value="5" /><label for="star5">5</label>
                                                   <input type="radio" id="star4" wire:model="rate" value="4" /><label for="star4">4</label>
                                                   <input type="radio" id="star3" wire:model="rate" value="3" /><label for="star3">3</label>
                                                   <input type="radio" id="star2" wire:model="rate" value="2" /><label for="star2">2</label>
                                                   <input type="radio" id="star1" wire:model="rate" value="1" /><label for="star1">1</label>
                                                </div>
                                              </div>
                                            </div>
                        <div class="padding-top-20"> 
						            @auth
                        <input type="submit" class="btn btn-success" value="Save">
                        @else
                        <a href="/login" class="btn btn-primary"> For Submit Your Review, Please Login </a>
                        @endauth                  
                        </div>
                      </form>
                      <!-- END FORM-->
</div>
