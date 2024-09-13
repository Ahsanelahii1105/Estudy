@extends('layouts.mainthree')

@push('title')
    <title>Mind Grower Education - Video</title>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10" style="margin: auto;">
                <section class="video-container">
                    <iframe id="video" width="100%" height="500" src="{{asset('upload/course/'.$video->course_video)}}" frameborder="0"
                        allowfullscreen></iframe>
                    <div class="video-info">
                        <h2>{{$video->course_name}}</h2>
                        <p>{{$video->course_desc}}</p>
                        <div class="video-stats">
                            <span id="view-count">123,456 views</span>
                            <span id="like-count">1,234 likes</span>
                            <span id="dislike-count">12 dislikes</span>
                        </div>
                        <div class="video-actions">
                            <button id="like-btn">Like</button>
                            <button id="dislike-btn">Dislike</button>
                            <button id="share-btn">Share</button>
                            <a href="pdf/modular/1725708214.pdf" style="color: white; text-decoration: none;" target="_blank" type="application/pdf" rel="alternate" media="print"><button>PDF</button></a>
                        </div>
                    </div>
                </section>

                <h2 class="mx-5 mb-5">Recommended Videos</h2>

                <div class="card mb-5 shadow" style="margin: auto; max-width: 800px;">
                    <div class="row g-0">


                        <div class="col-md-4">
                            <img src="/img/online course.jpg" width="100%" height="302px"
                                class="img rounded-start position-relative" alt="image">
                        </div>
                        <div class="col-md-8 mt-4">
                            <div class="card-body">
                                <h5 class="card-title">ONLINE COURSE</h5>
                                <p class="card-description">Our online courses offer a flexible and interactive learning
                                    experience, designed to fit your schedule and learning style. With the ability to learn
                                    from
                                    anywhere, at any time, you can unlock your potential and transform your skills and
                                    knowledge
                                </p>
                                <button style="width: 130px; background-color: #5a8fef;" class="btn mx-3 p-2"
                                    type="button"><a href="/videopage"
                                        style="width: 130px; background-color: #5a8fef; color: #e8dcdc; border: none; font-weight: 700; border: none !important;">Start</a></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
        </div>
    </div>




    <script src="script.js"></script>
@endsection
