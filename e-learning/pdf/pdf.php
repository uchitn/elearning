<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download PDF</title>


    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            color: #d7385e;
            font-size: 28px;
            margin-top: 0;
        }
        
        p {
            font-size: 18px;
        }
        
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #d7385e;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        a:hover {
            background-color: #c42a4b;
        }

        .pdfviewer-content{
            margin-bottom: 24px;
        }

        .pdfviewer-container{
            height: 400px;
            margin-top: 16px;
        }
    </style>
</head>
<body>
    <div class="container pdfviewer-content">
        <h2>Download PDF</h2>
        <p><b>Click below to download the PDF:</b></p>
        <a href="download.php?file=aabamilxa" role="button" type="button" target="_thapa">Download PDF now</a>
    </div>

  <div>
    <h2>PDF Files</h2>

    <div class="container pdfviewer-container">
    <iframe src="./aabamilxa.pdf" width="100%" height="100%"></iframe>
    </div>
  
  </div>






</body>



</html>
