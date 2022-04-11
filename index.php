<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://kit.fontawesome.com/64ff4cf3fa.js" crossorigin="anonymous"></script>
        <title>O.G.G Bouw g</title>
    </head>
    <body>
        <!-- Seperate navigation file -->
        <?php include("php/nav.php") ?>
        <header class="main-header">
            <div class="hero-text">
                <h1 class="heading-text">Bouw volgens uw regels.</h1>
                <h2>Verschillende behoeften vragen om een andere aanpak.</h2>
                <a href="projects.php">Bekijken</a>
            </div>
            <div class="scroll-button-wrap">
                <div class="scroll-button-text"><span>Scroll down</span></div>
                <a href="#About"><img href="#About" class="scroll-btn" src="img/paint-roller.svg"></img></a>
            </div>
        </header>
        <main>
            <section id="About" class="bg-light">
                <div class="container">
                    <h1>Wie zijn we...</h1>
                    <div class="split">
                        <div class="reveal2">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque doloremque quasi qui
                                numquam cumque. Veniam eius veritatis fuga voluptates perspiciatis optio fugiat
                                dignissimos vitae. Doloremque placeat, laudantium mollitia libero quo magni illum
                                incidunt, voluptate fuga perferendis quas quisquam. Aspernatur voluptate sapiente nemo
                                dolor culpa officia, impedit dolorum ea et fuga, natus mollitia, sit explicabo
                                architecto! Saepe dolorum, fugit commodi quod delectus eaque sit <strong>Nederland</strong> aliquam aut tempore
                                molestiae ratione pariatur ea nulla accusamus ut optio qui velit modi necessitatibus
                                maxime soluta ad eius, reprehenderit vitae. Eum quidem perspiciatis voluptate eligendi
                                aspernatur, ab nostrum quod alias! Neque similique corporis sunt voluptate facere!
                            </p>
                            <h1>Wat we doen</h1>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum veritatis non quam quae dolorem quisquam eveniet impedit doloremque beatae molestiae cupiditate repellat suscipit at accusamus possimus rem voluptatem sed, sunt expedita earum, laborum voluptate, obcaecati delectus accusantium? Numquam nemo obcaecati alias. Sint vel sunt ad consequatur quas sed? Error, vitae!
                            </p>
                        </div>
                        <div class="nl-map reveal3">
                            <div class="pinpoint-location">
                                <i class="fa-solid fa-location-dot fa-2x"></i>
                                <div class="tooltip">Werken plaats<br /> Locatie: Nijmegen</div>
                            </div>
                            <img src="img/cafuego-Nederland.svg" alt="Nederland kaart" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Parallax photo -->
                <div class="fixed-img">
                     <div class="card">
                        <div class="card-image"></div>
                        <div class="card-svg">
                            <img src="img/drillimg.svg" alt="" srcset="">
                        </div>
                        <div class="card-text">
                            <span class="description">Description</span>
                            <h2>Post One</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis molestias officiis voluptatum omnis aliquid nobis cupiditate quibusdam.</p>
                        </div>
                        <div class="card-other"></div>
                    </div>
                    
                </div>

                <section id="projects">
                <div class="container__projects">
                    <div class="split space-around">
                        <h1>Alle soorten renovaties</h1>
                        <div class="btn-checkall-wrapper">
                            <a class="btn-checkall" href="projects.php"><span>Bekijk alle</span><i class="fa-solid fa-chevron-right "></i></i></a>
                        </div>
                    </div>
                    <h2>Verschillende behoeften vragen om een ​​andere aanpak.</h2>
                    <div class="projects-gallery">
                        <div class="projects-grid-item-1 reveal"><img data-tilt data-tilt-glare data-tilt-max-glare="0.8" src="img/bouw/photo_02.jpg" alt=""><p>Ovo je slika 1</p></div>
                        <div class="projects-grid-item-2 reveal"><img data-tilt src="img/bouw/photo_02.jpg" alt=""><p>Ovo je slika 2</p></div>
                        <div class="projects-grid-item-3 reveal"><img data-tilt src="img/bouw/photo_02.jpg" alt=""><p>Ovo je slika 3</p></div>
                        <div class="projects-grid-item-4 reveal"><img data-tilt src="img/bouw/photo_02.jpg" alt=""><p>Ovo je slika 4</p></div>
                        <div class="projects-grid-item-5 reveal"><img data-tilt src="img/bouw/photo_02.jpg" alt=""><p>Ovo je slika 5</p></div>
                        <div class="projects-grid-item-6 reveal"><img data-tilt src="img/bouw/photo_02.jpg" alt=""><p>Ovo je slika 6</p></div>
                       
                    </div>
                </div>
            </section>
        </main>

        <!-- Seperate footer file -->
        <?php include("php/footer.php") ?>

        <!-- SCRIPTS -->
        <script src="js/library/jquery-3.6.0.js"></script>
        <script src="js/library/vanilla-tilt.js"></script>
        <script src="js/js.min.js"></script>
        <!-- <script src="js/smoothScroll.js"></script> -->
        <!-- <script src="js/domready.js"></script>
        <script src="js/nav-trns-toggle.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/animate_scroll.js"></script>
        <script type="text/javascript" src="js/vanilla-tilt.js"></script> -->
    </body>
</html>
