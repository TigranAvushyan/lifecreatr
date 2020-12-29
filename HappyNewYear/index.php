<?php
if (date("Y") != '2021') {
    header('Location: http://tigran.site/timer/');
    exit;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Happy New Year</title>
    <style>
        body{
            overflow: hidden;
        }
        .newYear {
            font-size: 7em;
            animation: title 2s;
            text-align: center;
            color: white;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .red {
            color: #E63946
        }
    </style>
</head>
<body>
<div class="newYear">
    <span>Happy New <span class="red">2021</span> Year</span>
</div>
<script>
    setTimeout(() => {
      window.location.href = 'http://www.tigran.site/'
    }, 5000)
</script>
</body>
</html>