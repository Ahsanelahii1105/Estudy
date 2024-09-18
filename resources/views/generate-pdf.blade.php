<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            background-color: #f4f4f4;
            /* min-height: 100vh; */
        }

        header {
            background-color: gray;
            width: 100%;
            text-align: center;
            padding: 10px;
            color: white;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .container {
            display: flex;

            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }

        .content {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* margin-right: 20px; */
            width: 980px;
        }

        .term-info {
            font-weight: bold;
            font-size: 1.3rem;
        }

        .question-answer {
            margin-top: 20px;
            text-align: center;
        }


        iframe {
            width: 100%;
            height: 100%;
        }

        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                align-items: center;

            }

            .content {
                margin-right: 0;

                width: 100%;
            }


        }

        @media (max-width: 200px) {
            header h1 {
                font-size: 2rem;
            }

            .term-info {
                font-size: 1.1rem;
            }
        }

        .general-instructions {
            text-align: left;
            margin-top: 20px;
            font-size: 1rem;
            line-height: 1.5;
        }

        .question-a {
            margin-top: 20px;
            text-align: center;
        }

        .question-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .question-table th,
        .question-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .question-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <header>
        <h1>{{$title}}</h1>
    </header>

    <div class="container-fluid mt-3">



        <div class="row mt-5 text-center">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center">
                <h2>CBSE Class 10 Maths Basic Sample Paper</h2>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row text-center">
            <div class="col-md-4"></div>
            <div class="col-md-4 ">
                <p class="term-info">Sample Question Paper</p>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row text-center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4 class="term-info"> Term 2 for 2024-25</h4>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-5 text-center">
                <p class="term-info">Mathematics - Basic (241)</p>
            </div>
            <div class="col-md-4">
                <p class="term-info" style="margin-left: 40px;">TERM II</p>
            </div>
            <div class="col-md-2">
                <p class="term-info">Class-X</p>
            </div>
        </div>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5">
                    <h4 style="margin-left: 40px;">Question/Answer Section</h4>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">

                    <div class="general-instructions">
                        <h3>General Instructions:</h3>
                        <p>1. The question paper consists of 14 questions divided into 3 sections A, B, C.</p>
                        <p>2. Section A comprises of 6 questions of 2 marks each. Internal choice has been provided in
                            two questions.</p>
                        <p>3. Section B comprises of 4 questions of 3 marks each. Internal choice has been provided in
                            one question.</p>
                        <p>4. Section C comprises of 4 questions of 4 marks each. An internal choice has been provided
                            in one question. It contains two case study based questions.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <div class="question-a">
                        <h3>Section A</h3>
                        <table class="question-table">
                            <thead>
                                <tr>
                                    <th>Q. No.</th>
                                    <th>Question</th>
                                    <th>Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Find the roots of the quadratic equation \(3x^2 - 7x - 6 = 0\). OR Find the
                                        values of k for which the quadratic equation \(3x^2 + kx + 3 = 0\) has real and
                                        equal roots.</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Three cubes each of volume 64 cm³ are joined end to end to form a cuboid. Find
                                        the total surface area of the cuboid so formed.</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>An inter-house cricket match was organized by a school. Distribution of runs
                                        made by the students is given below. Find the median runs scored.</td>
                                    <td>2</td>
                                </tr>
                                <!-- You can continue adding more rows similarl -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <div class="question-a">
                        <h3>Section B</h3>
                        <table class="question-table">
                            <thead>
                                <tr>
                                    <th>Q. No.</th>
                                    <th>Question</th>
                                    <th>Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4</td>
                                    <td>An AP 5, 8, 11…has 40 terms. Find the last term. Also find the sum of the last
                                        10
                                        terms.</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>A tree is broken due to the storm in such a way that the top of the tree touches
                                        the
                                        ground and makes an angle of 300 with the ground. Length of the broken upper
                                        part
                                        of the tree is 8 meters. Find the height of the tree before it was broken.
                                        <br>
                                        <h5>OR</h5>Two poles of equal height are standing opposite each other on either
                                        side
                                        of the
                                        road 80m wide. From a point between them on the road the angles of elevation of
                                        the top of the two poles are respectively 600 and 300
                                        . Find the distance of the point
                                        from the two poles
                                    </td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>PA and PB are the tangents drawn to a circle with centre O. If PA= 6 cm and
                                         APB=600
                                        , then find the length of the chord AB.</td>
                                    <td>5</td>
                                </tr>
                                <!-- You can continue adding more rows similarly  -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="question-a">
                        <h3>Section C</h3>
                        <table class="question-table">
                            <thead>
                                <tr>
                                    <th>Q. No.</th>
                                    <th>Question</th>
                                    <th>Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4</td>
                                    <td>Construct two concentric circles of radii 3cm and 7cm. Draw two tangents to the
                                        smaller circle from a point P which lies on the bigger circle.
                                        <br>
                                        <h5>OR</h5>Draw a pair of tangents to a circle of radius 6cm which are inclined
                                        to each other at
                                        an angle of 600
                                        . Also find the length of the tangent.
                                    </td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>A lighthouse is a tall tower with light near the top. These are often built on
                                        islands,
                                        coasts or on cliffs. Lighthouses on water surface act as a navigational aid to
                                        the
                                        mariners and send warning to boats and ships for dangers. Initially wood, coal
                                        would
                                        be used as illuminators. Gradually it was replaced by candles, lanterns,
                                        electric lights.
                                        Nowadays they are run by machines and remote monitoring.
                                        Prongs Reef lighthouse of Mumbai was constructed in 1874-75. It is approximately
                                        40 meters high and its beam can be seen at a distance of 30 kilometres. A ship
                                        and
                                        a boat are coming towards the lighthouse from opposite directions. Angles of
                                        depression of flash light from the lighthouse to the boat and the ship are 30
                                        0 and 60
                                        0
                                        respectively.

                                    </td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Which of the two, boat or the ship is nearer to the light house. Find its
                                        distance from the lighthouse?</td>
                                    <td>5</td>
                                </tr>
                                <!-- You can continue adding more rows similarly -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

</html>
