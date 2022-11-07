<?php
function DashboardMailContent(){
    $str = '
    

        <div class="row">
        <div class="col-xxl-9">
        ';
        return $str;
    }
    ?>
   
    <?php
function ComponentDashboardCard(){
            $str= '<div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-primary bg-gradient">
                                            <i data-eva="pie-chart-2" class="fill-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-1">Total Products</p>
                                    <h4 class="mb-0">[PRODUCT_COUNT]</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-end ms-2">
                                    <div class="badge rounded-pill font-size-13 badge-soft-success">+ 2.65%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->';
                return $str;
}

function ComponentServiecCount() { 
    $str='<div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-primary bg-gradient">
                                            <i data-eva="shopping-bag" class="fill-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-1">Total Services</p>
                                    <h4 class="mb-0">[SERVICE_COUNT]</h4>
                                </div>
                                <div class="flex-shrink-0 align-self-end ms-2">
                                    <div class="badge rounded-pill font-size-13 badge-soft-danger">- 0.82%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                    ';
                    return $str;
                    
                    }?>

                    <?php
    function ComponentCustomersCount(){

                $str='<!-- end col -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-primary bg-gradient">
                                            <i data-eva="people" class="fill-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-1"> Customers</p>
                                    <h4 class="mb-0">[CUSTOMER_COUNT]</h4>
                                </div>
                                <div class="flex-shrink-0 align-self-end ms-2">
                                    <div class="badge rounded-pill font-size-13 badge-soft-danger">- 1.04%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
           
            <!-- end row -->

            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-3">Overview</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="fw-semibold">Sort By:</span> <span
                                        class="text-muted">Yearly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                    <a class="dropdown-item" href="#">Today</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4">
                        <div class="col-xxl-3">
                            <div>
                                <div class="mt-3 mb-3">
                                    <p class="text-muted mb-1">This Month</p>

                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <h2 class="mb-0">$24,568</h2>
                                        <div class="badge rounded-pill font-size-13 badge-soft-success">+
                                            2.65%</div>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col-sm-6">
                                        <div class="border-bottom border-end p-3 h-100">
                                            <p class="text-muted text-truncate mb-1">Orders</p>
                                            <h5 class="text-truncate mb-0">5,643</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="border-bottom p-3 h-100">
                                            <p class="text-muted text-truncate mb-1">Sales</p>
                                            <h5 class="text-truncate mb-0">16,273</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-sm-6">
                                        <div class="border-bottom border-end p-3 h-100">
                                            <p class="text-muted text-truncate mb-1">Order Value</p>
                                            <h5 class="text-truncate mb-0">12.03 %</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="border-bottom p-3 h-100">
                                            <p class="text-muted text-truncate mb-1">Customers</p>
                                            <h5 class="text-truncate mb-0">21,456</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-sm-6">
                                        <div class="border-end p-3 h-100">
                                            <p class="text-muted text-truncate mb-1">Income</p>
                                            <h5 class="text-truncate mb-0">$35,652</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-3 h-100">
                                            <p class="text-muted text-truncate mb-1">Expenses</p>
                                            <h5 class="text-truncate mb-0">$12,248</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9">
                            <div>
                                <div id="chart-column" class="apex-charts" data-colors="["#f1f3f7", "#3b76e1"]"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            
            <!-- end row -->
        </div>
        <!-- end col -->
        <div class="col-xxl-3">

        <div class="card">
        <div class="card-body">
                <div class="">
                    <h5 class="font-size-16">Usage Storage</h5>
                    <div id="stroked_radialbar" data-colors="["#3b76e1"]" class="apex-charts" dir="ltr"></div> 
                    <div>
                        <h5 class="font-size-16 mb-3">Recent Files</h5>
                        <div class="card border shadow-none mb-2">
                            <a href="javascript: void(0);" class="text-body">
                                <div class="p-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-success text-success font-size-24">
                                                <i class="mdi mdi-image"></i>
                                            </div>
                                        </div>

                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Images</h5>
                                            <p class="text-muted text-truncate mb-0">176 Files</p>
                                        </div>

                                        <div class="ms-2">
                                            <p class="text-muted">6 GB</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card border shadow-none mb-2">
                            <a href="javascript: void(0);" class="text-body">
                                <div class="p-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-danger text-danger font-size-24">
                                                <i class="mdi mdi-play-circle-outline"></i>
                                            </div>
                                        </div>

                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Video</h5>
                                            <p class="text-muted text-truncate mb-0">45 Files</p>
                                        </div>

                                        <div class="ms-2">
                                            <p class="text-muted">4.1 GB</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card border shadow-none mb-2">
                            <a href="javascript: void(0);" class="text-body">
                                <div class="p-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-info text-info font-size-24">
                                                <i class="mdi mdi-music"></i>
                                            </div>
                                        </div>

                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Music</h5>
                                            <p class="text-muted text-truncate mb-0">21 Files</p>
                                        </div>

                                        <div class="ms-2">
                                            <p class="text-muted">3.2 GB</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card border shadow-none mb-2">
                            <a href="javascript: void(0);" class="text-body">
                                <div class="p-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-primary text-primary font-size-24">
                                                <i class="mdi mdi-file-document"></i>
                                            </div>
                                        </div>

                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Document</h5>
                                            <p class="text-muted text-truncate mb-0">21 Files</p>
                                        </div>

                                        <div class="ms-2">
                                            <p class="text-muted">2 GB</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card border shadow-none">
                            <a href="javascript: void(0);" class="text-body">
                                <div class="p-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-warning text-warning font-size-24">
                                                <i class="mdi mdi-folder"></i>
                                            </div>
                                        </div>

                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Others</h5>
                                            <p class="text-muted text-truncate mb-0">20 Files</p>
                                        </div>

                                        <div class="ms-2">
                                            <p class="text-muted">1.4 GB</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 pt-3">
                    <div class="alert alert-success alert-dismissible fade show px-3 mb-0" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <div class="mb-3">
                            <i class="bx bxs-folder-open h1 text-success"></i>
                        </div>

                        <div>
                            <h5 class="text-success">Upgrade Features</h5>
                            <p>Cum sociis natoque penatibus et</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-link text-decoration-none text-success">Upgrade <i class="mdi mdi-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        </div>
        <!-- end col -->
    </div>
            <!-- end row -->

        

    ';
    return $str;
}