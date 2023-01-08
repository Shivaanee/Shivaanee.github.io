<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>👩🏽‍💻 Shivaanee Eswaran</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- reCAPTCHA Javascript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="home dark">
        <h1 class="h1">Hi! <span class="h1">👋🏼</span></h1>
        <h1 class="h1">I'm <span class="bolder h1">Shivaanee</span>. I'm passionate about AI, software development and music. 👩🏽‍💻 🎶</h1>
        <span class="intouch">Get in touch 👉🏼 <a href="mailto:eshiva200@gmail.com">eshiva200@gmail.com</a></span>
    </div>

    <icon><a href="index.html" class="active" id="top">☝🏼</a></icon>

    <section class="about">
        <h3>About</h3>
        <div class="text dark">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nihil natus dolor cum saepe officia aspernatur accusamus ipsam, ducimus illo. Doloribus amet illo sit fuga quidem, itaque quos praesentium facere sequi, modi voluptates nesciunt quae laudantium dolorem exercitationem soluta placeat. Similique assumenda fugiat corporis totam.</p>
            &nbsp;
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora consectetur sint sapiente iusto maxime nulla! Fugiat minus magnam laboriosam ex maxime assumenda ab recusandae labore, ipsum soluta, perspiciatis velit modi! Commodi et explicabo repellat autem aut at nihil quidem, accusantium, voluptatem quisquam ea quis eaque quaerat soluta. Itaque modi incidunt non laboriosam eius aut. Optio hic suscipit officia voluptatem maxime.</p>
            &nbsp;
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam magnam harum quaerat earum repellat. Temporibus at similique earum rem, voluptas debitis fugiat provident cum est laborum nemo voluptates, odio necessitatibus, totam perferendis delectus nostrum distinctio eos! Non corrupti velit ab?</p>
        </div>
    </section>

    <section class="resume dark">
        <h3 id="resume"><a href="docs/resumeUK.pdf" class="arrow-effect" target="_blank">View my resume <i class="fa-solid fa-arrow-right"></i></a></h3>
    </section>

    <section class="skills">
        <h3>Skills</h3>
        <div class="text">
            <div class="skill" id="lang">
                <h3>Languages</h3>
                <ul class="dark">
                    <li>Java</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Python</li>
                    <li>C</li>
                    <li>SQL</li>
                </ul>
            </div>
            <div class="skill" id="frameworks">
                <h3>Frameworks</h3>
                <ul class="dark">
                    <li>Node.js</li>
                </ul>
            </div>
            <div class="skill" id="tools">
                <h3>Tools</h3>
                <ul class="dark">
                    <li>Git & Github</li>
                    <li>MySQL</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- <div class="experience">
        <h3>Experience</h3>
        <div class="work">
            <h3>Heriot-Watt University</h3>
            <span class="date">Sep - Dec 2022</span>
            <span class="desc">Undergraduate Lab Assistant</span>
        </div>
        <div class="work">
            <h3>Heriot-Watt University</h3>
            <span class="date">Sep - Dec 2022</span>
            <span class="desc">Undergraduate Lab Assistant</span>
        </div>
        <div class="work">
            <h3>Heriot-Watt University</h3>
            <span class="date">Sep - Dec 2022</span>
            <span class="desc">Undergraduate Lab Assistant</span>
        </div>

        <h2>View my resume <i class="fa-solid fa-arrow-right"></i></h2>
    </div> -->

    <section class="projects">
        <h3>Projects</h3>
        <div class="text">
            <div class="project">
                <img src="images/project1.png" alt="nothing here yet!">
                <div class="aboutProject">
                    <h3>Name of Project</h3>
                    <p class="dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni expedita sequi corporis odit tempora, placeat saepe! Quidem, est velit?</p>                
                    <p><span>Java</span> <span>HTML</span></p>
                </div>
            </div>
            <div class="project">
                <img src="images/project1.png" alt="nothing here yet!">
                <div class="aboutProject">
                    <h3>Very Long Name of Project 3000 XM75986 Plus Trying To Get To Next Line</h3>
                    <p class="dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni expedita sequi corporis odit tempora, placeat saepe! Quidem, est velit?</p>                
                    <p><span>Java</span> <span>HTML</span></p>
                </div>
            </div>
            <div class="project">
                <img src="images/project1.png" alt="nothing here yet!">
                <div class="aboutProject">
                    <h3>Name of Project</h3>
                    <p class="dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni expedita sequi corporis odit tempora, placeat saepe! Quidem, est velit?</p>                
                    <p><span>Java</span> <span>HTML</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- <a href="resume"><h2 id="resume">View my resume <i class="fa-solid fa-arrow-right"></i></h2></a> -->

    <section class="contact">
        <h3>Contact</h3>
        <div class="text">
            <div class="contact-col">
                <?php
                if (!empty($success)) {
                    ?>
                    <div class="alert alert-success">Your message was sent successfully!</div>
                    <?php
                }
                ?>

                <?php
                if (!empty($error)) {
                    ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                    <?php
                }
                ?>
                    <form method="post" action="submit.php">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="subject" placeholder="Enter Subject" required>
                        <textarea rows="8" name="message" placeholder="Enter your Message" required></textarea>
                        <br> <br>
                        <div class="g-recaptcha" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
                        <button type="submit" class="hero-btn red-btn">SUBMIT</button>
                    </form>

                </div>
        </div>
    </section>

    <footer>
        <div class="madeby">
            <h3>Designed & Built by</h3>
            <h3>Shivaanee Eswaran</h3>
        </div>
        <div class="socials">
            <ul>
                <li><a href="mailto:eshiva200@gmail.com">Email</a></li>
                <li><a href="http://instagram.com/shivvx29">Instagram</a></li>
                <li><a href="http://linkedin.com/in/shivaanee">LinkedIn</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
