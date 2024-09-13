@extends('layouts.maintwo')

@push('title')
  <title>Mind Grower Education - Faculties</title>
@endpush

@section('PageTitle')
<h3 class="display-3 font-weight-bold text-white">Our Faculties</h3>
@endsection

@section('PageText')
<p class="m-0">Faculty Help?</p>
@endsection

@section('content')

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
          <img class="img-fluid w-100" src="{{$fac->faculty_image}}" alt="" />
          <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                class="fab fa-linkedin-in"></i></a>
          </div>

        </div>
        <div>
        <h5>{{$fac->faculty_name}}</h5>
        <i>{{$fac->faculty_desc}}</i>
        </div>


        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Know more
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="description"> 
          <strong>Description:</strong> He is renowned expert in the field of Computer Science with over 15
                  years of teaching experience. His research interests include Artificial Intelligence, Machine
            <br>
            Monday - Wednesday: 9:00 AM - 12:00 PM
            <br>
            Charges: RS 1500 per hour
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
          Their teaching style and methodology are very effective, helping my child understand complex concepts
        </div>
        <div class="d-flex align-items-center">
          <img class="rounded-circle" src="img/testimonial-1.jpg" style="width: 70px; height: 70px" alt="Image" />
          <div class="pl-3">
            <h5>Parent Name</h5>
            <i>Profession</i>
          </div>
        </div>
      </div>
      <div class="testimonial-item px-3">
        <div class="bg-light shadow-sm rounded mb-4 p-4">
          <h3 class="fas fa-quote-left text-primary mr-3"></h3>
          They always provide updated and relevant content, connecting my child to industry trends
        </div>
        <div class="d-flex align-items-center">
          <img class="rounded-circle" src="img/testimonial-2.jpg" style="width: 70px; height: 70px" alt="Image" />
          <div class="pl-3">
            <h5>Parent Name</h5>
            <i>Profession</i>
          </div>
        </div>
      </div>
      <div class="testimonial-item px-3">
        <div class="bg-light shadow-sm rounded mb-4 p-4">
          <h3 class="fas fa-quote-left text-primary mr-3"></h3>
          Their experience and expertise help my child achieve their career goals.They regularly track my child's progress
        </div>
        <div class="d-flex align-items-center">
          <img class="rounded-circle" src="img/testimonial-3.jpg" style="width: 70px; height: 70px" alt="Image" />
          <div class="pl-3">
            <h5>Parent Name</h5>
            <i>Profession</i>
          </div>
        </div>
      </div>
      <div class="testimonial-item px-3">
        <div class="bg-light shadow-sm rounded mb-4 p-4">
          <h3 class="fas fa-quote-left text-primary mr-3"></h3>
          My child feels comfortable with the faculty members and doesn't hesitate to ask questions & they are very polite
        </div>
        <div class="d-flex align-items-center">
          <img class="rounded-circle" src="img/testimonial-4.jpg" style="width: 70px; height: 70px" alt="Image" />
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


@endsection