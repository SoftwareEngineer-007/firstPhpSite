<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Feedback form</title>
</head>

<body>

<?php require "blocks/header.php" ?>

<div class="container mt-5">
    <h3>Feedback form</h3>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Input E-mail" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Input you message"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Send</button>
    </form>
</div>

<?php require "blocks/footer.php" ?>

</body>
</html>