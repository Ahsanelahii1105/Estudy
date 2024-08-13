@extends('layouts.bs_main')


   @section('main-section')

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @foreach ($contacts as $c)
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$c->contact_name}}</h4>
                            <h5 class="card-title">{{$c->contact_email}}</h5>
                            <h5 class="card-title">{{$c->contact_subject}}</h5>
                            <h5 class="card-title">{{$c->contact_message}}</h5>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>

   @endsectionar