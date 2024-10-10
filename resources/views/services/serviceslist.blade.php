@include('layouts.app1')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Service list</li> 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              
              <a href="{{route('services')}}" class="btn btn-sm btn-neutral">Add Service</a>
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
              <h3 class="mb-0">Service List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">

                
                  <tr>
                  <th scope="col"></th>
                    <th scope="col" class="sort">Service Title</th>
                    <!--<th scope="col" class="sort">Tagline</th>-->
                    <th scope="col" class="sort">Service Icon</th>
                    <th scope="col" class="sort">Link of Service Icon</th>
                    <!--<th scope="col" class="sort">Heading</th>-->
                    <th scope="col">Service Short-Description for home page</th>
                    <th scope="col" class="sort">Service Image.</th>
                   
            
                  </tr>
                </thead>
                <tbody class="list">

                @foreach($servicelist as $row)
               
                  <tr>
                  <td>
                    <a href="{{ route('deleteservice', ['id' => $row->id]) }}" role="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Service record?')"><i class="fa fa-trash-alt"></i></a>
                    
                      
                    <a href="{{ route('editservice', ['id' => $row->id]) }}" role="button"  class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a> 

                    </td>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$row->title}}</span>
                        </div>
                      </div>
                    </th>
                    <!--<td class="budget">-->
                    <!--{{$row->tagline}}-->
                    
                    <!--</td>-->
                    <td>{{$row->iconname}}</td>
                    <td>{{$row->iconlink}}</td>
                  
                   
               <!--    <span>{{$row->heading}}</span>-->
                 
               <!--</td>-->
                    <td class="budget">
                    {{$row->short_des}}
                    
                    </td>
                   
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                          <img alt="" src="{{ asset('ServicesImage') }}/{{{$row->image}}}">                                                                
                        </a>
                       
                      </div>
                    </td>
                 
                    
                    @endforeach
                  </tr>
                 
                  
                
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                <span>{{$servicelist->links()}}</span>
                
                  
                
                 
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
     <br>
  
  <!-- Footer -->
  @include('layouts.footers.footer')
    </div>
  </div>
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
