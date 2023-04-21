<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>
        <section class="center">
            <h1>Задание 1</h1>

            <form action="upload.php" method="post" enctype="multipart/form-data" class="ajax-form">
                <input type="file" name="filename" id="filename" class="btn">
                <input type="submit" value="Загрузить" class="btn btn-submit">
            </form>
        </section>
        <section class="center result hide">
            <div class="result_circle"></div>
            <div class="result_message"></div>
            <div class="result_output"></div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <script src="script.js"></script>
</body>
</html>