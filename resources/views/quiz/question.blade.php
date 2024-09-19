<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Study - QuizQuestions</title>



    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
            min-width: 100%;
        }

        .table-title h2 {
            margin: 8px 0 0;
            font-size: 22px;
        }

        .search-box {
            position: relative;
            float: right;
        }

        .search-box input {
            height: 34px;
            border-radius: 20px;
            padding-left: 35px;
            border-color: #ddd;
            box-shadow: none;
        }

        .search-box input:focus {
            border-color: #3FBAE4;
        }

        .search-box i {
            color: #a0a5b1;
            position: absolute;
            font-size: 19px;
            top: 8px;
            left: 10px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }

        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 95%;
            width: 30px;
            height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
            padding: 0;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 6px;
            font-size: 95%;
        }
    </style>
</head>



<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach

                @if (Session::get('successMessage'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ Session::get('successMessage') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>

                    <?php Session::forget('successMessage'); ?>
                @endif

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-1">
                            <h2>Users <b></b></h2>
                        </div>
                        <div class="col-sm-7">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Add
                            </button>
                            &nbsp;
                            <a href="/quizIndex" class="btn btn-primary">Home?</a>
                        </div>
                        <div class="col-sm-4">
                            <div class="search-box">

                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question <i class="fa fa-sort"></i></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($question->isEmpty())
                            <tr>
                                <td colspan="3">No questions available.</td>
                            </tr>
                        @else
                            @foreach ($question as $q)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $q->question }}</td>
                                    <td>
                                        <a href="#" class="text-warning" data-bs-toggle="modal"
                                            data-bs-target="#modal_update{{ $q->id }}">Update</a>
                                        <a href="#" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#modal_delete{{ $q->id }}">Delete</a>
                                    </td>
                                </tr>


                                {{-- model update --}}
                                <div class="modal fade" id="modal_update{{ $q->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <form action="/quiz/update" method="post">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Update</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <h5>Question!</h5>
                                                    </div>

                                                    <div class="row" style="padding: 10px;">
                                                        <input type="text" value="{{ $q->question }}"
                                                            name="question" class="form-control">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6"><label>A:</label></div>
                                                        <div class="col-md-6"><label>B:</label></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" name="opa" class="form-control"
                                                                value="{{ $q->a }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="opb" class="form-control"
                                                                value="{{ $q->b }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6"><label>C:</label></div>
                                                        <div class="col-md-6"><label>D:</label></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6"><input type="text" name="opc"
                                                                class="form-control" value="{{ $q->c }}">
                                                        </div>
                                                        <div class="col-md-6"><input type="text" name="opd"
                                                                class="form-control" value="{{ $q->d }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><label>Answer: </label>
                                                            <select name="ans" class="form-control">
                                                                <option value="{{ $q->ans }}">
                                                                    {{ $q->ans }}
                                                                </option>
                                                                <option value="a">A</option>
                                                                <option value="b">B</option>
                                                                <option value="c">C</option>
                                                                <option value="d">D</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-9"></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update
                                                        Question</button>
                                                </div>
                                                <input style="visibility: hidden;" name="id"
                                                    value="{{ $q->id }}">
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                {{-- model delete --}}
                                <div class="modal fade" id="modal_delete{{ $q->id }}"
                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <form action="/quiz/delete" method="post">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Do you want to delete this question?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                                <input style="visibility: hidden;" name="id"
                                                    value="{{ $q->id }}">
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>

<!-- Modal Add-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="/quiz/add" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <h5>Question!</h5>
                    </div>
                    <div class="row" style="padding: 10px;">
                        <input type="text" name="question" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6"><label>A:</label></div>
                        <div class="col-md-6"><label>B:</label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><input type="text" name="opa" class="form-control"></div>
                        <div class="col-md-6"><input type="text" name="opb" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><label>C:</label></div>
                        <div class="col-md-6"><label>D:</label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><input type="text" name="opc" class="form-control"></div>
                        <div class="col-md-6"><input type="text" name="opd" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label>Answer: </label>
                            <select name="ans" class="form-control">
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                            </select>
                        </div>
                        <div class="col-md-9"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Question</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Modal-Update -->




</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
