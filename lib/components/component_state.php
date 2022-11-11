<?php 
// include 'lib/helpers/session_helper.php';

function stateForm(){
$str = '       

      
        <!-- end row -->
        [MESSDATA]
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addStateModal"><i class="mdi mdi-plus me-1"></i> Add State</button>

                    </div>
                
                   
                </div>
            </div>
        </div>

        <div class="modal fade" id="addStateModal" tabindex="-1" aria-labelledby="addStateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStateModalLabel">Add State</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
               
                           
                <form class="row row-cols-lg-auto gx-3 gy-2 align-items-center" method="post" action="state.php">
                <input type="hidden" class="form-control" id="action" name="action" value="add">
                <div class="col-12">
                                <label class="visually-hidden" for="country_id">Select</label>
                                <div class="col-md-10">
                                    <select class="form-select"  name="country_id">
                                        <option value="">Sekect Country</option>
                                        [COUNTRYLIST]
                                    </select>
                                </div>
                            </div>
                    <div class="col-12">
                      <label class="visually-hidden" for="state">Name</label>
                      <input type="text" class="form-control" id="state" name="state" placeholder="Enter Name">
                    </div>
                    <div class="col-12">
                                <label class="visually-hidden" for="status">Select</label>
                                <div class="col-md-10">
                                    <select class="form-select"  name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                            </div>
                    
                    
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            
                </div>
            </div>
        </div>
    </div>
     

';
    return $str;
}


function stateList(){
    $str= '<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Country </h4>
         
            </div>
            <div class="card-body">
                
              
            <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Contry</th>
                    <th>State</th>
                    <th>Status</th>
                    <th>Action </th>
                    
                </tr>
            </thead>
            <tbody>
          
        [STATE_LIST]
        
                
            </tbody>
            <tfoot>
            <tr>
            <th>#</th>
            <th>Contry</th>
            <th>State</th>  
            <th>Status</th>
            <th>Action</th>
            
        </tr>
            </tfoot>
        </table>
            </div>
               
                
            </div>
        </div>
    </div>
</div>';
return $str;
}
?>
