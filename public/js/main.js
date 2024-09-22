(function ($) {
    "use strict";

    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });


    // Post carousel
    $(".post-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        center: true,
        autoplay: true,
        smartSpeed: 2000,
        dots: true,
        loop: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

})(jQuery);

// sidenav course page

function openNav() {
	document.getElementById("sideMenu")
		.style.width = "500px";

	document.getElementById("contentArea")
		.style.marginLeft = "350px";
}

function closeNav() {
	document.getElementById("sideMenu")
		.style.width = "0";
	document.getElementById("contentArea")
		.style.marginLeft = "0";
}

function showContent(content) {
	document.getElementById("contentTitle")
		.textContent = content + " Page";

	closeNav();
}

// video page
    // Get the video element
    const video = document.getElementById('video');

    // Get the video title and description elements
    const videoTitle = document.getElementById('video-title');
    const videoDescription = document.getElementById('video-description');

    // Get the video stats elements
    const viewCount = document.getElementById('view-count');
    const likeCount = document.getElementById('like-count');
    const dislikeCount = document.getElementById('dislike-count');

    // Get the video actions elements
    const likeBtn = document.getElementById('like-btn');
    const dislikeBtn = document.getElementById('dislike-btn');
    const shareBtn = document.getElementById('share-btn');

    // Get the comment list and form elements
    const commentList = document.getElementById('comment-list');
    const commentForm = document.getElementById('comment-form');
    const commentInput = document.getElementById('comment-input');
    const commentBtn = document.getElementById('comment-btn');

    // Set the video title and description
    videoTitle.textContent = 'YouTube Video Title';
    videoDescription.textContent = 'This is a sample YouTube video description.';

    // Set the video stats
    viewCount.textContent = '123,456 views';
    likeCount.textContent = '1,234 likes';
    dislikeCount.textContent = '12 dislikes';

    // Add event listeners to the video actions buttons
    likeBtn.addEventListener('click', () => {
        likeCount.textContent = parseInt(likeCount.textContent) + 1;
    });

    dislikeBtn.addEventListener('click', () => {
        dislikeCount.textContent = parseInt(dislikeCount.textContent) + 1;
    });

    shareBtn.addEventListener('click', () => {
        alert('Shared!');
    });

    // Add event listener to the comment form
    commentForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const commentText = commentInput.value.trim();
        if (commentText) {
            const newComment = document.createElement('li');
            newComment.innerHTML = `
      <img src="avatar.jpg" alt="Avatar">
      <div class="comment-text">
        <p>${commentText}</p>
        <span>Just now</span>
      </div>
    `;
            commentList.appendChild(newComment);
            commentInput.value = '';
        }
    });


    // discussion library
    
