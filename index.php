<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <!-- my styles -->
    <link href="./style.css">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body>
    <div id="app">


        <div >
            <nav class="navbar " style="background-color: #09131E;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./img/logo-spotify.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top w-100 ">

                    </a>
                </div>
            </nav>
            <main class="container-fluid position-relative p-3  " style="background-color: #202C3B;">
                <div class="container my-3  d-flex flex-wrap justify-content-center gap-3" style="margin-left: auto; margin-right: auto; ">

                    <div v-for="(albums,index) in Discs" class="card " style="width: 18rem; background-color: #14202F; " @click="overLay(index)">
                        <img :src="albums.poster" class="card-img-top w-100" alt="...">
                        <div class="card-body text-center text-white">
                            <div class=" fw-bolder fs-4 ">
                                {{albums.title}}

                            </div>
                            <div class=" fw-lighter">
                                {{albums.year}}
                            </div>
                            <div class="fw-light fs-5">
                                {{albums.author}}
                            </div>



                        </div>
                    </div>


                    
                    
                    
                </div>

                <div v-if="overFoto"  class=" popup d-flex justify-content-center align-items-center  bg-transparent">
                    <div class="card "  style="width: 18rem; background-color: #14202F;">
                        <img :src="clickedFoto.poster"  class="card-img-top w-100" alt="...">
                        <div class="card-body text-center text-white">
                            <div class=" fw-bolder fs-4 ">
                                {{clickedFoto.title}}

                            </div>
                            <div class=" fw-lighter">
                                {{clickedFoto.year}}
                            </div>
                            <div class="fw-light fs-5">
                                {{clickedFoto.author}}
                            </div>



                        </div>

                    </div>
                </div>

            </main>



        </div>



    </div>












    <!-- vue  -->
    <script src="./js/main.js"></script>

    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>