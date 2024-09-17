<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Study - Quiz</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div
        style="width: 100%; height: 700px; background-size: 100% 100% !important; background: url('../img/bgquiz.jpg');">

        <div class="container-fluid">
            <form action="/quiz/submitans" method="post">
                @csrf
                <div class="row" style="padding-top: 30vh; color: white;">
                    <div class="col-md-3"></div>
                    <div class="col-md-4">
                        <h4>#{{ Session::get('nextq') }}: {{ $question->question }}</h4>
                        <input value="a" checked="true" type="radio" name="ans">(A)<small>
                            {{ $question->a }}</small><br>
                        <input value="b" type="radio" name="ans">(B)<small> {{ $question->b }}</small><br>
                        <input value="c" type="radio" name="ans">(C)<small> {{ $question->c }}</small><br>
                        <input value="d" type="radio" name="ans">(D)<small> {{ $question->d }}</small>
                        <input value="{{ $question->ans }}" style="visibility: hidden;" name="dbans">
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-4">
                        <button style="float: right" type="submit" class="btn btn-primary">Next</button>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
