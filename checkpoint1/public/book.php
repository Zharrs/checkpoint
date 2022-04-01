<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/book.css">
    <title>Checkpoint PHP 1</title>
</head>
<body>

<?php include 'header.php'; ?>

<main class="container">

    <section class="desktop">
        <img src="image/whisky.png" alt="a whisky glass" class="whisky"/>
        <div class="pages">
            <div class="page leftpage">
                Add a bribe
                <form action="/ma-page-de-traitement" method="post">
                    <div>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div>
                        <label for="endettement">endettement&nbsp;:</label>
                        <input type="int" id="endettement" name="endettement" required>
                    </div>
                    <input type="submit" value="pay !">
                </form>
            </div>
            <div class="page rightpage">
                <a herf=checkpoint1.sql">Add </a>>
            </div>
        </div>
        <img src="image/inkpen.png" alt="an ink pen" class="inkpen"/>
    </section>
</main>
</body>
</html>

