<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Login page</title>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <header class="mb-4">
                    <nav class="navbar translucent-card fixed-top">
                        <a class="navbar-brand" href="index.php">Aranzmani</a>
                    </nav>
                </header>

    <div class="container">
    
        </div>
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">

                <div class="card translucent-card text-white">
                    <div class="card-header translucent-card">Login strana</div>
                    <div class="card-body translucent-card">
                        <p class="card-text">

                            <form action="php/log.php" method="post">
                                <div class="form-group">
                                    <label for="email">Mejl:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Unesi email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Sifra:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Sifra"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary">Uloguj se</button>
                                <button type="button" class="btn btn-primary"><a
                                        href="register.php">Registruj se</a></button>
                            </form>

                        </p>
                    </div>
                    <div class="card-footer translucent-card">
                        <?php
                    if(isset($_REQUEST["success"])){
                            if($_REQUEST["success"] == 1){
                                echo '<div class="alert alert-success" role="alert">';
                                echo 'Uspesno ste napravili nalog!';
                                echo '</div>';
                            }
                            elseif($_REQUEST["success"] == 2){
                                echo '<div class="alert alert-success" role="alert">';
                                echo 'Uspesno ste se izlogovali!';
                                echo '</div>';
                            }
                        }

                        if(isset($_REQUEST["error"])){
                            if($_REQUEST["error"] == 1){
                                echo '<div class="alert alert-danger" role="alert">';
                                echo 'Greska pri unosu!';
                                echo '</div>';
                            }elseif($_REQUEST["error"] == 2){
                                echo '<div class="alert alert-warning" role="alert">';
                                echo 'Sesija istekla, ulogujte se ponovo!';
                                echo '</div>';
                            }
                        }
                            
                            ?>

                    </div>
                </div>

            </div>
            <div class="col-3">

            </div>
        </div>
    </div>








   
</body>

</html>