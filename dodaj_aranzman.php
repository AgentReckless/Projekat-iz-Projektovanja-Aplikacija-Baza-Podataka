<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Dodaj aranzman</title>
</head>

<body>

<div class="container">
        <div class="row">
            <div class="col-12">
                <header class="mb-4">
                    <nav class="navbar translucent-card fixed-top">
                        <a class="navbar-brand" href="index.php">Aranzmani</a>
                        <a href="./php/logout.php" class="navbar-item">Logout</a>
                    </nav>
                </header>


    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">

                <div class="card translucent-card text-white">
                    <div class="card-header">Dodaj Aranzman</div>
                    <div class="card-body">
                        <p class="card-text">

                        
                        <form action="php/dodaj_aranzman.php" method="post">
                            <div class="form-group">
                                <label for="naziv">Naziv:</label>
                                <input type="text" name="naziv" class="form-control" placeholder="naziv" required>
                            </div>
                            <div class="form-group">
                                <label for="destinacija">Destinacija:</label>
                                <input type="text" name="destinacija" class="form-control" placeholder="destinacija" required>
                            </div>
                            <div class="form-group">
                                <label for="cena">Cena:</label>
                                <input type="text" name="cena" class="form-control" placeholder="cena" required>
                            </div>
                            <?php
                        if(isset($_REQUEST["success"]))
                            if($_REQUEST["success"] == 1){
                                echo '<div class="alert alert-success" role="alert">';
                                echo 'Uspesno dodat aranzman!';
                                echo '</div>';
                            }
                        
                        ?>
                        <button type="submit" class="btn btn-success">Dodaj</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-2">

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>