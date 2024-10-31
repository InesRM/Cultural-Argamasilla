<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Explora') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                <section class="relative  bg-blueGray-50">
                    <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
                        <div class="absolute top-0 w-full h-full bg-center bg-cover"
                            style="background-image: url({{asset('/images/collage.png')}});">
                            <span id="blackOverlay" class="w-full h-full absolute opacity-45 bg-black"></span>
                        </div>
                        <div class="container relative mx-auto">
                            <div class="items-center flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                                    <div class="pr-12">
                                        <h1 class="text-white font-semibold text-5xl">
                                            Explora Taberno
                                        </h1>
                                        <p class="mt-4 text-lg text-white">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident suscipit
                                            fugiat temporibus quo necessitatibus magnam iure a blanditiis distinctio,
                                            quidem rem. Quaerat unde, voluptate sequi maiores ipsum aliquid facilis?
                                            Consequatur.
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
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur aut
                                                consectetur, reiciendis consequuntur atque nesciunt, laudantium quasi
                                                dolorum aspernatur ratione nihil ab soluta. Praesentium omnis, corporis
                                                accusamus eaque tempora neque?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-4/12 px-4 text-center">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                        <div class="px-4 py-5 flex-auto">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                                <i class="fas fa-retweet"></i>
                                            </div>
                                            <h6 class="text-xl font-semibold">Cultura</h6>
                                            <p class="mt-2 mb-4 text-blueGray-500">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum porro ex
                                                quidem a cum ipsam placeat cumque distinctio, sed non vel, nemo, optio
                                                eveniet eius deleniti ratione atque fugit possimus?
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
                                            <h6 class="text-xl font-semibold">Deporte</h6>
                                            <p class="mt-2 mb-4 text-blueGray-500">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                                                dolor, nostrum inventore, voluptas amet explicabo quas minima, fugiat
                                                dolore pariatur quod earum atque numquam eveniet distinctio! Cum modi
                                                culpa quo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </section>
                </section>
                <!-- component -->
                <div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
                    <h1
                        class="text-center dark:text-white lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                        FAQ's</h1>

                    <div
                        class="lg:mt-12 bg-gray-100 dark:bg-gray-800 md:mt-10 mt-8 lg:py-7 lg:px-6 md:p-6 py-6 px-4 lg:w-8/12 w-full mx-auto">
                        <div class="flex justify-between md:flex-row flex-col">
                            <div class="md:mb-0 mb-8 md:text-left text-center">
                                <h2 class="font-medium dark:text-white text-xl leading-5 text-gray-800 lg:mb-2 mb-4">
                                    Questions</h2>
                                <p
                                    class="font-normal dark:text-gray-300 text-sm leading-5 text-gray-600 md:w-8/12 md:ml-0 w-11/12 mx-auto">
                                    If you don’t find your answer, Please contact us or Leave a Message, we’ll be more
                                    than happy to assist you.</p>
                            </div>

                            <div class="flex justify-center items-center">
                                <div
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 flex bg-white md:justify-center justify-between items-center px-4 py-3 w-full">
                                    <input class="focus:outline-none bg-white" type="text" placeholder="Search" />
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg1.svg"
                                        alt="search">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-8/12 w-full mx-auto">
                        <!-- Question 1 -->
                        <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

                        <div class="w-full md:px-6">
                            <div id="mainHeading" class="flex justify-between items-center w-full">
                                <div class="">
                                    <p
                                        class="flex justify-center items-center dark:text-white font-medium text-base leading-6 md:leading-4 text-gray-800">
                                        <span
                                            class="lg:mr-6 mr-4 dark:text-white lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span>
                                        How do i know if a product is available in boutiques?
                                    </p>
                                </div>
                                <button aria-label="toggler"
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                    data-menu>
                                    <img class="transform dark:hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                        alt="toggler">
                                    <img class="transform dark:block hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                        alt="toggler">
                                </button>
                            </div>
                            <div id="menu" class="hidden mt-6 w-full">
                                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you
                                    can query the status of your orders any time in My orders in the My account section.
                                    if you are not resigered at Mango.com, you can access dierectly in the Orders
                                    section. In this cause, you will have enter your e-mail address and order number.
                                </p>
                            </div>
                        </div>

                        <!-- Question 2 -->

                        <hr class="w-full lg:mt-10 my-8" />

                        <div class="w-full md:px-6">
                            <div id="mainHeading" class="flex justify-between items-center w-full">
                                <div class="">
                                    <p
                                        class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                        <span
                                            class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q2.</span>
                                        How can i find the prices or get other information about chanel products?
                                    </p>
                                </div>
                                <button aria-label="toggler"
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                    data-menu>
                                    <img class="transform dark:hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                        alt="toggler">
                                    <img class="transform dark:block hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                        alt="toggler">
                                </button>
                            </div>
                            <div id="menu" class="hidden mt-6 w-full">
                                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you
                                    can query the status of your orders any time in My orders in the My account section.
                                    if you are not resigered at Mango.com, you can access dierectly in the Orders
                                    section. In this cause, you will have enter your e-mail address and order number.
                                </p>
                            </div>
                        </div>

                        <!-- Question 3 -->

                        <hr class="w-full lg:mt-10 my-8" />

                        <div class="w-full md:px-6">
                            <div id="mainHeading" class="flex justify-between items-center w-full">
                                <div class="">
                                    <p
                                        class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                        <span
                                            class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q3.</span>How
                                        many collections come out every year?
                                    </p>
                                </div>
                                <button aria-label="toggler"
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                    data-menu>
                                    <img class="transform dark:hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                        alt="toggler">
                                    <img class="transform dark:block hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                        alt="toggler">
                                </button>
                            </div>
                            <div id="menu" class="hidden mt-6 w-full">
                                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you
                                    can query the status of your orders any time in My orders in the My account section.
                                    if you are not resigered at Mango.com, you can access dierectly in the Orders
                                    section. In this cause, you will have enter your e-mail address and order number.
                                </p>
                            </div>
                        </div>

                        <!-- Question 4 -->

                        <hr class="w-full lg:mt-10 my-8" />

                        <div class="w-full md:px-6">
                            <div id="mainHeading" class="flex justify-between items-center w-full">
                                <div class="">
                                    <p
                                        class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                        <span
                                            class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q4.</span>Are
                                        all of the fashion collections features on the website?
                                    </p>
                                </div>
                                <button aria-label="toggler"
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                    data-menu>
                                    <img class="transform dark:hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                        alt="toggler">
                                    <img class="transform dark:block hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                        alt="toggler">
                                </button>
                            </div>
                            <div id="menu" class="hidden mt-6 w-full">
                                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you
                                    can query the status of your orders any time in My orders in the My account section.
                                    if you are not resigered at Mango.com, you can access dierectly in the Orders
                                    section. In this cause, you will have enter your e-mail address and order number.
                                </p>
                            </div>
                        </div>

                        <!-- Question 5 -->

                        <hr class="w-full lg:mt-10 my-8" />

                        <div class="w-full md:px-6">
                            <div id="mainHeading" class="flex justify-between items-center w-full">
                                <div class="">
                                    <p
                                        class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800">
                                        <span
                                            class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q5.</span>Where
                                        do i find products that i have seen in magazines or Social Media?
                                    </p>
                                </div>
                                <button aria-label="toggler"
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                    data-menu>
                                    <img class="transform dark:hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                        alt="toggler">
                                    <img class="transform dark:block hidden "
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                        alt="toggler">
                                </button>
                            </div>
                            <div id="menu" class="hidden mt-6 w-full">
                                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you
                                    can query the status of your orders any time in My orders in the My account section.
                                    if you are not resigered at Mango.com, you can access dierectly in the Orders
                                    section. In this cause, you will have enter your e-mail address and order number.
                                </p>
                            </div>
                        </div>

                        <hr class="w-full lg:mt-10 my-8" />
                    </div>
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
                                JS</a> by <a href="https://www.creative-tim.com"
                                class="text-blueGray-500 hover:text-blueGray-800" target="_blank">
                                Ayuntamiento de Taberno</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>
