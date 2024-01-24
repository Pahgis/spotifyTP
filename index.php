<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Document</title>
</head>

<body class="bg-dark">






    <div class="collapse" id="logSign">
        <div class="card card-body"><a href="">Log in / Sign In</a></div>
    </div>

    <div class="container-fluid border container-pc" style="height: 100vh;">
        <div class="row">
            <div class="col-3 border rounded-3 border-black m-3 biblio " style="height: 97vh;">
            </div>
            <div class="col-lg-9 col-12 principal my-3 ">
                <div class="bodyMobile border border-black rounded-3 overflow-scroll" style="height: 82vh;">
                    <div class="container-fluid menuMobile mt-3">
                        <div class="row">
                            <div class="col-3">
                                <button class="btn ">
                                    <i class="fa-solid fa-house-user"></i>
                                </button>
                            </div>
                            <div class="col-6">
                                <form action="" method="post">
                                    <input type="text" name="" class="menuMobile form-control" id="searchbar">
                                </form>
                            </div>
                            <div class="col-3">
                                <button class="btn menuMobile" type="button" data-bs-toggle="collapse" data-bs-target="#logSign" aria-expanded="false" aria-controls="logSign"><i class="fa-regular fa-user"></i> </button>
                            </div>
                        </div>
                    </div>

                        <div class="container-fluid d-flex justify-content-evenly flex-column flex-md-row">

                            <div class="text-center">
                                    <p class="fs-2">ALBUMS</p>
                            </div>

                            <div>
                            <button class="button-36" role="button">S'inscrire</button>
                            <button class="button-36" role="button">Se connecter</button>
                            </div>


                            <div>
                                    <img class="rounded mx-auto d-block mt-5 Boxshad" height="300px" src="./pochette/Bob.jpg">
                            </div>

                            <div>
                                    <img class="rounded mx-auto d-block mt-5 Boxshad" height="300px" src="./pochette/mutter.jpg">
                            </div>

                            <div>
                                    <img class="rounded mx-auto d-block mt-5 Boxshad" height="300px" src="./pochette/Boby.jpg">
                            </div>

                        </div>

                            <div>
                                    <img class="rounded mx-auto d-block mt-5 Boxshad" height="300px" src="./pochette/eminem.jpg">
                            </div>


                </div>
                    <div class="lecteur  bg-secondary  rounded-3 mt-3">

                </div>
                
            </div>
        </div>
    </div>




    <script src="./assets/js/playeraudio.js"></script>
    <script src="./assets/js/searchbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>