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
            background-color: #f4f4f4;
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

        .container-fluid {
            margin: 20px auto;
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

        .general-instructions {
            text-align: left;
            margin-top: 20px;
            font-size: 1rem;
            line-height: 1.5;
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

        /* Responsive Design */
        @media (max-width: 900px) {
            header h1 {
                font-size: 2rem;
            }

            .term-info {
                font-size: 1.1rem;
            }

            .general-instructions h3,
            .question-a h3 {
                font-size: 1.5rem;
            }
        }

        /* For A4 PDF printing */
        @media print {
            @page {
                size: A4;
                margin: 20mm;
            }

            body {
                background-color: white;
            }

            header h1 {
                font-size: 2rem;
            }

            .container-fluid {
                max-width: 100%;
                padding: 0;
            }

            .term-info {
                text-align: center;
            }

            .question-a h3 {
                margin-top: 10px;
                font-size: 1.8rem;
                text-align: center;
            }

            .general-instructions h3,
            .question-a h3 {
                text-align: center;
            }

            .general-instructions p {
                font-size: 1rem;
            }

            .question-table th,
            .question-table td {
                padding: 6px;
            }

            .question-table th {
                font-size: 1rem;
            }

            .question-table td {
                font-size: 0.9rem;
            }

            /* Hide irrelevant elements */
            iframe {
                display: none;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>{{ $title }}</h1>
    </header>

    <div class="container-fluid mt-3">
        <div class="row mt-5 text-center">
            <div class="col-md-12">
                <h2>E-Study {{$title}}</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <p class="term-info">Sample Question Paper</p>
            </div>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-md-4">
                <p class="term-info">{{$subjectname}}</p>
            </div>
            <div class="col-md-4">
                <p class="term-info">{{$class}}</p>
            </div>
        </div>

        <div class="container-fluid mt-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h4>Question/Answer Section</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="general-instructions">
                        <h3>General Instructions:</h3>
                        <p>1. The question paper consists of 14 questions divided into 3 sections A, B, C.</p>
                        <p>2. Section A comprises of 6 questions of 2 marks each. Internal choice has been provided in two questions.</p>
                        <p>3. Section B comprises of 4 questions of 3 marks each. Internal choice has been provided in one question.</p>
                        <p>4. Section C comprises of 4 questions of 4 marks each. It contains two case study based questions.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                    <td>{{$a_section_question}}</td>
                                    <td>{{$a_awnser}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>{{$a_section_questiontwo}}</td>
                                    <td>{{$a_awnsertwo}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>{{$a_section_questionthree}}</td>
                                    <td>{{$a_awnserthree}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>{{$a_section_questionfour}}</td>
                                    <td>{{$a_awnserfour}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>{{$a_section_questionfive}}</td>
                                    <td>{{$a_awnserfive}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                    <td>1</td>
                                    <td>{{$b_section_question}}</td>
                                    <td>{{$b_awnser}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>{{$b_section_questiontwo}}</td>
                                    <td>{{$b_awnsertwo}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>{{$b_section_questionthree}}</td>
                                    <td>{{$b_awnserthree}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>{{$b_section_questionfour}}</td>
                                    <td>{{$b_awnserfour}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>{{$b_section_questionfive}}</td>
                                    <td>{{$b_awnserfive}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                    <td>1</td>
                                    <td>{{$c_section_question}}</td>
                                    <td>{{$c_awnser}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>{{$c_section_questiontwo}}</td>
                                    <td>{{$c_awnsertwo}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>{{$c_section_questionthree}}</td>
                                    <td>{{$c_awnserthree}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>{{$c_section_questionfour}}</td>
                                    <td>{{$c_awnserfour}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>{{$c_section_questionfive}}</td>
                                    <td>{{$c_awnserfive}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>{{$c_section_question}}</td>
                                    <td>{{$c_awnser}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
