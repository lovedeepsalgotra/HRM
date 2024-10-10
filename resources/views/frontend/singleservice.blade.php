@extends('layouts.frontend')

@section('content')

<!-- ======= Singleservice section ======= -->
<section class="service-banner mb-5">
    <div class="container">
        <div class="service-banner-con">
            <h2>{{$getdata->title}} </h2>
        </div>
    </div>
</section>
<div class="service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- <div class="single-image"></div> -->
                <div class="ser-cont">
                     <img src="{{ asset('ServicesImage') }}/{{$getdata->image}}" alt="" width="100%" /> 
                    <h3>{{$getdata->title}}</h3>
                    <p> {!!$getdata->description !!}</p>
                   
                     
            
                    <div class="cont-list-single margin-top-20"></div>
                </div>
                <div class="form-sec ">
                    <!-- <h2>Ask a Question</h2> -->
                    <div class="row">
                        <div class="">
                        <!-- <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Full Name"/>
                                    
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                    
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                            <div class="single-page-button pt-4">
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </form> -->
                        </div>
                    </div>
                </div>
            
            </div>

            <!-- ser-sidebar -->
            <div class="col-lg-3">
                <div class="ser-sidebar">
                    <!-- ser-list  -->
                    <div class="ser-bar ser-list">
                        <h4>Services List</h4>
                        <ul class="list p-0">
                            @foreach ($getalldata as $singleservicepage)
                            <li><a class="<?php if(isset($pagename) && $pagename == $singleservicepage->id){echo 'active2';}?>" href="{{ route('singlepage', ['id' => $singleservicepage->id]) }}">{{$singleservicepage->title}}</a></li>
                          @endforeach
                    
                        
                          
                            <li><a href="{{route('covid')}}">Covid</a></li>
                             <li><a href="{{route('diagnosticstest')}}">Medical Tourism</a></li>
                              <li><a href="{{route('doctors')}}">Dr. Oncall (TeleConsultation)</a></li>
                               <li><a href="{{route('frontpackage')}}">Health Check-ups</a></li>
                                <li><a href="{{route('corporatewellness')}}">Corporate Wellness</a></li>
                       </ul>
                    </div>

                    <!-- wrk-hr -->
                    <div class="ser-bar wrk-hr">
                        <h4 class="margin-bottom-20">Working Hours</h4>
                        <p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                        <div class="wrk-list-single">
                          
                            <ul class="single-list">
                                <li class="title">monday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">tuesday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">wednesday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">thursday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">friday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">saturday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">sunday</li>
                                <li class="amount">closed</li>
                            </ul>
                              
                        </div>
                    </div>

                    <!-- help-line -->
                    <!-- <div class="ser-bar help-line">
                        <span class="icon margin-bottom-10"><i class="fas fa-user-md"></i></span>
                        <h3 class="margin-bottom-10">Online Help 24/7</h3>
                        <h4>+(123) 456-78-90</h4>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
