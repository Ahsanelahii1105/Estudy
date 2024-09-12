@extends('layouts.bs_main')


   @section('main-section')

   <h1 class="text-secondary text-center mt-5">Insert Course</h1>
   <div class="container-fluid w-50">
      <form action="/admin/insertcourse" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
            <label for="" class="form-label">Course title</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Subject Title">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Course Description</label>
            <textarea rows="4" type="text" name="desc" id="" class="form-control" placeholder="Enter Subject Description"></textarea>
         </div>
         <div class="form-group">
            <label for="" class="form-label">Image (if any:)</label>
            <input type="file" name="image" id="" class="form-control">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Modular (if any:)</label>
            <input type="file" name="modular" id="" class="form-control">
         </div>
         {{-- <div class="form-group">
            <label for="" class="form-label">Video (if any:)</label>
            <input type="file" name="video" accept="video/*" id="" class="form-control">
         </div> --}}
         <div class="form-group mt-3">
            <button type="submit" class="w-100 btn btn-primary">Insert</button>
         </div>
      </form>
   </div>

   @endsection
