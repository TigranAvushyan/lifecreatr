<?php
    if (date("Y") != '2021') {
        header('Location: http://tigran.site/timer/');
        exit;
    }

    clearstatcache();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lifecreatr</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
<div class="logo">
    Lifecreatr
</div>
<main>
    <div class="title">Live <span class="red">better</span> life<br>through stoics wisdom</div>
    <img src="assets/img/Stoics-know-eBook.png" alt="eBook" class="book">
    <div class="form">
        <div class="button">
            <span>Type your Email get your eBook</span>
        </div>
        <input type="email" name="email" class="email">
        <a href="Stoicism%20book.pdf" download class="btn">Download</a>
    </div>
</main>
<footer>
    <div class="sm-links">
        <a target="_blank" href="https://twitter.com/lifecreatr" class="twitter">
            <i class="fab fa-twitter"></i>
        </a>
        <a target="_blank" href="https://www.tiktok.com/@lifecreatr" class="tiktok">
            <i class="fab fa-tiktok"></i>
        </a>
        <a target="_blank" href="https://www.instagram.com/lifecreatr/" class="instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</footer>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="index.js"></script>
</body>
</html>