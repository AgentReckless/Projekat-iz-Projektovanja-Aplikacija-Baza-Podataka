<?php
session_start();
include_once("php/dbconnection.php");
if (!isset($_SESSION["id"])) {
    header("Location: index.php?error=2");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Aranzmani</title>
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
                    <div class="card translucent-card text-white">
                        <div class="card-header translucent-card">Lista Aranzmana</div>
                        <div class="card-body translucent-card">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Naziv</th>
                                        <th>Destinacija</th>
                                        <th>Cena</th>
                                        <th>Rezervacija</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM aranzmani";
                                    $result = mysqli_query($mysqli, $query);

                                    if (!$result) {
                                        die('Database connection error!');
                                    }

                                    while ($aranzmani = mysqli_fetch_assoc($result)) {

                                        ?>

                                        <tr>
                                            <td><?php echo $aranzmani['id'] ?></td>
                                            <td><?php echo $aranzmani['naziv'] ?></td>
                                            <td><?php echo $aranzmani['destinacija'] ?></td>
                                            <td><?php echo $aranzmani['cena'] ?></td>
                                            <td><?php echo $aranzmani['rezervacija'] ?></td>
                                            <td>
                                               <form method="post" action="php/rezervisi_aranzman.php">
                                                   <input type="hidden" name="aranzman_id" value=<?php echo $aranzmani['id'] ?>>
                                                   <button type="submit" class="btn btn-success">Rezervisi</button>
                                               </form>
                                            </td>
                                            <?php
                                            if($aranzmani['rezervacija']>0){
                                                echo '
                                                <td>
                                                   <form method="post" action="php/otkazi_aranzman.php">
                                                       <input type="hidden" name="aranzman_id" value="'. $aranzmani['id'] .'" >
                                                       <button type="submit" class="btn btn-success">Otkazi</button>
                                                   </form>
                                                </td> ';
                                            }
                                            ?>
                                            <td>
                                               <form method="post" action="php/izbrisi_aranzman.php">
                                                   <input type="hidden" name="aranzman_id" value=<?php echo $aranzmani['id'] ?>>
                                                   <button type="submit" class="btn btn-success">Izbrisi</button>
                                               </form>
                                            </td>
                                            <td>
                                               <form method="post" action="izmeni.php">
                                                   <input type="hidden" name="aranzman_id" value=<?php echo $aranzmani['id'] ?>>
                                                   <button type="submit" class="btn btn-success">Izmeni</button>
                                               </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
