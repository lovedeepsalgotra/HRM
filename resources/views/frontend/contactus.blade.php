@extends('layouts.frontend')

@section('content')



 <!-- ======= Contact section ======= -->

 <section class="contact-banner">

    <div class="container">

        <div class="con-banner-con">

            <h2>Contact Us</h2>

        </div>

    </div>

 </section>

 <section class="mt-5">

    <div class="container">

    <div class="row">

            <div class="col-md-5">

                <div class="sec-title">

                    <!-- <h3>Contact Info.</h3> -->

                    <h2>Connect With Us</h2>

                    <h3>Contact Info.</h3>



                </div>

                <div class="info-box">

                    <h3>Information</h3>

                    <ul>

                        <li>

                            <span> <i class="fa fa-phone-alt"></i></span>

                            <p><a href="tel:+91 9004525953">{{$contactus->phoneno}}</a></p>

        

                        </li>

                        <li>

                            <span><i class="fa fa-envelope"></i></span>

                            <p><a href="#" class="email">{{$contactus->email}}</a></p>

                        </li>

                        <li>

                            <span> <i class="fa fa-map-marker-alt"></i></span>

                            <p>{{$contactus->address}}</p>

        

                        </li>

                        <li>

                            <span><i class="fas fa-keyboard"></i></span>

                            <p>CIN: {{$contactus->cin}}</p>

                        </li>

                        

                    </ul><br>

                    <h3>Connect With Us</h3>

                    <div class="cont-social-link">

                        <a href="{{$contactus->facebook}}"><span><i class="fab fa-facebook-f"></i></span></a>

                        <a href="{{$contactus->instagram}}"><span><i class="fab fa-instagram"></i></span></a>

                        <a href="{{$contactus->linkedin}}"><span><i class="fab fa-linkedin-in"></i></span></a>

                    



                    </div>



                </div>





            </div>

            <div class="col-md-6">

                <div class="sec-title mt-5 mt-md-0">

                    <!-- <h3>Drop Us A Line</h3> -->

                    <h2>We’d Love To Hear From You</h2>

                    <h3>Drop Us A Line</h3>

</div>

            <div class="form-box">

             <form action="{{route('sendbasicemail')}}" method="POST" class="form" enctype="multipart/form-data">
                  @csrf
                <div class="row">

                    <div class="col-md-6">

                    <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Your Name *</label>

    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>



  </div>

                    </div>

                    <div class="col-md-6">

                    <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Your Email *</label>

    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>



  </div>

                    </div>



                </div>

 

  <div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">Subject *</label>

    <input type="text" name="subject"class="form-control" id="exampleInputPassword1" required>

  </div>



  <div class="mb-3">

  <label for="exampleInputPassword1" class="form-label">Message *</label>
 <!--  <input type="textarea" name="message1" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
 -->
  <textarea class="form-control" type="text" name="message1" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>

</div>

<div class="contact-button">

<button type="submit" class="con-btn">Send Us</button>

</div>



</form>

            </div>

            </div>



            </div>



        </div>



    </div>

 </section>

<div class="mt-5" id="map-perfector">



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.897721006556!2d72.82348212695312!3d18.9801239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce677e104fd5%3A0x583cb13f615a6d55!2sModel%20Residency!5e0!3m2!1sen!2sin!4v1662634780813!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

@endsection
