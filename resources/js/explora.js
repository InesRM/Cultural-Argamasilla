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
                    };
