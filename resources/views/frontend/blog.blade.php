@extends('layouts.frontend')

@section('content')
<!-- ======= Treatments section ======= -->
<section class="treatment-banner">
    <div class="container">
        <div class="treat-banner-con">
            <h2>Blogs</h2>
        </div>
    </div>
 </section>
<!-- ======= Blog banner section ======= -->

<section class="mt-5">
    <div class="container">
        <div class="blog-text text-center pb-4"  data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
            <p>Recent Articles</p>
            <h2 >Our latest Onsite Activities & Events</h2>

        </div>
        
    </div>
</section>
 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">

        <div class="row gy-4 posts-list">
            
            @foreach ($blog as $blogs)

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('blogmedia') }}/{{{$blogs->image}}}" class="img-fluid" alt="">
                <span class="post-date">{{$blogs->date}}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{$blogs->title}}</h3>



              </div>

            </div>
          </div><!-- End post list item -->

     @endforeach
          <!-- End post list item -->

        </div><!-- End blog posts list -->

           <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-center mb-0  blogpagination">
                <span>{{$blog->links()}}</span>
                
                  
                
                 
                </ul>
              </nav>
            </div>

      

      </div>
    </section><!-- End Blog Section -->
@endsection