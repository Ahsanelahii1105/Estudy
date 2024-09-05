<!doctype html>
<html lang="en">

<head>
    <title>Mind Grower Education - Terms & Condition</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .modal-header {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .accept,
        .decline {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .accept:hover,
        .decline:hover {
            background-color: #3e8e41;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>


    <!-- Modal container -->
    <div id="terms-modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2>Terms and Conditions</h2>
                <button class="close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Introduction</h3>
                <p>Welcome to our website. By using our website, you agree to be bound by these Terms and Conditions.
                </p>
                <h3>Use of Website</h3>
                <p>You must use our website only for lawful purposes and in a way that does not infringe the rights of,
                    or restrict or inhibit the use and enjoyment of the website by any other person.</p>
                <h3>Intellectual Property</h3>
                <p>All intellectual property rights in and to the website, including but not limited to text, images,
                    and software, are owned by us or our licensors.</p>
                <h3>Disclaimer</h3>
                <p>We do not warrant that the website will be available at all times or that it will be free from errors
                    or viruses.</p>
                <h3>Limitation of Liability</h3>
                <p>We will not be liable for any loss or damage arising from your use of the website.</p>
                <h3>Governing Law</h3>
                <p>These Terms and Conditions will be governed by and construed in accordance with the laws of
                    [State/Country].</p>
            </div>
            <div class="modal-footer">
                <button class="accept">Accept</button>
                <button class="decline">Decline</button>
            </div>
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
<script>
    // Get the modal element
    const modal = document.getElementById('terms-modal');

    // Get the accept and decline buttons
    const acceptButton = document.querySelector('.accept');
    const declineButton = document.querySelector('.decline');

    // Get the close button
    const closeButton = document.querySelector('.close');

    // Add event listeners to the buttons
    acceptButton.addEventListener('click', () => {
        // Hide the modal
        window.location.href = "/register";
        // Add a cookie to indicate that the user has accepted the terms
        document.cookie = 'terms_accepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT';
    });

    declineButton.addEventListener('click', () => {
        // Hide the modal
        // modal.style.display = 'none';

        // Redirect the user to a different page
        window.location.href = "/register";
    });

    closeButton.addEventListener('click', () => {
        // Hide the modal
        modal.style.display = 'none';

        // Redirect the user to a different page
        window.location.href = "/register";
    });

    // Show the modal when the page loads
    window.onload = () => {
        modal.style.display = 'block';
    };
</script>
