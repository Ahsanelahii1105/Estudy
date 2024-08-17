@extends('layouts.mainthree')

@push('title')
    <title>Mind Grower Education - Video</title>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10" style="margin: auto;">
                <section class="video-container">
                    <iframe id="video" width="100%" height="500" src="videos/subject.mp4" frameborder="0"
                        allowfullscreen></iframe>
                    <div class="video-info">
                        <h2>Mathematic Subject For Ninth Class</h2>
                        <p>Mathematics is the study of numbers, quantities, and shapes. It involves the use of logical reasoning, problem-solving skills, and mathematical operations to understand and describe the world around us. Mathematics encompasses various branches, including algebra, geometry, calculus, and statistics, which provide a foundation for understanding and analyzing data, patterns, and relationships. Through mathematics, students develop critical thinking, analytical skills, and problem-solving abilities, essential for success in various fields, including science, technology, engineering, and mathematics (STEM).</p>
                        <div class="video-stats">
                            <span id="view-count">123,456 views</span>
                            <span id="like-count">1,234 likes</span>
                            <span id="dislike-count">12 dislikes</span>
                        </div>
                        <div class="video-actions">
                            <button id="like-btn">Like</button>
                            <button id="dislike-btn">Dislike</button>
                            <button id="share-btn">Share</button>
                        </div>
                    </div>
                </section>
                <h2 class="mx-5">Recommended Videos</h2>



                <div class="card mb-5 shadow" style="margin: auto; max-width: 800px;">
                    <div class="row g-0">


                        <div class="col-md-4">
                            <img src="/img/class-1.jpg" width="100%" height="302px"
                                class="img rounded-start position-relative" alt="image">
                        </div>
                        <div class="col-md-8 mt-4">
                            <div class="card-body">
                                <h5 class="card-title"> Matric Arts Field:</h5>
                                <p class="card-description">The Matric Arts field is a broad and diverse field that encompasses various subjects related to humanities, social sciences, and languages.
                                </p>
                                <button style="width: 130px; background-color: #5a8fef;" class="btn mx-3 p-2"
                                    type="button"><a href="/videosub"
                                        style="width: 130px; background-color: #5a8fef; color: #e8dcdc; border: none; font-weight: 700; border: none !important;">Start</a></button>
                            </div>
                        </div>

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
