<!-- Slider -->
	<section class="section-slide">
		
             @php
             $count=0;
             @endphp
		    
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		    	@foreach($slider as $key=>$row)
		      <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" @if($count==0){ active } @endif></li>
		      @endforeach
		      
		    </ol>
		    <div class="carousel-inner" role="listbox">
		    @foreach($slider->take(5) as $data)
		      <!-- Slide One - Set the background {{asset('/')}}frontend/image for this slide in the line below -->
		      <div class="carousel-item @if($loop->first) active @endif">

		      	<img src="{{asset('slider/'.$data->image)}}" class="d-block w-100" alt="...">
		        <div class="carousel-caption d-none d-md-block">
		          <h2 class="display-4">{{$data->title}}</h2>
		          <p class="lead">{{$data->subtitle}}</p>
		        </div>
		      </div>
		      <!-- Slide Two - Set the background {{asset('/')}}frontend/image for this slide in the line below -->
		     @php
             $count++;
             @endphp
		     @endforeach
		    </div>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		        <span class="carousel-control-next-icon" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
	        </a>
		</div>
	</section>