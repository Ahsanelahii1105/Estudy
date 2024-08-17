@extends('layouts.bs_main')


   @section('main-section')

    <div class="container">
        <div class="row">
            @foreach ($book as $b)
                <div class="col-lg-4">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$b->name}}</h4>
                            <h5 class="card-title">{{$b->email}}</h5>
                            <h5 class="card-title">{{$b->class}}</h5>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

   @endsection
