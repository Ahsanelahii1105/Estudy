@extends('layouts.maintwo')

@push('title')
    <title>Mind Grower Education - Contact</title>
@endpush

@section('PageTitle')
    <h3 class="display-3 font-weight-bold text-white">Contact Us</h3>
@endsection

@section('PageText')
    <p class="m-0">Contact Us</p>
@endsection


@section('content')

<!-- Contact Start -->
<div class="container-fluid pt-5">
 <div class="container">
  <div class="text-center pb-2">
    <p class="section-title px-5">
      <span class="px-2">Get In Touch</span>
    </p>
    <h1 class="mb-4">Contact Us For Any Query</h1>
  </div>
  <div class="row">
    <div class="col-lg-7 mb-5">
      <div class="contact-form">

        <form action="{{URL::TO('/insert')}}" method="POST" id="">
          @csrf

          <div class="control-group mb-3">
            <input type="text" class="form-control" name="name"  placeholder="Your Name" required="required"
             />

          </div>
          <div class="control-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required="required"
               />

          </div>
          <div class="control-group mb-3">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required="required"
               />

          </div>
          <div class="control-group mb-3">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required="required"
              ></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div>
            <button class="btn btn-primary py-2 px-4" type="submit" id="">
              Send Message
            </button>
          </div>
        </form>

      </div>
    </div>
    <div class="col-lg-5 mb-5">
      <p>
        Labore sea amet kasd diam justo amet ut vero justo. Ipsum ut et
        kasd duo sit, ipsum sea et erat est dolore, magna ipsum et magna
        elitr. Accusam accusam lorem magna, eos et sed eirmod dolor est
        eirmod eirmod amet.
      </p>
      <div class="d-flex">
        <i class="fas fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
          style="width: 45px; height: 45px"></i>
        <div class="pl-3">
          <h5>Address</h5>
          <p>123 Street, New York, USA</p>
        </div>
      </div>
      <div class="d-flex">
        <i class="fas fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
          style="width: 45px; height: 45px"></i>
        <div class="pl-3">
          <h5>Email</h5>
          <p>info@example.com</p>
        </div>
      </div>
      <div class="d-flex">
        <i class="fas fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
          style="width: 45px; height: 45px"></i>
        <div class="pl-3">
          <h5>Phone</h5>
          <p>+012 345 67890</p>
        </div>
      </div>
      <div class="d-flex">
        <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
          style="width: 45px; height: 45px"></i>
        <div class="pl-3">
          <h5>Opening Hours</h5>
          <strong>Sunday - Friday:</strong>
          <p class="m-0">08:00 AM - 05:00 PM</p>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
<!-- Contact End -->

@endsection
