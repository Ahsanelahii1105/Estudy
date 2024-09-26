<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Study - Quiz</title>

    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
  }
  .table-responsive {
    margin: 30px 0;
  }
  .table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
  }
  .table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
  }
  .table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
  }
  .search-box {
    position: relative;
    float: right;
  }
  .search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
  }
  .search-box input:focus {
    border-color: #3FBAE4;
  }
  .search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
  }
  table.table tr th, table.table tr td {
    border-color: #e9e9e9;
  }
  table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
  }
  table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
  }
  table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
  }
  table.table td:last-child {
    width: 130px;
  }
  table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
  }
  table.table td a.view {
    color: #03A9F4;
  }
  table.table td a.edit {
    color: #FFC107;
  }
  table.table td a.delete {
    color: #E34724;
  }
  table.table td i {
    font-size: 19px;
  }
  .pagination {
    float: right;
    margin: 0 0 5px;
  }
  .pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
  }
  .pagination li a:hover {
    color: #666;
  }
  .pagination li.active a {
    background: #03A9F4;
  }
  .pagination li.active a:hover {
    background: #0397d6;
  }
  .pagination li.disabled i {
    color: #ccc;
  }
  .pagination li i {
    font-size: 16px;
    padding-top: 6px
  }
  .hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
  }

    </style>
</head>
<body>
    <div style="width: 100%; height: 600px; background-size: 100% 100% !important; background: url('../img/quizimg.jpg');">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3" style="padding-top: 88vh">
                    <a href="/quiz/question"><button style="width: 130px" class="btn btn-primary">Teacher</button> </a>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

    </div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
