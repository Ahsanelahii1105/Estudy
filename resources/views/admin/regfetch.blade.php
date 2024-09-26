@extends('layouts.bs_main')


@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        thead,
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        thead,
        tr:nth-child(even) {
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
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Generate Certificate</th>
                            <th>Certificate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reg as $r)
                            <tr>
                                <td>{{ $r->id }}</td>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->email }}</td>
                                <td>{{ $r->age }}</td>
                                <td>{{ $r->phone }}</td>
                                <td>{{ $r->address }}</td>
                                <td>{{ $r->gender }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary addbtn" data-bs-toggle="modal"
                                        data-bs-target="#courseModal{{ $r->id }}">
                                        Insert Student Marks
                                    </button>
                                </td>
                                <td>
                                    <a href="#"
                                        style="color: white; text-decoration: none;" target="_blank" type="application/pdf"
                                        rel="alternate" media="print">
                                        <button class="btn btn-success" type="button">Generate Certificate</button>
                                    </a>
                                </td>

                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                            </tr>

                            <!-- Modal for Course -->
                            <div class="modal fade" id="courseModal{{ $r->id }}" tabindex="-1"
                                aria-labelledby="courseModalLabel{{ $r->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="courseModalLabel{{ $r->id }}">Insert Student
                                                Marks for {{ $r->name }}</h5>
                                            <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('/admin/student') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name">Student Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $r->name }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ $r->email }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="coursename">Course Name</label>
                                                    <input type="text" name="coursename" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="marks">Marks</label>
                                                    <input type="number" name="marks" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="grade">Grade</label>
                                                    <input type="text" name="grade" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
