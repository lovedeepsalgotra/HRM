@include('layouts.app1')

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Diagnostics</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Treatments/Tests</li> 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            <a href="{{route('viewdiagnostics')}}" class="btn btn-sm btn-neutral">Add Treatment/Test</a>
              
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
              <h3 class="mb-0">Treatments/Tests List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">

                
                  <tr>
                  <th scope="col"></th>
                    <th scope="col" class="sort">Name</th>
                    <th scope="col" class="sort">Type</th>
                    <th scope="col" class="sort">Title</th>
                    <th scope="col" class="sort">Description</th>
                    
                   
                   
                  </tr>
                </thead>
                <tbody class="list">

                @foreach($diagnosticlist as $row)
                <tr>
                <td>
                    <a href="deletediagnostic/{{$row->id}}" role="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Test record?')"><i class="fa fa-trash-alt"></i></a>
                    
                      
                    <a href="editdiagnostic/{{$row->id}}" role="button"  class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a> 

                    </td>
                  
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$row->name}}</span>
                        </div>
                      </div>
                    </th>
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$row->category==1 ? 'Treatment' : 'Diagnostic'}}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    {{$row->Title}}
                    
                    </td>
                    <td class="budget">
                    {{$row->Short_des}}
                    
                    </td>
                    <!--<td class="budget">-->
                    <!--{{substr($row->description,0,20)}}...-->
                    
                    <!--</td>-->
                    
                    <!--<td>-->
                    <!--  <div class="avatar-group">-->
                    <!--    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">-->
                    <!--      <img alt="" src="{{ asset('DoctorlistImage') }}/{{{$row->image}}}">                                                                -->
                    <!--    </a>-->
                       
                    <!--  </div>-->
                    <!--</td>-->

                    
                    @endforeach
                  </tr>
                 
                  
                
                </tbody>
              </table>
            </div>
        
            <!--  pagination -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                <span></span>
                
                  
                
                 
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