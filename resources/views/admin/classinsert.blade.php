@extends('layouts.bs_main')


   @section('main-section')

   <h1 class="text-secondary text-center mt-5">Insert Classes</h1>
   <div class="container-fluid w-50">
      <form action="/admin/insertclass" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
            <label for="" class="form-label">Class Title</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Subject Title">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Class Description</label>
            <textarea rows="4" type="text" name="desc" id="" class="form-control" placeholder="Enter Subject Description"></textarea>
         </div>
         <div class="form-group">
            <label for="" class="form-label">Image (if any:)</label>
            <input type="file" name="image" id="" class="form-control">
         </div>
         <div class="form-group">
            <label for="" class="form-label">For Which Class?</label>
            <input type="text" placeholder="Enter Class" name="whichclass" id="" class="form-control">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Total Seats?</label>
            <input type="text" placeholder="How many seats?" name="seats" id="" class="form-control">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Class Timing?</label>
            <input type="text" placeholder="Enter Time" name="timing" id="" class="form-control">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Teaching Fee?</label>
            <input type="text" placeholder="Enter Faculty Fee" name="fees" id="" class="form-control">
         </div>
         <div class="form-group mt-3">
            <button type="submit" class="w-100 btn btn-primary">Insert</button>
         </div>
      </form>
   </div>

   @endsection
