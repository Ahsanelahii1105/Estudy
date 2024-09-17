<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Study - QuizQuestions</title>


    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        @foreach ($question as $q)
                            <tr>
                                <td>{{ $loop->index }}</td>
                                <td>{{ $q->question }}</td>

                                <td>
                                    <a href="#" class="text-warning" data-bs-toggle="modal"
                                        data-bs-target="#modal_update{{ $q->id }}">Update</a>
                                    <a href="#" class="text-warning" data-bs-toggle="modal"
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
                                                    <input type="text" value="{{ $q->question }}" name="question"
                                                        class="form-control">
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
                                                            class="form-control" value="{{ $q->c }}"></div>
                                                    <div class="col-md-6"><input type="text" name="opd"
                                                            class="form-control" value="{{ $q->d }}"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Answer: </label>
                                                        <select name="ans" class="form-control">
                                                            <option value="{{ $q->ans }}">{{ $q->ans }}
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
                            <div class="modal fade" id="modal_delete{{ $q->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
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
