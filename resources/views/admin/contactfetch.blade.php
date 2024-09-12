@extends('layouts.bs_main')


@section('main-section')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <div class="container">
        <div class="row">
            @foreach ($contacts as $c)
                <div class="col-lg-12 mt-5">

                    <table class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->contact_name }}</td>
                            <td>{{ $c->contact_email }}</td>
                            <td>{{ $c->contact_subject }}</td>
                            <td>{{ $c->contact_message }}</td>
                            <td><a href="#" class="btn btn-primary">Update</a> &nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                    </table>

                </div>

        </div>
        @endforeach
    </div>
    </div>
@endsection
