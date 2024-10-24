@include('layouts.app1')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  
                  <li class="breadcrumb-item active" aria-current="page">Attendence List</li> 
                </ol>
              </nav>

              
              @if (@session()->has('error'))
                  <div class="alert alert-danger">{{session()->get('error')}}</div>    
               @endif

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
              <h3 class="mb-0">Employee list</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
<tr>
   <th scope="col" class="sort">Sr.no</th>
   <th scope="col" class="sort">Employee id</th>
                                     <th scope="col" class="sort">Employee Name</th>
                    
                    <th scope="col" class="sort">Employee Email</th>
                    <th scope="col" class="sort">Employee  url</th>

                  
                  
                  
                   
                   
                   
                    
                  </tr>
                </thead>
                <tbody class="list">

                @foreach($emplist as $key => $row)
                <tr>
                  <td>
                      <div class="d-flex align-items-center">
                        <span>{{$key+1}}</span>
                       
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span>{{$row->id}}</span>
                       
                      </div>
                    </td>
                    
             <td>
                <div class="d-flex align-items-center">
                        <span>{{$row->name}}</span>
                       
                      </div>
                      
                    </td>
                      <td>
                      <div class="d-flex align-items-center">
                        <span>{{$row->email}}</span>
                       
                      </div>
                    </td>
                    <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('comeoffice', ['id' => encrypt($row->id)]) }}">LOGIN URL</a>
                        <br>
                        <a target="_blank" href="{{ route('emp_detail', ['id' => $row->id, 'month' => date('m'), 'year' => date('Y') ]) }}"> || View Attendance</a>
                       
                      </div>
                      
                    </td>
                
                  </tr>
                 @endforeach
                  
                
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
