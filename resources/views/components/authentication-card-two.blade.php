<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <!-- <div>
        {{ $logo }}
    </div> -->

    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px; border: none;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">

                            <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-2">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register Here!</p>

                                <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> -->
                                {{ $slot }}
                                <!-- </div> -->

                            </div>
                            
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-2 order-lg-1">
                                
                                <img src="img/register.PNG" class="img-fluid" alt="Sample image">
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>