<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <section class="form signup">
            <header>chat app</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"> error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First name </label>
                        <input name="fname" type="text" placeholder="first name" required>
                    </div>
                    <div class="field input">
                        <label>last name </label>
                        <input name="lname" type="text" placeholder="last name" required>
                    </div>
                    <div class="field input">
                        <label>email </label>
                        <input name="email" type="text" placeholder="email" required>
                    </div>
                    <div class="field input">
                        <label>password </label>
                        <input name="password" type="password" placeholder="password " required>
                        <i class="fa fa-eye fa-2x   show-pwd clickable"></i>
                    </div>
                    <div class="field image">
                        <label>image </label>
                        <input name="image" type="file" v>
                    </div>
                    <div class="field button">

                        <input type="submit" value="continue to chat">
                    </div>
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">login now</a></div>

        </section>
    </div>
    <script src="/js/pass-show-hide.js"></script>
    <script src="/js/signup.js"></script>
</body>

</html>