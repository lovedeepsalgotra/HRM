@include('layouts.app1')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Testimonial</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Testimonial</li> 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">

             <a href="{{route('testimoniallist')}}" class="btn btn-sm btn-neutral">Testimonial List</a>
              
          
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Testimonial</h3>
            </div>
            <div class="card-body">
  
    <form action="{{ route('inserttestimonial') }}" method="POST" class="form" enctype="multipart/form-data">
      @csrf

    
    
    <div class="form-group">
    <br>
        
        <label for="Description" class="form-control-label">Testimonial Description</label>
        <input class="form-control" type="text" value=""name="tesdescription">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Testimonial Author-Name</label>
        <input class="form-control" type="text" value=""name="authorname">
</div>

<input type="submit" name="submit">
</form>
    <br>
    </div>
  </div>
  </div>
  </div>
  
      <!-- Footer -->
      @include('layouts.footers.footer')
   
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
    <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/6/tinymce.min.js"></script>


  
</body>

</html>
