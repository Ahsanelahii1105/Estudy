@extends('layouts.main')

@push('title')
    <title>E-Study - Home</title>
@endpush

@section('content')
    <!-- Facilities Start -->


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin: auto;">
                <div class="container text-center">
                    <h1>Have Any Question?</h1>
                    <input type="text" class="quesInpSub inp focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                        placeholder="Ask Here!"><button class="quesInpSub sub" type="submit">Submit</button>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>Feature Courses</h1>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 mt-3 d-flex justify-content-end">
                <button type="button" class="btn veiwbtn"><a href="/courses" class="veiwbtn">View</a></button>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">

                @foreach ($subjects as $sub)
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-5 col-sm-12">
                                    <img src="{{ $sub->subject_image }}" name="image" width="100%" height="300px"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $sub->subject_name }}</h5>
                                        <p class="card-text">{{ $sub->subject_desc }}</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <a href="{{url('/videopage', $sub->id)}}" class="btn btn-outline-primary">Join Free</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Facilities Start -->

    <!-- student portal carousel  -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 counterone">
                <h1><span class="counter">2,523</span></h1>
                <h3>Customers</h3>
                <i class="fas fa-users"></i>
            </div>
            <div class="col-md-4 counterone">
                <h1><span class="counter">63,075</span></h1>
                <h3>Total Web Pages</h3>
                <i class="fas fa-desktop"></i>
            </div>
            <div class="col-md-4 counterone">
                <h1><span class="counter">12,218</span></h1>
                <h3>Cups Of Coffee</h3>
                <i class="fas fa-coffee"></i>
            </div>
        </div>
    </div>

    <!-- student portal carousel end -->


    <!-- Class Start -->
    <div class="container-fluid pt-5 mt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Popular Classes</span>
                </p>
                <h1 class="mb-4">Classes for You</h1>
            </div>
            <div class="row">

                @foreach ($clases as $cls)
                    <div class="col-lg-4 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2">
                            <img class="card-img-top mb-2" src="{{ $cls->class_image }}" alt="" />
                            <div class="card-body text-center">
                                <h4 class="card-title">{{ $cls->class_name }}</h4>
                                <p class="card-text">
                                    {{ $cls->class_desc }}
                                </p>
                            </div>
                            <div class="card-footer bg-transparent py-4 px-5">
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right">
                                        <strong>Classes</strong>
                                    </div>
                                    <div class="col-6 py-1">{{ $cls->class_whichclass }}</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right">
                                        <strong>Total Seats</strong>
                                    </div>
                                    <div class="col-6 py-1">{{ $cls->class_seats }}</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right">
                                        <strong>Class Time</strong>
                                    </div>
                                    <div class="col-6 py-1">{{ $cls->class_timing }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6 py-1 text-right border-right">
                                        <strong>Tution Fee</strong>
                                    </div>
                                    <div class="col-6 py-1">{{ $cls->class_fees }}</div>
                                </div>
                            </div>
                            <a href="/videosub" class="btn btn-primary px-4 mx-auto mb-4">Start</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Class End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Testimonial</span>
                </p>
                <h1 class="mb-4">What Parents Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Estudy has transformed my child's learning, now they're confident and self-assured!& teachers are
                        very supportive
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-1.jpg" style="width: 70px; height: 70px"
                            alt="Image" />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Estudy's classes have given my child the right direction, now they're achieving their dream & study
                        material is very useful
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-2.jpg" style="width: 70px; height: 70px"
                            alt="Image" />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Estudy's teachers have provided my child with personalized attention,now they excel in every subject
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-3.jpg" style="width: 70px; height: 70px"
                            alt="Image" />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Estudy's study material has enhanced my child's understanding, now they grasp every concept with
                        ease!
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-4.jpg" style="width: 70px; height: 70px"
                            alt="Image" />
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt="" />
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5">
                        <span class="pr-2">Learn About Us</span>
                    </p>
                    <h1 class="mb-4">Best Website For Our Fututre Students</h1>
                    <p>
                        Your success has no limits, you can achieve anything you set your mind to!
                        We're proud of you, you're the future stars!
                        Education is the first step towards making your dreams come true.

                    </p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="" />
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom">
                                    <i class="fas fa-check text-primary mr-3"></i>We're proud of you, you're the future
                                    stars
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fas fa-check text-primary mr-3"></i>
                                    May your hard work and dedication lead you to triumph!
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fas fa-check text-primary mr-3"></i>
                                    Dream big, work hard, and achieve your goals!
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="/about" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5">
                        <span class="pr-2">Book A Seat</span>
                    </p>
                    <h1 class="mb-4">Book A Seat For Your Kid</h1>
                    <p>
                        Booking seats for your kids in Estudy offers numerous benefits that enhance their learning
                        experience and provide convenience for you as a parent. By reserving a seat, you ensure your child
                        has a comfortable and designated spot, saving time and avoiding last-minute hassles.
                    </p>
                    <ul class="list-inline m-0">
                        <li class="py-2">
                            <i class="fas fa-check text-success mr-3"></i>Provides a sense of security and organization for
                            your child


                        </li>
                        <li class="py-2">
                            <i class="fas fa-check text-success mr-3"></i>
                            This thoughtful planning allows your child to focus on their studies
                        </li>
                        <li class="py-2">
                            <i class="fas fa-check text-success mr-3"></i>Gives you peace of mind knowing your child's seat
                            is secured



                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Book A Seat</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="{{ URL::TO('/insertwo') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control border-0 p-4"
                                        placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-0 p-4"
                                        placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select name="class" class="custom-select border-0 px-4" style="height: 47px">
                                        <option selected>Select A Class</option>
                                        <option value="1">Class 9</option>
                                        <option value="2">Class 10</option>
                                        <option value="3">Class 11</option>
                                        <option value="3">Class 12</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit">
                                        Book Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Our Teachers</span>
                </p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row">
                @foreach ($faculties as $fac)
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="{{ $fac->faculty_image }}" alt="" />
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                        <div>
                            <h5>{{ $fac->faculty_name }}</h5>
                            <i>{{ $fac->faculty_desc }}</i>
                        </div>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Know more
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $fac->faculty_name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="description">
                                            <strong>Description:</strong>{{$fac->faculty_fulldesc}}
                                        </p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fas fa-angle-double-up"></i></a>
@endsection
