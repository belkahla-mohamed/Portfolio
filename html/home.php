<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/homee.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <div class="container">

        <!-- left slide -->
        <div class="left-slide">
            <div class="sections">
                <a href="#home" class="home_op active">

                    <span class="material-symbols-outlined">
                        home
                    </span>

                </a>
                <a href="#about" class="about_op">
                    <span class="material-symbols-outlined">
                        Person
                    </span>
                </a>
                <a href="#skills" class="skills_op">
                    <span class="material-symbols-outlined">
                        code
                    </span>
                </a>
                <a href="#contact" class="contact_op">
                    <span class="material-symbols-outlined">
                        call
                    </span>
                </a>
            </div>
        </div>
        <!-- left slide -->

        <!-- main -->
        <div class="main">
            <div class="profile">
                <div class="profile_infos">
                    <div class="picture">
                        <img src="../imgs/meCoding.jpg" alt="">
                    </div>
                    <div class="infos">
                        <h2>Mohamed BELKAHLA</h2>
                        <p>Frontend and Backend</p>
                        <a href="">
                            <span class="material-symbols-outlined">
                                download
                            </span>
                            Download CV
                        </a>
                        <div class="links">
                            <a href="" class="facebook">
                                <img src="../icons/facebook-circle-logo-24.png" alt="">
                            </a>
                            <a href="" class="instagram">
                                <img src="../icons/instagram-logo-24pink.png" alt="">
                            </a>
                            <a href="" class="youtube">
                                <img src="../icons/youtube-logo-24.png" alt="">
                            </a>
                            <a href="" class="whatsapp">
                                <img src="../icons/whatsapp-logo-24.png" alt="">
                            </a>


                        </div>
                    </div>
                </div>

            </div>
            <!-- home -->
            <section class="home" id="home">
                <div class="presentation">
                    <div class="text">
                        <h4>Hi!</h4>
                        <h1>I'm <span>Mohamed BELKAHLA</span></h1>
                        <p>Fullstack Web Developer</p>
                    </div>
                    <div class="options">
                        <a href="#skills">Services</a>&nbsp;
                        <a href="#contact">Contact Me</a>
                    </div>
                </div>
            </section>
            <!-- home -->

            <!-- about me -->

            <section class="about" id="about">
                <h1 class="title">&#8595;About Me&#8595;</h1>
                <div class="about_me">
                    <div class="personality">
                        <div class="info">
                            <h3>Fullname :</h3>
                            <p>Mohamed BELKAHLA</p>
                        </div>
                        <div class="info">
                            <h3>Date of birth :</h3>
                            <p>July 10,2005</p>
                        </div>
                        <div class="info">
                            <h3>Adress :</h3>
                            <p>DOUAR OULED ZAHRA LAHRAOUINE CASABLANCA</p>
                        </div>
                        <div class="info">
                            <h3>Email :</h3>
                            <p>rcam4314@gmail.com</p>
                        </div>
                        <div class="info">
                            <h3>Phone :</h3>
                            <p>+212 631-92296</p>
                        </div>
                        <div class="info">
                            <h3>Project Complete :</h3>
                            <p class="counter">+<span data-count="15">0</span></p>
                        </div>
                    </div>
                </div>

            </section>

            <!-- about me -->


            <!-- Skills -->
            <section class="skills" id="skills">
                <h1 class="title"> &#8595;My Skills&#8595;</h1>
                <div class="counter_skills">
                    <h2>Language of Speak</h2>
                    <div class="counters">
                        <div class="counter counter_speak">
                            <h1><span data-count="100">0</span>%</h1>
                            <h3>Arabic</h3>
                        </div>
                        <div class="counter counter_speak">
                            <h1><span data-count="80">0</span>%</h1>
                            <h3>Frensh</h3>
                        </div>
                        <div class="counter counter_speak">
                            <h1><span data-count="60">0</span>%</h1>
                            <h3>English</h3>
                        </div>
                    </div>
                    <h2>Language of PC</h2>
                    <div class="counters">
                        <div class="counter">
                            <h1><span data-count="100">0</span>%</h1>
                            <h3>HTML</h3>
                        </div>
                        <div class="counter">
                            <h1><span data-count="99">0</span>%</h1>
                            <h3>CSS</h3>
                        </div>
                        <div class="counter">
                            <h1><span data-count="30">0</span>%</h1>
                            <h3>JS</h3>
                        </div>
                        <div class="counter">
                            <h1><span data-count="30">0</span>%</h1>
                            <h3>jQuery</h3>
                        </div>
                        <div class="counter">
                            <h1><span data-count="80">0</span>%</h1>
                            <h3>PHP</h3>
                        </div>
                        <div class="counter">
                            <h1><span data-count="40">0</span>%</h1>
                            <h3>Python</h3>
                        </div>


                    </div>

                </div>
            </section>
            <!-- Skills -->

            <!-- Contact -->
            <section class="contact" id="contact">
                <h1 class="title">&#8595;Contact Me&#8595;</h1>
                <div class="contact_me">
                    <div class="send_me">
                        <h1><span>L</span>et's woking together</h1>
                        <form action="https://api.web3forms.com/submit" method="POST" class="form">

                            <div class="input">
                                <input type="hidden" name="access_key" value="e52ce62c-d8cd-4de4-b271-c4263ea24b36">
                                <label class="material-symbols-outlined" for="name">person</label>
                                <input type="text" placeholder="Your Fullname..." name="name" id="name" required>
                            </div>
                            <div class="input">
                                <label class="material-symbols-outlined" for="email">email</label>
                                <input type="email" placeholder="Your Email..." name="email" id="email" required>
                            </div>
                            <div class="input">
                                <label class="material-symbols-outlined" for="message">message</label>
                                <textarea placeholder="Message for Me..." name="message" cols="30" rows="8" id="message"></textarea>
                            </div>
                            <div class="btn">
                                <div>
                                    <span class="material-symbols-outlined" for="send">send</span>
                                    <input type="submit" id="send" value="Send">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


            </section>




            <!-- Contact -->

        </div>
        <!-- main -->


    </div>
    <script>
        const links = document.querySelectorAll(".sections a");
        function activeLink(){
            links.forEach(link => {
                link.classList.remove("active");})
            this.classList.add("active");
        }
        links.forEach(link => 
            link.addEventListener("click", activeLink)
        );
    </script>
    <script src="../js/index.js"></script>

</body>

</html>