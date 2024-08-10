<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <!-- <div>
        {{ $logo }}
    </div> -->

    <div class="container-fluid h-custom mt-5" >
        <div class="row d-flex justify-content-center align-items-center h-100" >
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="img/loginimg.PNG" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> -->
                {{ $slot }}
                <!-- </div> -->

            </div>
        </div>
    </div>
</div>