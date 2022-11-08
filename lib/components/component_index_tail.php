<?php
function component_index_tail(){
    $str = '';
    $str .= '       
    
    <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <script>document.write(new Date().getFullYear())</script> &copy; Borex. Design & Develop by Themesbrand
            </div>
        </div>
    </div>
</footer>
</div>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js?var=[VERSION]"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js?var=[VERSION]"></script>
    <script src="assets/libs/simplebar/simplebar.min.js?var=[VERSION]"></script>
    <script src="assets/libs/eva-icons/eva.min.js?var=[VERSION]"></script>
    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.init.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/pages/pass-addon.init.js?var=[VERSION]"></script>
    <script src="assets/js/[FILENAMEWITHOUTEXTENSION].js?ver=[VERSION]"></script>
   <script src="assets/js/pages/eva-icon.init.js?var=[VERSION]"></script>


   
 ';
   
   return $str;
}