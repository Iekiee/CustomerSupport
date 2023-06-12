<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Customer Support</title>
</head>

<body>

<?php include 'header.php' ?>

<div class="supportQuestion">
            <h1>Any complications?</h1>
            <h2>Let us know!</h2>
        </div>

    <div class="indexContent">
    
        <form action="insert.php" method="post">

            <div class="personalInfo">
                <div class="name">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="email">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
            </div>

            <label for="message">Message:</label>
            <textarea type="message" id="message" name="message"></textarea>

            <div class="buttons">
                <input type="submit" value="submit">
                <input type="submit" value="refresh">
                <input type="submit" value="more">
            </div>

        </form>
    </div>

   <?php include 'footer.php' ?>
</body>

</html>