<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Explora') }}
        </h2>
        <div class="bg-white p-2">
            <img src="{{ asset('/images/explora.jpg') }}" alt="explora" class="w-40 h-40">
        </div>
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <section class="relative  bg-gray-100">
                    <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
                        <div class="absolute top-0 w-full h-full bg-center bg-cover"
                            style="background-image: url({{ asset('/images/collage.jpg') }});">
                            <span id="blackOverlay" class="w-full h-full absolute opacity-45 bg-black"></span>
                        </div>
                        <div class="container relative mx-auto">
                            <div class="items-center flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                                    <div class="pr-12">
                                        <h1 class="text-white font-semibold text-5xl">
                                            Descubre Argamasilla de Calatrava
                                        </h1>
                                        <p class="mt-4 text-lg text-white bg-gray-800 bg-opacity-30">
                                            Argamasilla de Calatrava cuenta con restos de una zona poblada desde el
                                            Paleolítico en el paraje llamado la laguna Blanca. Además, existe una tumba
                                            megalítica del Bronce conocida como “la sala de los moros”, y junto a ella
                                            las Pinturas Rupestres de la Ventana Natural, declaradas Bien de Interés
                                            Cultural.

                                            En cualquier caso, las primeras referencias escritas sobre el municipio
                                            actual datan de 1216, gracias al traslado de la Orden de Calatrava al
                                            Castillo de Calatrava la Nueva, que, actualmente, se ubica en Aldea del Rey.
                                            En ese momento, se creó un nuevo núcleo de asentamiento dentro de la
                                            política de poblamiento llevada a cabo por los calatravos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                            style="transform: translateZ(0px)">
                            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100">
                                </polygon>
                            </svg>
                        </div>
                    </div>
                    <section class="pb-10 bg-blueGray-200 -mt-24">
                        <div class="container mx-auto px-4">
                            <div class="flex flex-wrap">
                                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                        <div class="px-4 py-5 flex-auto">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                                <i class="fas fa-award"></i>
                                            </div>
                                            <h6 class="text-xl font-semibold">Gastronomía</h6>
                                            <p class="mt-2 mb-4 text-blueGray-500">
                                                Argamasilla de Calatrava dispone de una gastronomía variada, cuyos
                                                platos se elaboran con los productos naturales de las huertas. Destacan
                                                platos como el asadillo de tomate y pimiento rojo asados, el pisto
                                                manchego, el tiznao, el tasajo de carne de cabra, los huevos rabaneros,
                                                el moje de gañanes, los calandrajos, las migas, el arrope y el mostillo.
                                                El 29 de enero Santo Voto de la villa a los dos santos. Se elabora una
                                                comida popular, un guiso a base de patatas y bacalao.
                                                Domingo de Pentecostés. Se sale al campo a degustar el típico hornazo,
                                                que consiste en una torta de azucar dulce y un huevo o dos en el centro.
                                                Por cierto; El Quijote, de Cervantes se hacía mención a este hornazo manchego...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-4/12 px-4 text-center">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                        <div class="px-4 py-5 flex-auto">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-yellow-400">
                                                <i class="fas fa-retweet"></i>
                                            </div>
                                            <h6 class="text-xl font-semibold">Cultura</h6>
                                            <p class="mt-2 mb-4 text-blueGray-500">
                                                Argamasilla de Calatrava, al estar situada en pleno Camino histórico de
                                                Andalucía, ha sido considerada por algunos autores como “El lugar de La
                                                Mancha”.Sobresale la Iglesia de Nuestra Señora de la Visitación. Por
                                                otro lado, encontraremos
                                                la Ermita de los Santos Quirico y Julita, que popularmente son conocidos
                                                como “santitos”.
                                                También es importante la denominada Casa de la Inquisición.
                                                En las afueras del municipio, a menos de 2 km entre la cañada real
                                                soriana oriental y el río Tirteafuera se encuentra la “casa” de la
                                                patrona, el Santuario Virgen del Socorro. Naturalmente, es un bello
                                                paraje y un lugar de devoción que puede visitarse los fines de semanas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                        <div class="px-4 py-5 flex-auto">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                            <h6 class="text-xl font-semibold">Fiestas</h6>
                                            <p class="mt-2 mb-4 text-blueGray-500">
                                                *San Antón: 17 de enero
                                                *Santos Mártires (Quirico y Julita): 16 de junio su festividad y 29 de
                                                enero Santo Voto de la villa a los dos santos.
                                                *La Candelaria: 2 de febrero
                                                *San Blas: 3 de febrero
                                                *Carnaval: Gran raigambre en la localidad.
                                                *Día del Ángel: 1 de marzo
                                                *Semana Santa: entre finales de marzo y principios de abril.
                                                *Día del Hornazo: Domingo de Pentecostés.
                                                *Día de la Esperanza: Romería que se celebraba el lunes de Pentecostés
                                                *San Isidro: 15 de mayo (fiesta local)
                                                *Corpus Christi: principios de junio.
                                                *San Juan: 24 de junio
                                                *Jornadas Rabaneras: finales de junio. Con origen en un Mercado
                                                Cervantino
                                                *Virgen del Carmen: 16 de julio
                                                *Virgen Patronales del Socorro: Del 7 al 9 de septiembre.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </section>
                </section>
                <!-- component -->
                <div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">


                </div>

                <script>
                    let elements = document.querySelectorAll("[data-menu]");
                    for (let i = 0; i < elements.length; i++) {
                        let main = elements[i];

                        main.addEventListener("click", function() {
                            let element = main.parentElement.parentElement;
                            let indicators = main.querySelectorAll("img");
                            let child = element.querySelector("#menu");
                            let h = element.querySelector("#mainHeading>div>p");

                            h.classList.toggle("font-semibold");
                            child.classList.toggle("hidden");
                            // console.log(indicators[0]);
                            indicators[0].classList.toggle("rotate-180");
                        });
                    }
                </script>
            </div>
        </div>
        <footer class="relative  pt-8 pb-6 mt-1">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                            Made with <a href="https://www.creative-tim.com/product/notus-js"
                                class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus
                                JS</a> by <a
                                href="https://www.creative-tim.com"class="text-blueGray-500 hover:text-blueGray-800"
                                target="_blank">Ines Ruiz</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>
