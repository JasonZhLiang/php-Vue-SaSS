<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="./dist/aapp.css">

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <title>my aapp</title>
</head>
<body>

    <div id="aapp">

        <?php require('./layout.php'); ?>
<!--        <iframe src="./layout.php"></iframe>  using iframe is not a good solution for php inside html -->

        <!--<router-link tag="li" to="/" exact>--><!--because we pull in vue router, so we can now use this router-link component -->
            <!--<a>Home</a>-->
        <!--</router-link>-->
        <!--<router-link tag="li" to="/about">-->
            <!--<a>About</a>-->
        <!--</router-link>-->

        <section class="section">
            <div class="container">

                <router-view></router-view>

            </div>
        </section>

    </div>

    <script src="./dist/aapp.js"></script><!-- Vue SPA essential: Routing -->
</body>
</html>