@include('layouts.app1')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Blog</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog list</li> 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            <a href="" class="btn btn-sm btn-neutral">Add Blog</a>
              
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
              <h3 class="mb-0">Blog</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">

                
                  <tr>
                  <th scope="col"></th>
                    <th scope="col" class="sort">Blog Title</th>
                    <!--<th scope="col" class="sort">sub_heading</th>-->
                    <!--<th scope="col" class="sort">author</th>-->
                    <th scope="col" class="sort">Blog Date</th>
                    <!--<th scope="col">description</th>-->
                    <th scope="col" class="sort">Blog Image</th>
               
                  
                    
                  </tr>
                </thead>
                <tbody class="list">

                @foreach($bloglist as $row)
                <tr>
                <td>
                    <a href="{{ route('deleteblog', ['id' => $row->id]) }}" role="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog record?')"><i class="fa fa-trash-alt"></i></a>
                    
                      
                    <a href="{{ route('editblog', ['id' => $row->id]) }}" role="button"  class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a> 

                    </td>
                  
                    <td class="budget">
                    {{$row->title}}
                    
                    </td>
                    <!--<td class="budget">-->
                    <!--{{$row->sub_heading}}-->
                    
                    <!--</td>-->

                    <!--<td>-->
                    <!--    <span>{{$row->author}}</span>-->
                      
                    <!--</td>-->
                     <td>
                        <span>{{$row->date}}</span>
                      
                    </td>

                    <!--<td class="budget">-->
                    <!--{{substr($row->description,0,20)}}...-->
                    
                    <!--</td>-->
                   
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip">
                          <img alt="" src="{{ asset('blogmedia') }}/{{{$row->image}}}">                                                                
                        </a>
                       
                      </div>
                    </td>
                   
                       
                  
                    
                    @endforeach
                  </tr>
                 
                  
                
                </tbody>
              </table>
            </div>
        
            <!--  pagination -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                <span>{{$bloglist->links()}}</span>
                
                  
                
                 
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->
      
      <!-- Footer -->
      @include('layouts.footers.footer')
    
 
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
