<?php

function login_page()
{
   
    $str =' <div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center">
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <div class="row justify-content-center g-0">
                    <div class="col-xl-9">
                        <div class="p-4">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="auth-full-page-content rounded d-flex p-3 my-2">
                                        <div class="w-100">
                                            <div class="d-flex flex-column h-100">
                                                <div class="mb-4 mb-md-4">
                                                    <a href="index.html" class="d-block auth-logo auth-logo-text">
                                                        <img src="[MART_LOGO]" alt="" height="40" class="auth-logo-dark me-start">
                                                        <img src="[MART_LOGO]" alt="" height="40" class="auth-logo-light me-start"> [TITLE_APP]
                                                    </a>
                                                </div>
                                                <div class="auth-content my-auto">
                                                    <div class="text-center">
                                                        <h5 class="mb-0">Welcome Back !</h5>
                                                        <p class="text-muted mt-2">  Sign in to continue to Borex.</p>
                                                        <p>[ACTION_MESSAGE]</p>
                                                     
                                                    </div>
                                                     <form class="mt-4 pt-2" action="login.php" method="post">
                                                        <div class="form-floating form-floating-custom mb-4">
                                                        <input type="hidden" name="type" value="login">
                                                            <input type="text" name="name/email" class="form-control" id="input-username" placeholder="Enter User Name">
                                                            <label for="input-username">Username</label>
                                                            <div class="form-floating-icon">
                                                                <i data-eva="people-outline"></i>
                                                            </div>
                                                        </div>
                
                                                        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                            <input type="password" name="usersPwd" class="form-control pe-5" id="password-input" placeholder="Enter Password">
                                                            
                                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                            </button>
                                                            <label for="input-password">Password</label>
                                                            <div class="form-floating-icon">
                                                                <i data-eva="lock-outline"></i>
                                                            </div>
                                                        </div>
                
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <div class="form-check font-size-15">
                                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                                    <label class="form-check-label font-size-13" for="remember-check">
                                                                        Remember me
                                                                    </label>
                                                                </div>  
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="mb-3">
                                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                                        </div>
                                                    </form>
                
                                                    <div class="mt-4 pt-3 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="font-size-14 mb-4 text-muted fw-medium">- Or you can join with -</h5>
                                                        </div>

                                                        <div class="d-flex gap-2">
                                                            <button type="button" class="btn btn-soft-primary waves-effect waves-light w-100">
                                                                <i class="bx bxl-facebook font-size-16 align-middle"></i> 
                                                            </button>
                                                            <button type="button" class="btn btn-soft-info waves-effect waves-light w-100">
                                                                <i class="bx bxl-linkedin font-size-16 align-middle"></i> 
                                                            </button>
                                                            <button type="button" class="btn btn-soft-danger waves-effect waves-light w-100">
                                                                <i class="bx bxl-google font-size-16 align-middle"></i> 
                                                            </button>
                                                        </div>
                                                    </div>
                
                                                    <div class="mt-4 pt-3 text-center">
                                                        <p class="text-muted mb-0">Don\'t have an account ? <a href="auth-register.html"
                                                            class="text-primary fw-semibold"> Signup now </a> </p>
                                                    </div>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Borex   . Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>';
            return $str;
}