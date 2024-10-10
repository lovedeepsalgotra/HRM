@extends('layouts.frontend')

@section('content')

<section class="treatment-banner">
    <div class="container">
        <div class="treat-banner-con">
            <h2>Our Packages</h2>
        </div>
    </div>
</section>
<section class="package-box mt-5 mb-5">
<div class="col-md-12 text-center">
    <h2 class="main_title" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">Our Packages</h2>
    </div>
            <div class="dro-package">
            <h3>
                     <div class="hospitalselect"> 
    <form action="" method="get" onchange="this.submit();">
    <select name="category" id="options" class="packageHospitals">


        @foreach ($category as $categorys)

        <option {{ ($categorys->id==$categoryid) ? 'selected' : ''; }}  value="{{$categorys->id}}">{{$categorys->category_name}}</option>
    
        @endforeach
    </select>
</form>
    <span class="caret"></span>
</div>   
            </h3>
        </div>
    <div class="container">



        <div class="abc" id="1" style="display: block">
            <div class="row">
               
                @foreach($Packages as $package)
                
               
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="pac-box" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                        <h2 title="Basic Health Screening"><span>{{$package->title}} </span></h2>
                    <div class="row">
                            <div class="col-lg-6">
                                   <p><b>Price:</b> ₹{{$package->price}}</p>
                            </div>
                             <div class="col-lg-6">
                               <a class="rd cls-sticky-health_packages appoint"  data-bs-toggle="modal" data-bs-target="#exampleModal">Book now </a>  
                            </div>
                            
                        </div>
                        <ul>
                            
                            
                          @foreach($package->subtitles as $subtitle)
                          
                           
                           
                            <li><b>{{$subtitle['subtitle']->subtitle}}</b></li>
                               
       
                            @foreach($subtitle['tests'] as $test)
                         
                                <li>{{$test->test_name}} </li>
                                
                            @endforeach
                                                                                                                        
                           @endforeach
                          
                        </ul>
                        <div class="clr"></div>
                    </div>
                </div>
               
          
         @endforeach
            
               
       
          
            </div>
        </div>
       
             
        
        
     
 
        </div>
</section>

<script>
    document.getElementById('options').onchange = function() {
    var i = 1;
    var myDiv = document.getElementById(i);
    while(myDiv) {
        myDiv.style.display = 'none';
        myDiv = document.getElementById(++i);
    }
    document.getElementById(this.value).style.display = 'block';
};

</script>

@endsection