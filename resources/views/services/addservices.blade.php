@include('layouts.app1')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Service</li> 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">

             <a href="{{route('servicelist')}}" class="btn btn-sm btn-neutral">Service List</a>
              
          
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
              <h3 class="mb-0">Services</h3>
            </div>
            <div class="card-body">
  
    <form action="{{ route('insert') }}" method="POST" class="form" enctype="multipart/form-data">
      @csrf
 <label for="example-text-input" class="form-control-label">*Service Image</label>
      <div class="custom-file">
         <label class="custom-file-label" for="customFileLang">Image</label>
        <input type="file" class="custom-file-input" name="image" required>
       
    </div>
    
    <div class="form-group">
    <br>
        <label for="example-text-input" class="form-control-label">*Service Title</label>
        <input class="form-control" type="text" value=""name="title"required>
    </div>
    <!-- <div class="form-group">
        <label for="example-text-input" class="form-control-label">Tagline</label>
        <input class="form-control" type="text" value=""name="tagline">
    </div> -->
    
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">*Service Icon</label><br>
    <select class="form-select" aria-label="Default select example" name="icon" required>
    
  <option value="">Select Icon for Service</option>
   @foreach($icons as $icon)
  <option value="{{$icon->id}}">{{$icon->iconname}}</option>
  @endforeach
 
</select>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Link of Service Icon</label>
        <input class="form-control" type="link" value=""name="iconlink">
    </div>
  
    <!-- <div class="form-group">
        <label for="example-email-input" class="form-control-label">Heading</label>
        <input class="form-control" type="text" value="" name="heading">
    </div> -->
    <div class="form-group">
    <label class="Short-Description">*Service Short-Description for home page</label>
    <textarea name="short_des" style="width:100%" required>
</textarea>
</div>
   
    <label for="Description" class="form-control-label">Add Content For Single Page (like description,Image etc).</label>
    <textarea id="basic-example" name="description">
</textarea>

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
  <script src="https://cdn.tiny.cloud/1/tgi9wpolxeer7srtnwej7jpt8fpor2zkgdzgnsrix7b36iu2/tinymce/6/tinymce.min.js"></script>

  <script>
    tinymce.init({
  selector: 'textarea#basic-example',
  height: 500,
  plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'help', 'wordcount'
  ],
  toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});

  </script>
</body>

</html>
