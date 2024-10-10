@extends('layouts.frontend')

@section('content')
<style>
    .cro-img a{
        height: 21px;
        margin: 0px auto;
    }
</style>
    <section class="treatment-banner">
        <div class="container">
            <div class="treat-banner-con">
                <h2>Diagnostics Test</h2> </div>
        </div>
    </section>
    <!-- Caption -->
    <!-- The "vtabs" class establishes a scope -->
    <section class="treatment-box mt-5">
        <div class="col-md-12 text-center">
            <h2 data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000"></h2> </div>
        <div class="container vtabs">
            <div class="row">
                <!-- Tabs -->
                <div class="col-md-3">
                    <ul class="nav nav-tabs left-tabs" role="tablist">
                        <div class="all-tre text-center pt-3">
                            <h5>All Test</h5> </div>
                            
                            @foreach($diagnostics as $key => $diagnostic)
                        <li class="nav-item" role="presentation">
                            <div id="lorem-left-tab" class="nav-link tab-clickable {{ ($key==0) ? 'active' : '' }}" role="tab" data-bs-toggle="tab" data-bs-target="#sl{{ $diagnostic->id }}" aria-controls="sl{{ $diagnostic->id }}" aria-selected="{{ ($key==0) ? true : false }}">{{ $diagnostic->name }}</div>
                        </li>
                        @endforeach
                    
                       
                    </ul>
                </div>
                <!-- Tab contents -->
                <div class="col-md-9">
                    <div class="container">
                        <div id="accordion-left-tabs" class="tab-content accordion p-0">
                            @foreach($diagnostics as $key => $diagnostic)
                                <div id="sl{{ $diagnostic->id }}" class="tab-pane fade show {{ ($key==0) ? 'active' : '' }} accordion-item" role="tabpanel">
                                <div class="accordion-header" role="tab">
                                    <button class="accordion-button collapsed mobile-aco" type="button" role="button" data-bs-toggle="collapse" data-bs-target="#lorem-left-article" aria-expanded="true" aria-controls="lorem-left-article"> {{$diagnostic->Title}} </button>
                                </div>
                                <article id="lorem-left-article" class="accordion-body accordion-collapse collapse p-0" data-bs-parent="#accordion-left-tabs" aria-labelledby="lorem-left-tab">
                                    <div class="trea-box">
                                        <div class="text-center">
                                            <h2 class="main_title" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">{{ $diagnostic->Title }}</h2>
                                            <p>{{ $diagnostic->Short_des }}</p>
                                        </div>
                                        @foreach($diagnostic->subtitles as $subtitle)
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed acor-buton" type="button" data-bs-toggle="collapse" data-bs-target="#subtitle{{ $subtitle['subtitle']->id }}" aria-expanded="false" aria-controls="collapseTwo">
                                                {{ $subtitle['subtitle']->subtitle }} 
                                                </button>
                                            </h2>
                                                <div id="subtitle{{ $subtitle['subtitle']->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="aco"> <img src="{{asset('Diagnostics')}}/{{$subtitle['subtitle']->image}}" /> </div>
                                                        <div class="aco-img">
                                                            <!-- <h6 class="text-center role pt-3"><b class="pric">Price:</b> ₹13900</h6> -->
                                       <p class="text-center">{{$subtitle['subtitle']->description}}</p>
                                                        </div>
                                     <div class="row">

                                        @foreach($subtitle['tests'] as $test)
                                         @if(trim($test->test_item)!="" && trim($test->Price)!="")
                                         <div class="col-lg-6">
                                           <div class="aco-boxs">
                                           <h6>{{ $test->test_item }}</h6>
                                           <p><b>Price:</b> ₹{{ $test->Price }}</p>
                                            </div>
                                             </div>
                                                
                                                 @php $pointers = explode('||',$test->pointers); @endphp



                                   @else
                                    <div class="col-lg-6">
                                           <div class="aco-boxs">
                                            <h6>{{ $test->test_item }}</h6>
                                            <div class="sli-text">
                                                <div class="row">
                                            <!--   <ul class="sli-text" style="list-style-type: square"> -->
                                       

                                        @if(trim($test->pointers)!="")
