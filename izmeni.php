<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Izmeni</title>
</head>

<body>

<div class="container">
        <div class="row">
            <div class="col-12">
                <header class="mb-4">
                    <nav class="navbar translucent-card fixed-top">
                        <a class="navbar-brand" href="panel.php">Aranzmani</a>
                        <a class="navbar-brand" href="dodaj_aranzman.php">Dodavanje Aranzmana</a>
                        <a href="./php/logout.php" class="navbar-item">Logout</a>
                    </nav>
                </header>


    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">

                <div class="card translucent-card text-white">
                    
                    <div class="card-body">
                    <?php
                    include_once("php/dbconnection.php");
                    $aranzman_id = $_POST["aranzman_id"];
                    
                    $query = "SELECT * FROM aranzmani WHERE id='$aranzman_id'";
                     $result = mysqli_query($mysqli, $query);
    
                     while ($aranzmani = mysqli_fetch_assoc($result)) {

                        ?>
                        <form method="post" action="php/izmeni_aranzman.php">
                        <table class="table table-dark">
                           
                              <tr>
                                    <td><input type="hidden" class="form-control" name="id" value=<?php echo $aranzmani['id'] ?>></td>
                              </tr>
                              <tr>
                                 <td><input type="text" class="form-control" name="aranzman_naziv" value=<?php echo $aranzmani['naziv'] ?>></td>
                              </tr>
                              <tr>
                                 <td><input type="text" class="form-control" name="aranzman_destinacija" value=<?php echo $aranzmani['destinacija'] ?>></td>
                              </tr>
                              <tr>
                                 <td><input type="text" class="form-control" name="aranzman_cena" value=<?php echo $aranzmani['cena'] ?>></td>
                              </tr>
                              <tr>
                                 <td><input type="number" class="form-control" name="aranzman_rezervacija" value=<?php echo $aranzmani['rezervacija'] ?>></td>
                              </tr>
             
                           
                        </table>
                        
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Izmeni</button>
                        </div>
                        </form>
                     <?php } ?>
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