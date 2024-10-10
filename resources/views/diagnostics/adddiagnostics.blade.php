@include('layouts.app1')
<style>
    .add_item_btn, .remove_item_btn{
        padding: 1px 10px;
        margin: -19px 5px 5px 5px;
    }
    .module label{
        color: #fff!important;
    }
    .testblock{
        margin-bottom: 15px;
    }
</style>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
           
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Treatments/Tests</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Treatment/Test</li> 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              
              <a href="{{ route('diagnosticlist') }}" class="btn btn-sm btn-neutral">Treatments/Tests list</a>
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
              <h3 class="mb-0">Details</h3>
            </div>
            <div class="card-body">
  
    <form action="{{route('adddiagnostics')}}" method="POST" class="form" enctype="multipart/form-data">
      @csrf

       <!--<div class="custom-file">-->
       <!--  <label class="custom-file-label" for="customFileLang">Image</label>-->
       <!-- <input type="file" class="custom-file-input" name="img">-->
       <!--</div>-->
                <div class="form-group">
    
        <label for="example-text-input" class="form-control-label">Type*</label>
       <select class="form-control" name="test_type" required>
           <option value="">Select</option>
           <option value="1">Treatment</option>
           <option value="2">Diagnostic</option>
       </select>
    </div>
         <div class="form-group">
    
        <label for="example-text-input" class="form-control-label">Name*</label>
        <input class="form-control" type="text" maxlength="700" value=""name="name" required>
    </div>
    <div class="form-group">
    
        <label for="example-text-input" class="form-control-label">Title*</label>
        <input class="form-control" type="text" maxlength="300" value=""name="Title" required>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Description*</label>
        <textarea class="form-control" maxlength="200" name="Short_des" required></textarea>
    </div>
    
  
 



<input type="hidden" id="count_value"name="subtitle_count" value="1">
<div class="module" style="background: #eee; padding 1px">
<div class="submodule p-3 m-3" style="background-color:grey ">

<div style="border: 1px solid #fff; padding: 10px; border-radius: 5px">    
    <h3 style="color: #fff">Type of Treatment/Test</h3>
    <div class="form-group" id="showsubtitle">
        <label for="description" class="form-control-label">Name*</label>
        <input class="form-control" value="" maxlength="200" name="diagnostics[subtitle1][name]" required>
       
        
    
    </div>
    <div class="form-group">
            <label for="example-text-input" class="form-control-label">image*</label>
            <input class="form-control" type="file" value=""name="diagnostics[subtitle1][image]" required>
    </div>
     <div class="form-group">
        <label for="example-text-input" class="form-control-label">Description*</label>
        
        <textarea class="form-control" maxlength="700" name="diagnostics[subtitle1][description]" required></textarea>
    </div>
    
    
    <div class="tests">
       <input type="hidden" value="1" class="test_count">
        <div class="testblock" style="background: #bbbbbb; padding: 10px; border-radius: 5px">
             <h3 style="color : #333">Test #</h3>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Name </label>
                <input class="form-control" value="" id="testname" maxlength="200" name="diagnostics[subtitle1][tests][test1][name]">
    
            </div>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Price </label>
                <input class="form-control" value="" id="testname" maxlength="200" name="diagnostics[subtitle1][tests][test1][price]">
    
            </div>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Pointers </label>
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle1][tests][test1][pointers][]">
    
            </div>
            <button type="button" class="btn btn-primary add_item_btn float-right">+</button>
        </div>
          
    </div>
</div>


</div>

    </div>
 <button type="button" class="btn btn-primary add_subtitle_btn float-right">Add diagnostics Subtitle</button>
 <button type="button" class="btn btn-danger remove_subtitle_btn float-right">Remove diagnostics Subtitle</button>
<input type="submit" name="submit">
</form>
<br>
            </div>
          </div>
        </div>
      </div>
    
  
      <!-- Footer -->
      @include('layouts.footers.footer')
   <script>
       
$(document).ready(function(){
    
    
    
    
    
    $(".add_subtitle_btn").click(function(e){
        
        var count=$('#count_value').val();
        
       count= parseInt(count)+1;
     
     $('#count_value').val(count);
        
        e.preventDefault();
        $(".module").append(`<div class="submodule p-3 m-3" style="background-color:grey ">

<div style="border: 1px solid #fff; padding: 10px; border-radius: 5px">    
    <h3 style="color: #fff">Type of Treatment/Test</h3>
    <div class="form-group" id="showsubtitle">
        <label for="description" class="form-control-label">Name*</label>
        <input class="form-control" value="" maxlength="200" name="diagnostics[subtitle${count}][name]" required>
       
        
    
    </div>
    <div class="form-group">
            <label for="example-text-input" class="form-control-label">image*</label>
            <input class="form-control" type="file" value=""name="diagnostics[subtitle${count}][image]" required>
    </div>
     <div class="form-group">
        <label for="example-text-input" class="form-control-label">Description*</label>
       
        <textarea class="form-control" maxlength="700" name="diagnostics[subtitle${count}][description]" required></textarea>
    </div>
    
    
    <div class="tests">
       <input type="hidden" value="1" class="test_count">
        <div class="testblock" style="background: #bbbbbb; padding: 10px; border-radius: 5px">
             <h3 style="color : #333">Test #</h3>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Name </label>
                <input class="form-control" value="" id="testname" maxlength="200" name="diagnostics[subtitle${count}][tests][test1][name]">
    
            </div>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Price </label>
                <input class="form-control" value="" id="testname" maxlength="200" name="diagnostics[subtitle${count}][tests][test1][price]">
    
            </div>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Pointers </label>
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${count}][tests][test1][pointers][]">
    
            </div>
            <button type="button" class="btn btn-primary add_item_btn float-right">+</button>
        </div>
          
    </div>
</div>


</div>`)
    });
    
    $(document).on('click','.remove_subtitle_btn',function(e){
        
        e.preventDefault();
        
        var row_item=$('.submodule').last();
        
        row_item.remove();
    })

    
    
    $("body").on("click",".add_item_btn", function(e){
       
     
        var target = $(this).closest('.submodule').find('.tests');
        var name = target.find('input').attr('name');
        
        var count_element = $(this).closest('.tests').find('.test_count');
      
        var updated_count = count_element.val(parseInt(count_element.val())+1);
        var new_count = count_element.val();
        
        var subtitle_count = $("#count_value").val();
       
   
        e.preventDefault();
    
        e.preventDefault();
    
        
        target.append(` <div class="testblock" style="background: #bbbbbb; padding: 10px; border-radius: 5px">
             <h3 style="color : #333">Test #</h3>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Name </label>
                <input class="form-control" value="" id="testname" maxlength="200" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][name]">
    
            </div>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Price </label>
                <input class="form-control" value="" id="testname" maxlength="200" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][price]">
    
            </div>
            <div class="form-group"id="show_item">
                <label for="description" class="form-control-label">Pointers </label>
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="200" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
                <input class="form-control" value="" id="testname" maxlength="700" name="diagnostics[subtitle${subtitle_count}][tests][test${new_count}][pointers][]">
    
            </div>
            <button type="button" class="btn btn-primary add_item_btn float-right">+</button>
            <button type="button" class="btn btn-danger remove_item_btn float-right">-</button>
        </div>
        `)
    });
    
    $(document).on('click','.remove_item_btn',function(e){
        
        e.preventDefault();
        var row_item=$(this).closest('.testblock');
        
        row_item.remove();
    })
})

           
           
   </script>
  
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
