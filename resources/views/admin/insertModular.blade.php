<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Insert Data for PDF</h2>
        <form action="{{ route('insertModular') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="subjectname" class="form-label">Subjectname</label>
                <input type="text" class="form-control" id="subjectname" name="subjectname" required>
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="text" class="form-control" id="class" name="class" required>
            </div>

            <div class="mb-3">
                <label for="a_section_question" class="form-label">A_section_question</label>
                <input type="text" class="form-control" id="a_section_question" name="a_section_question" required>
            </div>

            <div class="mb-3">
                <label for="a_awnser" class="form-label">A_awnser</label>
                <input type="text" class="form-control" id="a_awnser" name="a_awnser" required>
            </div>

            <div class="mb-3">
                <label for="a_section_questiontwo" class="form-label">A_section_questiontwo</label>
                <input type="text" class="form-control" id="a_section_questiontwo" name="a_section_questiontwo"
                    required>
            </div>

            <div class="mb-3">
                <label for="a_awnsertwo" class="form-label">A_awnsertwo</label>
                <input type="text" class="form-control" id="a_awnsertwo" name="a_awnsertwo" required>
            </div>

            <div class="mb-3">
                <label for="a_section_questionthree" class="form-label">A_section_questionthree</label>
                <input type="text" class="form-control" id="a_section_questionthree" name="a_section_questionthree"
                    required>
            </div>

            <div class="mb-3">
                <label for="a_awnserthree" class="form-label">A_awnserthree</label>
                <input type="text" class="form-control" id="a_awnserthree" name="a_awnserthree" required>
            </div>

            <div class="mb-3">
                <label for="a_section_questionfour" class="form-label">A_section_questionfour</label>
                <input type="text" class="form-control" id="a_section_questionfour" name="a_section_questionfour"
                    required>
            </div>

            <div class="mb-3">
                <label for="a_awnserfive" class="form-label">A_awnserfour</label>
                <input type="text" class="form-control" id="a_awnserfive" name="a_awnserfour" required>
            </div>

            <div class="mb-3">
                <label for="a_section_questionfour" class="form-label">A_section_questionfive</label>
                <input type="text" class="form-control" id="a_section_questionfour" name="a_section_questionfive"
                    required>
            </div>

            <div class="mb-3">
                <label for="a_awnserfive" class="form-label">A_awnserfive</label>
                <input type="text" class="form-control" id="a_awnserfive" name="a_awnserfive" required>
            </div>
            <br>
            <hr>
            <br>
            <div class="mb-3">
                <label for="b_section_question" class="form-label">B_section_question</label>
                <input type="text" class="form-control" id="b_section_question" name="b_section_question" required>
            </div>

            <div class="mb-3">
                <label for="b_awnser" class="form-label">B_awnser</label>
                <input type="text" class="form-control" id="b_awnser" name="b_awnser" required>
            </div>

            <div class="mb-3">
                <label for="b_section_questiontwo" class="form-label">B_section_questiontwo</label>
                <input type="text" class="form-control" id="b_section_questiontwo" name="b_section_questiontwo"
                    required>
            </div>

            <div class="mb-3">
                <label for="b_awnsertwo" class="form-label">B_awnsertwo</label>
                <input type="text" class="form-control" id="b_awnsertwo" name="b_awnsertwo" required>
            </div>

            <div class="mb-3">
                <label for="b_section_questionthree" class="form-label">B_section_questionthree</label>
                <input type="text" class="form-control" id="b_section_questionthree"
                    name="b_section_questionthree" required>
            </div>

            <div class="mb-3">
                <label for="b_awnserthree" class="form-label">B_awnserthree</label>
                <input type="text" class="form-control" id="b_awnserthree" name="b_awnserthree" required>
            </div>

            <div class="mb-3">
                <label for="b_section_questionfour" class="form-label">B_section_questionfour</label>
                <input type="text" class="form-control" id="b_section_questionfour" name="b_section_questionfour"
                    required>
            </div>

            <div class="mb-3">
                <label for="b_awnserfour" class="form-label">B_awnserfour</label>
                <input type="text" class="form-control" id="b_awnserfour" name="b_awnserfour" required>
            </div>

            <div class="mb-3">
                <label for="b_section_questionfive" class="form-label">B_section_questionfive</label>
                <input type="text" class="form-control" id="b_section_questionfive" name="b_section_questionfive"
                    required>
            </div>

            <div class="mb-3">
                <label for="b_awnserfive" class="form-label">B_awnserfive</label>
                <input type="text" class="form-control" id="b_awnserfive" name="b_awnserfive" required>
            </div>

            <br>
            <hr>
            <br>

            <div class="mb-3">
                <label for="c_section_question" class="form-label">C_section_question</label>
                <input type="text" class="form-control" id="c_section_question" name="c_section_question"
                    required>
            </div>

            <div class="mb-3">
                <label for="c_awnser" class="form-label">c_awnser</label>
                <input type="text" class="form-control" id="c_awnser" name="c_awnser" required>
            </div>

            <div class="mb-3">
                <label for="c_section_questiontwo" class="form-label">C_section_questiontwo</label>
                <input type="text" class="form-control" id="c_section_questiontwo" name="c_section_questiontwo"
                    required>
            </div>

            <div class="mb-3">
                <label for="c_awnsertwo" class="form-label">c_awnsertwo</label>
                <input type="text" class="form-control" id="c_awnsertwo" name="c_awnsertwo" required>
            </div>

            <div class="mb-3">
                <label for="c_section_questionthree" class="form-label">C_section_questionthree</label>
                <input type="text" class="form-control" id="c_section_questionthree"
                    name="c_section_questionthree" required>
            </div>

            <div class="mb-3">
                <label for="c_awnserthree" class="form-label">c_awnserthree</label>
                <input type="text" class="form-control" id="c_awnserthree" name="c_awnserthree" required>
            </div>

            <div class="mb-3">
                <label for="c_section_questionfour" class="form-label">C_section_questionfour</label>
                <input type="text" class="form-control" id="c_section_questionfour" name="c_section_questionfour"
                    required>
            </div>

            <div class="mb-3">
                <label for="c_awnserfour" class="form-label">c_awnserfour</label>
                <input type="text" class="form-control" id="c_awnserfour" name="c_awnserfour" required>
            </div>

            <div class="mb-3">
                <label for="c_section_questionfive" class="form-label">C_section_questionfive</label>
                <input type="text" class="form-control" id="c_section_questionfive" name="c_section_questionfive"
                    required>
            </div>

            <div class="mb-3">
                <label for="c_awnserfive" class="form-label">c_awnserfive</label>
                <input type="text" class="form-control" id="c_awnserfive" name="c_awnserfive" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
