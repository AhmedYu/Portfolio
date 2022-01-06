<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Ahmedmyusuf.com</title>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="simple.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <script>
            window.addEventListener('DOMContentLoaded', function() {
                let icons = document.querySelector(".icons");
                console.log(icons.childNodes[5]);
            })
        </script>
        <script src="https://kit.fontawesome.com/ce3f242d1c.js" crossorigin="anonymous"></script>
    </head>

    <body>

   <!-- header section  -->
   <?php require_once "header.php"
   ?>
   <?php echo $_SERVER['SERVER_NAME'];
   ?>
        <main id="wrapper">
            <div class="profile_left">
                <div class="photo">
                    <img src="Image/prtfolio.jpeg" alt="profile picture">
                    <span>
          <i class="fas fa-laptop-code"></i>
          Full-stack web Developer
        </span>
                </div>

                <section class="intro">
                    <h2>Hello. </h2>
                    <p>I am a passionate full-stack web developer, ready to contribute to team success through hard work, attention to detail, and excellent organizational skills. I have a clear understanding of best practices in software development. Also
                        Driven to learn, grow and excel in all areas of web development. My graduation date is May 2, 2022, with AAS in computer programming from Saint Paul College. You can find some of the projects I created in the project section. If
                        you think my work satisfied you, let us chat about how we can work together.
                    </p>
                </section>


                <section class="skills">
                    <h2><i class="fas fa-tools"></i> skills</h2>
                    <ul>
                        <li>HTML5,CSS3</li>
                        <li>JavaScript</li>
                        <li>JQuery</li>
                        <li>Angular</li>
                        <li>Bootstraps</li>
                        <li>AjAX and JSON</li>
                        <li>Java</li>
                        <li>PHP and MySQL</li>
                        <li>Swift and SwiftUI</li>
                        <li> Java EE and Servlet</li>

                    </ul>
                    <a href="webDevelopmentResume.pdf" target="_blank" class="btn-resume "><i class="fas fa-file-pdf"></i>
                        Resume
                    </a>
                </section>
                <!-- end of left column -->
            </div>
            <!-- right column -->
            <div class="right_column">

                <article class="project-secttion">

                    <h3><i class="fas fa-chalkboard-teacher"></i>Projects </h3>
                    <div class="moving_truck_quote">
                        <div class="project-images">
                            <img src="Images/form_img1.png" alt="">
                            <img src="Images/form_img2.png" alt="">
                            <img src="Images/form_img3.png" alt="">
                        </div>
                        <div class="description">
                            <h5>Booking Moving Truck and Price Calculator</h5>


                            <p>This website collects contact information, current address, and future address next; it calculates how much it will cost to book a moving truck. After the calculation, it gives the option to book then; it displays a confirmation
                                message.
                            </p>
                            <dl>
                                <dt class=".tech">Technologies used:</dt>
                                <dd class="techdes">
                                    PHP, SQL, MySQL,and Bootstraps
                                </dd>
                                <dt class="tools">Editor and other tools :</dt>
                                <dd class="toolsdes">Filezilla, and visual code studio</dd>
                            </dl>
                            <a href="https://http://ahmedmyusuf.com/Final_Project/customersInfo.php" target="_blank">
              Try it


            </a>


                        </div>

                    </div>
                </article>
            </div>

        </main>
      <?php require_once "footer.php"
      ?>

    </body>

</html>