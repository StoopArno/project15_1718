<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team 15">

    <title>Project 15_1718</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.css">


    <script type="text/javascript">

    </script>

</head>

<body>

<!-- Navigatie -->


<!-- Pagina inhoud -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <?php echo $hoofding; ?>
    </header>

    <hr>


    <!-- inhoud meegegeven in controller-->

    <div class="row">
        <div class="col-lg-12 hero-feature">
            <div class="thumbnail" style="padding: 20px">
                <div class="caption">
                    <p>
                        <?php echo $inhoud; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <hr>

    <!-- Footer -->
    <footer>
        <?php echo $footer ?>
    </footer>

</div>


</body>

</html>