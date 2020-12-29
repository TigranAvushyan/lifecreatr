<?php
if (date("Y") == '2021') {
    header('Location: http://tigran.site/');
    exit;
}
clearstatcache();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Lifecreatr</title>
    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body>
<div class="time"></div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>