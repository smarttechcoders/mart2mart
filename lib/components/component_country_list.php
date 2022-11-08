
<?php 

function CountryList(){
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
                    <th>Status</th>
                    <th>Action </th>
                    
                </tr>
            </thead>
            <tbody>
          
        [COUNTRY_DATA]
        
                
            </tbody>
            <tfoot>
            <tr>
            <th>#</th>
            <th>Contry</th>
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
