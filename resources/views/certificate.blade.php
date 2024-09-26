<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Certificate</title>

    <script>
        $backgroundPath = asset('img/certificate.avif');

    </script>

    <style>
        /* Reset default margin and padding */
        body,
        html {
            margin: 0;
            padding: 0;
        }

        /* A4 paper size: 210mm x 297mm */
        .certificate-container {
            width: 184mm;
            height: 120mm;
            position: relative;
            border: 10px solid #ddd;
            padding: 40px;
            box-sizing: border-box;
            /* background-image: url('{{ asset('img/certificate.avif') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; */
            background-attachment: fixed;
            -webkit-print-color-adjust: exact;

        }

        .certificate-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .certificate-header h1 {
            font-size: 36px;
            color: #1e33a4d1;
            font-family: 'fangsong';
        }

        .certificate-header h2 {
            font-size: 24px;
            font-family: 'fangsong';
        }

        .certificate-body {
            text-align: center;
            margin-top: 30px;
            font-size: 18px;
        }

        /* Table for Authentication Code and Signature alignment */
        .auth-sign {
            margin-top: 50px;
        }

        .signature {
            border-top: 1px solid #000;
            padding-top: 5px;
            width: 200px;
            text-align: center;
        }

        /* A4 size - 210mm x 297mm */
        @page {
            size: A4;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="certificate-container">
        <div class="certificate-header">
            <h1>Certificate of Achievement</h1>
            <p>This is to certify that</p>
            <h2>{{$name}}</h2>
            <p>of Course <strong>{{$coursename}}</strong></p>
        </div>

        <div class="certificate-body">
            <p>has successfully achieved a grade of <strong>{{$grade}}</strong></p>
            <p>with a total score of <strong>{{$marks}}</strong></p>
        </div>

        <div class="auth-sign" style="margin-left: 80px !important">
            <table width="100%">
                <tr style="margin-left: 50px">
                    <td><strong>Authentication Code:</strong> 112334</td>
                    <td style="text-align: right;">
                        <div class="signature">Signature</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
