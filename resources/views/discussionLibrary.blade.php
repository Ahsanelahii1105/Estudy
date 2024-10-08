@extends('layouts.mainthree')

@push('title')
    <title>E-Study - Dicussion Library</title>
@endpush

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h2 {
        color: #333;
    }
</style>

@section('content')
    <div class="container-fluid">

        <div class="row mt-5">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4">
                <h3>Ask Question What You Need</h3>
            </div>
            <div class="col-md-4 col-sm-4"></div>
        </div>

        <div class="row">
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-md-5 col-sm-5">
                <div>
                    <button class="btn btn-primary subbtn" onclick="showSubjectContent()">Subject</button>
                    <button class="btn btn-primary corbtn" onclick="showCourseContent()">Course</button>
                </div>
            </div>
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-md-5 col-sm-5">

                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <!-- Button to trigger modal for Subject -->
                <button type="button" class="btn btn-primary addbtn" data-bs-toggle="modal" data-bs-target="#subjectModal">
                    Add Question For Subjects
                </button>

                <!-- Modal for Subject -->
                <div class="modal fade" id="subjectModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add</h5>
                                <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"></span>
                                </button>
                            </div>
                            <form action="/discussionLibrary" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <h5>Your Name:</h5>
                                    </div>
                                    <div class="row" style="padding: 10px;">
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="row">
                                        <h5>Question!</h5>
                                    </div>
                                    <div class="row" style="padding: 10px;">
                                        <input type="text" name="ques" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Button to trigger modal for Course -->
                <button type="button" class="btn btn-primary addbtn" data-bs-toggle="modal" data-bs-target="#courseModal">
                    Add Question For Course
                </button>

                <!-- Modal for Course -->
                <div class="modal fade" id="courseModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add</h5>
                                <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"></span>
                                </button>
                            </div>
                            <form action="/discussionLibraryCourse" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <h5>Your Name:</h5>
                                    </div>
                                    <div class="row" style="padding: 10px;">
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="row">
                                        <h5>Question!</h5>
                                    </div>
                                    <div class="row" style="padding: 10px;">
                                        <input type="text" name="ques" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="content"></div>
    </div>

    <div class="container text-center weldiv" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1>Welcome To Discussion Library!</h1>
            </div>
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>

