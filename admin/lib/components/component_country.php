<?php 


function HeaderCountry(){
$str = '       

      
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add Country '. flash("Country").'</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                      
                        
                    </div>
                        <div class="mt-2 mb-2">
                           
                            <form class="row row-cols-lg-auto gx-3 gy-2 align-items-center" method="post" action="country.php">
                            <input type="hidden" class="form-control" id="action" name="action" value="add">
                                <div class="col-12">
                                  <label class="visually-hidden" for="country">Name</label>
                                  <input type="text" class="form-control" id="country" name="country" placeholder="Enter Name">
                                </div>
                                <div class="col-12">
                                            <label class="visually-hidden" for="status">Select</label>
                                            <div class="col-md-10">
                                                <select class="form-select"  name="status">
                                                    <option values="1">Active</option>
                                                    <option values="0">Deactive</option>
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
        </div>
     
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


</div>
';
    return $str;
}
function actionmsg(){
    $str = '<div class="alert [CLSSMSG] alert-dismissible fade show" role="alert">
    <i class="mdi mdi-check-all me-2"></i>
    [ACTIONMSG]
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    return $str;
}
?>