@extends('layouts.bs_main')


@section('main-section')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        thead, td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        thead, tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">

                <table class="text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Booked Class</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book as $b)
                            <tr>
                                <td>{{ $b->id }}</td>
                                <td>{{ $b->name }}</td>
                                <td>{{ $b->email }}</td>
                                <td>{{ $b->class }}</td>
                                <td><a href="#" class="btn btn-primary">Update</a> &nbsp;<a href="#"
                                        class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
        </div>
    </div>
@endsection
