@extends('layouts.mainthree')

@push('title')
    <title>Mind Grower Education - Video</title>
@endpush

@section('content')

<div class="container" >
    <div class="row">
        <div class="col-lg-10" style="margin: auto;">
        <section class="video-container">
            <iframe id="video" width="100%" height="500" src="videos/ex1.mp4" frameborder="0"
                allowfullscreen></iframe>
            <div class="video-info">
                <h2 id="video-title">YouTube Video Title</h2>
                <p id="video-description">This is a sample YouTube video description.</p>
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
        </div>
    </div>
</div>

<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6" style="margin: auto;">

            <section class="comments">
            <h2>Comments</h2>
            <ul id="comment-list">
                <li>
                    <img src="avatar.jpg" alt="Avatar">
                    <div class="comment-text">
                        <p>This is a sample comment.</p>
                        <span>1 hour ago</span>
                    </div>
                </li>
                <li>
                    <img src="avatar.jpg" alt="Avatar">
                    <div class="comment-text">
                        <p>This is another sample comment.</p>
                        <span>2 hours ago</span>
                    </div>
                </li>
            </ul>
            <form id="comment-form">
                <input type="text" id="comment-input" class="form-control" placeholder="Add a comment...">
                <button id="comment-btn">Comment</button>
            </form>
        </section>

            </div>
        </div>
    </div>
</div>




    <script src="script.js"></script>

@endsection
