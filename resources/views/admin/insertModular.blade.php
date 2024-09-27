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
            <label for="b_section_question" class="form-label">B_section_question</label>
            <input type="text" class="form-control" id="b_section_question" name="b_section_question" required>
        </div>

        <div class="mb-3">
            <label for="b_awnser" class="form-label">B_awnser</label>
            <input type="text" class="form-control" id="b_awnser" name="b_awnser" required>
        </div>

        <div class="mb-3">
            <label for="c_section_question" class="form-label">C_section_question</label>
            <input type="text" class="form-control" id="c_section_question" name="c_section_question" required>
        </div>

        <div class="mb-3">
            <label for="c_awnser" class="form-label">c_awnser</label>
            <input type="text" class="form-control" id="c_awnser" name="c_awnser" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