@php $pointer = explode('||',$test->pointers); @endphp

 @foreach($pointer as $pointers)
                                        @if(trim($pointers)!="")



                                        <div class="col-lg-12"> {{$pointers}}</div>
                                     
                                           
                                            @endif
                                            @endforeach
                                           @endif
                                     
                                    </div>
                                </div>
                                    <!--       </ul> -->
                                      
                                        </div>
                                             </div> 
                                  
                                    @endif

                                                  @endforeach
                                                            
                                                        </div>

                                                        <div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                
                                        
                                        </div>
                                        @endforeach
                                    </div>
                                </article>
                            </div>
                            @endforeach
                       
                            <div class="ellipsis"></div>
                            </button>
                        </div>
                        <!-- <article id="llanfairpwllgwyngyll-left-article" class="accordion-body accordion-collapse collapse" data-bs-parent="#accordion-left-tabs" aria-labelledby="llanfairpwllgwyngyll-left-tab">
                                test
                            </article> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section class="dig-slider mt-5">
        <div class="container">
            <div class="dig-test-head pt-3">
                <h2 class="main_title" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">Recommended Tests</h2> </div>
            <div class="row">
                <div class="MultiCarousel" data-items="1,3,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="MultiCarousel-inner">
                        
                        @foreach($diagnostic_tests as $test)
                
                        <div class="item">
                            <div class="card2">
                                <div class="cro-img">
                                    <h6 style="height: 35px">{{ $test->test_item }}</h6>
                                    <img src="{{asset('Diagnostics')}}/{{$test->image}}">
                                    @php $pointers = explode('||',$test->pointers); @endphp



                                    @if($test->price==null)
                                    <ul class="sli-text p-0" >
                                        @foreach($pointers as $pointer)
                                        @if(trim($pointer)!="")

										<li>
											<div class="dig-list"> <i class="fas fa-check-circle"></i>
												<p>{{$pointer}}</p>
											</div>
										</li>
										@endif
										@endforeach
									</ul>
                                    @endif

                                    <div class="dig-price" style="height:50px">
                             
                                        <p data-toggle="tooltip" data-placement="top" title="{{ $test->Price }}">
                                            @if(trim($test->Price)!="")
                                            <b>Price:</b> ₹{{ substr($test->Price,0,20) }}..
                                           @endif
                                        </p>
                                           


                                            <div class="appoint" data-bs-toggle="modal" data-bs-target="#exampleModal"> <a href="#">Book</a> </div></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="appo-form">
          <div class="appoin-text text-center pb-3">
          <h5>Make an Appointment</h5>
          </div>
        <form action="{{route('insertappointment')}}" method="POST" class="form" enctype="multipart/form-data">
            @csrf

          <div class="row">
            <div class="col-6">
            <div class="mb-3">
  
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required> 
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3">

    <input type="text"  name="lastname" class="form-control" id="exampleInputPassword1" placeholder="Last Name" required>
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3">
           
    <input type="date"  name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Appoi" required>
    
  </div>
            </div>
            <div class="col-6">
            <div class="mb-3">

    <input type="time"  name="time" class="form-control" id="exampleInputPassword1" required>
  </div>
            </div>
          
          
            <div class="mb-3">

    <input type="number"  name="mobileno" class="form-control" id="exampleInputPassword1" placeholder="Mobile" required>
  </div>
            
            <div class="mb-3">
    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" required>
  </div>
  <div class="mb-3">
  <textarea class="form-control"  name="message2" placeholder="Message" id="floatingTextarea2" style="height: 100px" required></textarea>
</div>
           
            
          </div>
          <div class="text-center">
          <button type="submit" class="">Submit</button>
          </div>

</form>
        </div>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
     
    </div>
  </div>
</div>

                    </div>
                    <button class="btn cr-btn leftLst"><i class="fas fa-chevron-left"></i></button>
                    <button class="btn cr-btn rightLst"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function() {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";
        $('.leftLst, .rightLst').click(function() {
            var condition = $(this).hasClass("leftLst");
            if(condition) click(0, this);
            else click(1, this)
        });
        ResCarouselSize();
        $(window).resize(function() {
            ResCarouselSize();
        });
        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function() {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);
                if(bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                } else if(bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                } else if(bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                } else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({
                    'transform': 'translateX(0px)',
                    'width': itemWidth * itemNumbers
                });
                $(this).find(itemClass).each(function() {
                    $(this).outerWidth(itemWidth);
                });
                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");
            });
        }
        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if(e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");
                if(translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            } else if(e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");
                if(translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }
        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }
    });
    </script>
@endsection
