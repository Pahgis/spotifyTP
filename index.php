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
                <div style="height: 40%;">
                    <form action="" method="post">
                        <input type="text" name="" class="form-control" id="searchbar2">
                    </form>
                </div>
                <div>
                    <h3 class="text-white">Playlist</h3>
                    <ul class="playlist"></ul>
                </div>

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
                                    <input type="text" name="" class="menuMobile form-control" id="searchbar1">
                                </form>
                            </div>
                            <div class="col-3">
                                <button class="btn menuMobile" type="button" data-bs-toggle="collapse" data-bs-target="#logSign" aria-expanded="false" aria-controls="logSign"><i class="fa-regular fa-user"></i> </button>
                            </div>
                        </div>
                    </div>



                    <div class="container-fluid">



                        <div class="d-flex justify-content-end flex-column flex-md-row">
                            <button class="button-36 me-3" role="button">S'inscrire</button>
                            <button class="button-36" role="button">Se connecter</button>
                        </div>











                        <!-- CARD -->

                        <section class="d-flex cardlist accueil">
                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/IronMaiden.jpeg" class="card-img-top" alt="...">
                                </div>

                            </section>



                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="pochette/Hardwell.jpg" class="card-img-top" alt="...">
                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/Daft-Punk.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/GOT.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/Travisscott.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>

                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/eminem.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/Stickfigure.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/Boby.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/Scarface.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/bob.jpeg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/hollow.jpeg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/mutter.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/Testament.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>


                            <section id="">

                                <div class="card cardcenter m-5 cardBg">
                                    <img src="./pochette/Bob.jpg" class="card-img-top" alt="...">

                                </div>

                            </section>

                        </section>




                        <div>
                            <div class="imgAlbum"></div>
                            <div class="nomAlbum"></div>
                        </div>
                        <ul class="albumlist"></ul>





                    </div>




                    <!-- AJOUT TITRE CHANSON  -->
                    <div style="height: 20%;"></div>
                    <div>
                        <ul class="titreajout"></ul>
                    </div>

                </div>
                <div class="row lecteur  bg-secondary  rounded-3 mt-3">
                    <div class="col-4 d-flex align-items-center ">
                        <img class="albumImg rounded-3" src="" alt="">
                    </div>


                    <div class="col-4 d-flex text-center gap-3 justify-content-center align-items-center text-white">
                        <i class="fa-solid fa-backward fa-lg precedent"></i>

                        <i class="btn fa-regular fa-circle-play fa-lg play text-white"></i>
                        <i class="fa-regular fa-circle-pause pause btn fa-lg text-white"></i>
                        <i class="fa-solid fa-forward fa-lg suivant"></i>


                    </div>
                    <div class="col-4 d-flex text-center justify-content-center align-items-center">
                        <input type="range" class="form-range" id="volume" name="volume" min="0" max="10" />

                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>


    <audio class="audio" src=""></audio>
    <audio class="audio2" src=""></audio>
    <script src="./assets/js/playeraudio.js"></script>
    <script src="./assets/js/searchbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>