// function toggleReply(button) {
//     var replySection = button.nextElementSibling;
//     if (replySection.style.display === "none" || replySection.style.display === "") {
//         replySection.style.display = "block";  // Show reply section
//     } else {
//         replySection.style.display = "none";   // Hide reply section
//     }
// }

    function showSubjectContent() {
        var content = `
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-1 col-sm-1"></div>

            <div class="col-md-10 col-sm-10 comment-box mt-5">

                <div class="user-info" style="float: left;">

                    <div class="container-fluid">
                        <div class="row">

                            @foreach ($library as $lib)

                                <div class="mrg mt-2 col-md-1 col-sm-1" style="float: left;">
                                    <img src="/img/userimg.jpg" alt="user">
                                </div>

                                <div class="col-md-10 col-sm-10 ms-3">

                                    <div class="mt-3 text-start">
                                        <div>
                                            <p class="user-name mb-0">{{ $lib->user_name }}</p>
                                            <p><small>Time: 1:38 AM</small></p>
                                        </div>

                                        <div>
                                            <p class="mb-0 mt-2"><b>Asking!</b></p>
                                            <p class="mb-1">{{ $lib->user_ques }}</p>

                                            @if($lib->replies->isNotEmpty())
                                            @foreach ($lib->replies as $rply)

                                                <div class="container-fluid">
                                                    <div class="row">

                                                        <div class="mrg mt-2 col-md-1 col-sm-1" style="float: left;">
                                                            <img src="/img/userimg.jpg" alt="user">
                                                        </div>

                                                        <div class="col-md-10 col-sm-10 ms-4">
                                                            <div class="mt-3 text-start">
                                                                <div>
                                                                    <p class="user-name mb-0">{{ $rply->username }}</p>
                                                                    <p><small>Time: 2:38 AM</small></p>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 mt-2"><b>Reply!</b></p>
                                                                    <p class="mb-1">{{ $rply->reply }}</p>
                                                                    <button class="btn btn-primary mb-2 reply-button"
                                                                        onclick="toggleReply(this, {{ $lib->id }})">Reply</button>
                                                                    <div class="reply-section divshow divhide" style="display: none;">

                                                                       <form action="{{ url('/discussionLibrary_', $lib->id) }}" method="post">
                                                                            @csrf
                                                                            <textarea placeholder="Write a reply..." name="reply"></textarea>
                                                                            <button class="btn btn-primary mt-2 mb-4 clickreplysub" type="submit">Submit Reply</button>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1"></div>
                                                    </div>
                                                </div>

                                            @endforeach
                                            @else
                                                <p>No replies yet.</p>
                                            @endif

                                            <button class="btn btn-primary mb-2 reply-button replyhide" type="submit">
                                                Reply
                                            </button>

                                            <div class="reply-section divshow divhide" style="display: none;">

                                               <form action="{{ url('/discussionLibrary_', $lib->id) }}" method="post">
                                                    @csrf
                                                    <textarea placeholder="Write a reply..." name="reply"></textarea>
                                                    <button class="btn btn-primary mt-2 mb-4 clickreplysub" type="submit">Submit Reply</button>
                                                </form>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            @endforeach

                            <div class="col-md-1 col-sm-1"></div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-1 col-sm-1"></div>


            </div>
        </div>
   `;
        document.getElementById('content').innerHTML = content;
    }

    function showCourseContent() {
        var content = `
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-1 col-sm-1"></div>

            <div class="col-md-10 col-sm-10 comment-box mt-5">

                <div class="user-info" style="float: left;">

                    <div class="container-fluid">
                        <div class="row">

                            @foreach ($librarycor as $libcor)

                                <div class="mrg mt-2 col-md-1 col-sm-1" style="float: left;">
                                    <img src="/img/userimg.jpg" alt="user">
                                </div>

                                <div class="col-md-10 col-sm-10 ms-3">

                                    <div class="mt-3 text-start">
                                        <div>
                                            <p class="user-name mb-0">{{ $libcor->username }}</p>
                                            <p><small>Time: 1:38 AM</small></p>
                                        </div>

                                        <div>
                                            <p class="mb-0 mt-2"><b>Asking!</b></p>
                                            <p class="mb-1">{{ $libcor->userques }}</p>

                                            @if($libcor->replycors->isNotEmpty())
                                            @foreach ($libcor->replycors as $rply)

                                                <div class="container-fluid">
                                                    <div class="row">

                                                        <div class="mrg mt-2 col-md-1 col-sm-1" style="float: left;">
                                                            <img src="/img/userimg.jpg" alt="user">
                                                        </div>

                                                        <div class="col-md-10 col-sm-10 ms-4">
                                                            <div class="mt-3 text-start">
                                                                <div>
                                                                    <p class="user-name mb-0">{{ $rply->username }}</p>
                                                                    <p><small>Time: 2:38 AM</small></p>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 mt-2"><b>Reply!</b></p>
                                                                    <p class="mb-1">{{ $rply->reply }}</p>
                                                                    <button class="btn btn-primary mb-2 reply-button"
                                                                        onclick="toggleReply(this, {{ $libcor->id }})">Reply</button>
                                                                    <div class="reply-section divshow divhide" style="display: none;">

                                                                       <form action="{{ url('/discussionLibraryCourse_', $libcor->id) }}" method="post">
                                                                            @csrf
                                                                            <textarea placeholder="Write a reply..." name="reply"></textarea>
                                                                            <button class="btn btn-primary mt-2 mb-4 clickreplysub" type="submit">Submit Reply</button>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1"></div>
                                                    </div>
                                                </div>

                                            @endforeach
                                            @else
                                                <p>No replies yet.</p>
                                            @endif

                                            <button class="btn btn-primary mb-2 reply-button replyhide" type="submit">
                                                Reply
                                            </button>

                                            <div class="reply-section divshow divhide" style="display: none;">

                                               <form action="{{ url('/discussionLibraryCourse_', $libcor->id) }}" method="post">
                                                    @csrf
                                                    <textarea placeholder="Write a reply..." name="reply"></textarea>
                                                    <button class="btn btn-primary mt-2 mb-4 clickreplysub" type="submit">Submit Reply</button>
                                                </form>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            @endforeach

                            <div class="col-md-1 col-sm-1"></div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-1 col-sm-1"></div>


            </div>
        </div>
    `;
        document.getElementById('content').innerHTML = content;
    }


    $(document).ready(function() {
        $(document).on('click', '.subbtn', function() {
            $('.weldiv').hide();
        });
        $(document).on('click', '.corbtn', function() {
            $('.weldiv').hide();
        });
        $(document).on('click', '.addbtn', function() {
            $('.weldiv').hide();
        });


        $(document).on('click', '.reply-button', function() {
            // Hide all reply sections
            $('.divshow').hide();

            // Show only the reply section related to the clicked button
            $(this).closest('.text-start').find('.divshow').show();

            // Hide all reply buttons
            $('.reply-button').show();
            // Hide the clicked button
            $(this).hide();
        });

        $(document).on('click', '.clickreplysub', function() {
            // Hide the reply section when the submit button is clicked
            $(this).closest('.divshow').hide();

            // Show the reply button again (if needed)
            $(this).closest('.text-start').find('.reply-button').show();
        });


    });
</script>
