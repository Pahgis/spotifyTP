<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/authentification.css">
    <title>Document</title>
</head>
<body>
    


<div class="container">
    <div style="height: 35%" class="text-center">
        <h1>SpotifyTP</h1>
    </div>
    <div class="row text-center ">
        <div class="col-2 col-md-4"></div>
        <div class="col-8 col-md-4">

            <!--            CREATION DE COMPTE             -->

            <div class="signIn ">
            <h1>Inscription : </h1>
                <form action="./process/authentification/register.php" method="post" autocomplete="off">
                    <div>
                        <input class="form-control rounded-5 border border-3" type="text" name="pseudo" autocomplete="off" id="pseudo" placeholder="pseudo">
                    </div>
                    <div>
                        <input class="form-control rounded-5 border border-3 mt-2" type="email" name="email" autocomplete="off" id="email" placeholder="email">
                    </div>
                    <div>
                        <input class="form-control rounded-5 border border-3 mt-2" type="password" autocomplete="off" name="password" id="password" placeholder="Password">
                    </div>
                    <div>
                        <input class="form-control rounded-5 border border-3 mt-2" type="password" autocomplete="off" name="password_confirm" id="password_confirm" placeholder="Confirmer password">
                        <a href="#" class="link-primary switchoff">Deja un compte ?</a>
                    </div>
                    <div>
                        <button class="btn btncreate mt-4" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>

                 <!--            SE CONNECTER             -->

            <div class="logIn">
            <h1>Connexion : </h1>
                <form action="./process/authentification/login.php" method="post" autocomplete="off"  class="p-4 bg-yellow">
                    <div>
                        <input class="form-control rounded-5 border border-3" type="text" name="pseudo" autocomplete="off" id="pseudo" placeholder="Pseudo">
                    </div>
                    <div>
                        <input class="form-control rounded-5 border border-3 mt-2" type="password" autocomplete="off" name="password" id="password" placeholder="Password">
                        <a href="#" class="link-primary switchon" >Pas inscrit ? clique ici !</a>

                    </div>
                    <div>
                        <button class="btn btncreate mt-4" type="submit">Start !</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="/assets/js/login.js"></script>
</body>
</html>