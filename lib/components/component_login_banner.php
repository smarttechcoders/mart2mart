<?php
function LoginBanner(){
    $str='   <div class="col-xxl-8 col-lg-8 col-md-6">
    <div class="auth-bg bg-white py-md-5 p-4 d-flex">
        <div class="bg-overlay bg-white"></div>
        <!-- end bubble effect -->
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-8">
                <div class="mt-4">
                    <img src="assets/images/login-img.png" class="img-fluid" alt="">
                </div>
                <div class="p-0 p-sm-4 px-xl-0 py-5">
                    <div id="reviewcarouselIndicators" class="carousel slide auth-carousel" data-bs-ride="carousel">
                        <div class="carousel-indicators carousel-indicators-rounded">
                            <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                    
                        <!-- end carouselIndicators -->
                        <div class="carousel-inner w-75 mx-auto">
                            <div class="carousel-item active">
                                <div class="testi-contain text-center">
                                    <h5 class="font-size-20 mt-4">“I feel confident
                                        imposing change
                                        on myself”
                                    </h5>
                                    <p class="font-size-15 text-muted mt-3 mb-0">Vestibulum auctor orci in risus iaculis consequat suscipit felis rutrum aliquet iaculis
                                        augue sed tempus In elementum ullamcorper lectus vitae pretium Aenean sed odio dolor Nullam ultricies diam
                                        eu ultrices tellus eifend sagittis.</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="testi-contain text-center">
                                    <h5 class="font-size-20 mt-4">“Our task must be to
                                        free widening our circle”</h5>
                                    <p class="font-size-15 text-muted mt-3 mb-0">
                                        Curabitur eget nulla eget augue dignissim condintum Nunc imperdiet ligula porttitor commodo elementum
                                        Vivamus justo risus fringilla suscipit faucibus orci luctus
                                        ultrices posuere cubilia curae lectus non ultricies cursus.
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="testi-contain text-center">
                                    <h5 class="font-size-20 mt-4">“I\'ve learned that
                                        people will forget what you”</h5>
                                    <p class="font-size-15 text-muted mt-3 mb-0">
                                        Pellentesque lacinia scelerisque arcu in aliquam augue molestie rutrum magna Fusce dignissim dolor id auctor accumsan
                                        vehicula dolor
                                        vivamus feugiat odio erat sed vehicula lorem tempor quis Donec nec scelerisque magna
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end carousel-inner -->
                    </div>
                    <!-- end review carousel -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- end container fluid -->
</div>';
return $str;
}