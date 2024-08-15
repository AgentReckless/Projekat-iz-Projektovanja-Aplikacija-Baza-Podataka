<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Strana Registracije</title>
</head>

<body>

<div class="container">
        <div class="row">
            <div class="col-12">
                <header class="mb-4">
                    <nav class="navbar translucent-card fixed-top">
                        <a class="navbar-brand" href="index.php">Aranzmani</a>
                        </button>
                    </nav>
                </header>


    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">

                <div class="card translucent-card text-white">
                    <div class="card-header">Strana Registracije</div>
                    <div class="card-body">
                        <p class="card-text">

                            <form action="php/register.php" method="post">
                                <div class="form-group">
                                    <label for="ime">Ime:</label>
                                    <input type="text" name="ime" class="form-control" placeholder="Unesi ime"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="prezime">Prezime:</label>
                                    <input type="text" name="prezime" class="form-control" placeholder="Unesi prezime"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Unesi email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Sifra:</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Unesi sifru" required>
                                </div>
                                <div class="form-group">
                                    <label for="passwordre">Ponovi Sifru:</label>
                                    <input type="password" name="passwordre" class="form-control"
                                        placeholder="Ponovo unesi sifru" required>
                                </div>
                                <div class="form-group">
                                    <label for="about">O:</label>
                                    <textarea class="form-control" name="about" rows="3"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Posalji</button>
                            </form>
                        </p>
                    </div>
                    <div class="card-footer">
                        <?php

                        if(isset($_REQUEST["error"])){
                            if($_REQUEST["error"] == 1){
                                echo '<div class="alert alert-danger" role="alert">';
                                echo 'Sifre se ne podudaraju!';
                                echo '</div>';
                            } elseif($_REQUEST["error"] == 2){
                                echo '<div class="alert alert-danger" role="alert">';
                                echo 'Email vec u upotrebi!';
                                echo '</div>';

                            }
                        }


                        ?>



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