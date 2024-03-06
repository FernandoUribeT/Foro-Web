<?php
require_once './config/controllers.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>


<body class="flex">
    <!-- NAV -->
    <div class="bg-gray-200 min-h-screen">
        <nav class="flex flex-col bg-gray-200 w-24 p-4 justify-start items-center sticky top-0 min-h-screen">
            <img class="w-12 h-10 mt-2" src="/src/assets/logo.png" alt="">
            <ul class="flex flex-col gap-7 justify-between mt-10">
                <li class="w-10 h-10"><a href="#"><img class="rounded-lg" src="/src/assets/objetivos_img/obj2.jpg" alt="" class="w-full"></a></li>
                <li class="w-10 h-10"><a href="#"><img class="rounded-lg" src="/src/assets/objetivos_img/obj4.png" alt="" class="w-full"></a></li>
                <li class="w-10 h-10"><a href="#"><img class="rounded-lg" src="/src/assets/objetivos_img/obj13.png" alt="" class="w-full"></a></li>
                <li class="w-10 h-10"><a href="#"><img class="rounded-lg" src="/src/assets/objetivos_img/obj14.png" alt="" class="w-full"></a></li>
                <li class="w-10 h-10"><a href="#"><img class="rounded-lg" src="/src/assets/objetivos_img/obj10.png" alt="" class="w-full"></a></li>

                <!-- ADD BUTTON -->
                <li class="rounded-lg bg-blue-400 text-center"><a class=" text-4xl text-white" href="#">+</a></li>
            </ul>
            <div class=" flex flex-col gap-5 absolute bottom-5">
                <div class="text-gray-400 w-7 h-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path class="fill-current" d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z" />
                    </svg>
                </div>
                <div class="text-gray-400 w-8 h-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="fill-current" d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                    </svg>
                </div>

                <a href="http://localhost/For-Us/src/forum/logout.php">
                    <div class="text-gray-400 w-8 h-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="fill-current" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                        </svg>
                    </div>
                </a>
            </div>
        </nav>
    </div>

    <!-- ALL CONTENT -->
    <section class="w-full">

        <!-- HEADER -->
        <header class="flex justify-between items-center">
            <h1 class="text-black flex justify-center w-full text-3xl font-bold mt-5">FOR <span class="text-blue-500 ml-2">US</span></h1>
            <img class="w-11 h-10 bg-blue-500 rounded-full mr-10 mt-5" src="/src/assets/person-1.jpg" alt="">
        </header>

        <!-- MAIN -->
        <main class="flex justify-between items-center mt-20">

            <!-- INITIAL CARD -->
            <div id="initial-card" class="bg-gray-100 shadow-lg ml-20 mr-10 w-9/12 h-52 flex justify-start items-start relative rounded-xl">
                <img class="w-12 h-11 bg-blue-500 rounded-full absolute top-8 left-8" src="/src/assets/person-1.jpg" alt="">
                <textarea class="relative top-10 left-28 text-2xl text-gray-400 font-normal bg-gray-100 w-10/12 resize-none outline-none -h-28" rows="5" maxlength="380">Cuéntanos qué opinas...</textarea>

                <div class="flex absolute bottom-3 left-8 gap-2">
                    <a class="text-white font-semibold bg-gray-400 rounded-full px-4 py-1 text-center" href="">#NomasHambre</a>
                    <a class="text-white font-semibold bg-gray-400 rounded-full px-4 py-1 text-center" href="">#Acabemos</a>
                    <a class="text-white font-semibold bg-gray-400 rounded-full px-4 py-1 text-center" href="">#HambreCero</a>
                </div>
                <script>
                    const card = document.getElementById('initial-card')
                    const textArea = document.querySelector('textarea')
                    const maxlength = 250;

                    textArea.addEventListener('input', () => {
                        const value = textArea.value.length
                        if (value > maxlength) {
                            card.classList.remove('h-52')
                            card.classList.add('h-64')
                        } else {
                            card.classList.remove('h-64')
                            card.classList.add('h-52')
                        }
                    })

                    textArea.addEventListener("focus", function() {
                        if (this.value === "Cuéntanos qué opinas...") {
                            this.value = "";
                        }
                    });
                    textArea.addEventListener('blur', function() {
                        if (this.value === '') {
                            this.value = 'Cuéntanos qué opinas...';
                        }
                    });
                </script>
                <div class="flex absolute bottom-3 right-5 gap-2">
                    <div class="text-gray-400 w-8 h-8 pt-1 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path class="fill-current" d="M160 32c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160zM396 138.7l96 144c4.9 7.4 5.4 16.8 1.2 24.6S480.9 320 472 320H328 280 200c-9.2 0-17.6-5.3-21.6-13.6s-2.9-18.2 2.9-25.4l64-80c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l17.3 21.6 56-84C360.5 132 368 128 376 128s15.5 4 20 10.7zM192 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z" />
                        </svg>
                    </div>
                    <div class="text-gray-400 w-8 h-8 mr-3 pt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path class="fill-current" d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
                        </svg>
                    </div>
                    <a class="text-white font-semibold bg-blue-400 rounded-full px-7 py-1 text-center" href="">Enviar</a>
                </div>
            </div>

            <!-- OBJETIVE CARD -->
            <a class=" mr-10" href="#"><img class="rounded-lg w-48 h-52" src="/src/assets/objetivos_img/obj2.jpg" alt="" class="w-full"></a>

        </main>


        <!-- PUBLICATIONS SECTION -->
        <section class="grid grid-cols-2 ml-20 mt-16 w-9/12 gap-8">


            <!-- PROTOTIPO DE CARD -  RETIRAR DEL CODIGO Y USAR EN PHP PARA COMPONETIZAR -->

            <!-- CARD -->
            <div class="bg-gray-100 shadow-lg w-full rounded-xl flex flex-col relative mt-5 h-fit self-start">
                <!-- TOP CARD CONTENT -->
                <div class="flex mt-5 ml-5">
                    <img class="w-12 h-11 bg-blue-500 rounded-full top-8 left-8" src="/src/assets/person-1.jpg" alt="">
                    <div class="flex flex-col ml-5">
                        <h2 class="text-xl text-gray-400 font-semibold">Jose Joshua</h2>
                        <p class="text-gray-400">08:04 p.m</p>
                    </div>
                    <!-- CARD MENU -->
                    <div class="absolute right-5 top-0">
                        <p class="text-5xl text-gray-400">...</p>
                    </div>
                </div>

                <!-- CARD CONTENT -->
                <p class="text-gray-400 w-10/12 mx-auto text-xl mt-8">"Creo firmemente que la acción climática debe ser una prioridad mundial. proteger nuestro planeta para las generaciones futuras. ¡Es hora de que todos nos comprometamos a tomar medidas concretas y significativas!"</p>
                <a class="text-blue-500 underline text-xl w-10/12 mx-auto mt-2 mb-1" href="https://google.com">Naciones Unidas</a>
                <img class="w-10/12 mx-auto rounded-xl mt-5" src="/src/assets/card_img/obj2_img.jpg" alt="">

                <!-- CARD HASHTAGS -->
                <div class="flex gap-4 w-10/12 mx-auto mt-5">
                    <a class="text-white font-bold bg-gray-400 rounded-full px-4 py-1 text-center" href="">#NomasHambre</a>
                    <a class="text-white font-bold bg-gray-400 rounded-full px-4 py-1 text-center" href="">#Acabemos</a>
                </div>

                <!-- FOOTER CARD -->
                <div class="flex w-10/12 relative mt-10 mb-5 mx-auto">

                    <!-- BUTTONS FOOTER CARD -->
                    <div class="text-gray-400 w-8 h-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="fill-current" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                        </svg>
                    </div>

                    <div class="text-gray-400 w-7 h-7 ml-5 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="fill-current" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z" />
                        </svg>
                    </div>

                    <div class="text-gray-400 w-6 h-6 absolute right-10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="fill-current" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                        </svg>
                    </div>
                </div>
            </div>

        </section>

    </section>
</body>

</html>