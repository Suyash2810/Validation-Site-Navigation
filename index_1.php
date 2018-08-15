<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <link rel="stylesheet" href="stylecss/blueberry.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="jquery.blueberry.js" type="text/javascript"></script>
    <script src="float-panel.js"></script>


    <script>
        $(window).load(function() {

            $('.blueberry').blueberry();

        });

    </script>

    <style type="text/css">
        .slideanim {
            visibility: hidden;
            visibility: visible\9;
            /*For old IE browsers IE6-8 */
        }

        .slideanim.slide {
            visibility: visible;
            animation: slide 1s;
        }

        .slideanim::after {
            /* useful when its child elements are float:left; */
            content: "";
            display: table;
            clear: both;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(50%);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        body {
            background-color: none;
        }

    </style>


    <script src="script.js" type="text/javascript"></script>
</head>

<body>


    <header>
        <a href="#" id="logo"></a>

        <nav>
            <a href="#" id="menu-icon"></a>

            <ul>
                <li><a href="index.html" class="current">HOME</a></li>
                <li><a href="#"> Trainers </a></li>
                <li><a href="#"> Plans </a></li>
                <li><a href="#"> Pricing </a></li>
                <li><a href="#"> Facilities </a></li>
                <li><a href="#"> Contact </a></li>
            </ul>
        </nav>


    </header>




    <div id="doc">
        <div id="content">
            <div class="blueberry">
                <ul class="slides">
                    <li><img src="https://cdn-ami-drupal.heartyhosting.com/sites/muscleandfitness.com/files/styles/full_node_image_1090x614/public/media/dumbbell-press-bench-man-workout-1109.jpg?itok=hvpGRY9v" alt=""></li>
                    <li><img src="https://www.w3newbie.com/wp-content/uploads/inside-gym.png" alt=""></li>
                    <li><img src="https://www.w3newbie.com/wp-content/uploads/push-ups.png" alt=""></li>
                    <li><img src="https://www.w3newbie.com/wp-content/uploads/chest-fly.png" alt=""></li>
                    <li><img src="https://www.w3newbie.com/wp-content/uploads/training.png" alt=""></li>



                </ul>
            </div>
        </div>
    </div>



    <section class="slideanim">
        <img src="https://www.w3newbie.com/wp-content/uploads/trainers.png" alt="">
        <h1>Best Trainers Around</h1>
        <p>Here in the gym we have the best training staff in the tri-state as we seek out and recruit talented trainers with all the right certifications. Come in today and have a sit down with one of our trainers so we can help you meet your goals in the fastest way possible.</p>
    </section>

    <section class="slideanim">
        <img src="https://www.w3newbie.com/wp-content/uploads/location.png" alt="">
        <h1>Local and Convenient</h1>
        <p>Our location sets near the center of four major roadway exists making it very convenient for gym goers and personal training clients to get in their workouts in before or after work, even on a shot lunch break!</p>
    </section>

    <section class="slideanim">
        <img src="https://www.w3newbie.com/wp-content/uploads/check.png" alt="">
        <h1>Check us for Free</h1>
        <p>To show how confident we are in our facilities and their satisfying the needs of our clients, we offer a two week pass so anyone interested can get a feel for our gym and decide whether or not they'd like to join. Call or come today for your free pass.</p>
    </section>



    <div class="clear"></div>

    <div class="article1" style="width:100%;height:700px;">

        <article>
            <img class="slideanim" src="https://www.w3newbie.com/wp-content/uploads/gym-classes.jpg" alt="">
        </article>

        <aside class="slideanim">
            <h2>Our Group Class Schedule</h2>
            <br><br><br>
            <p>Studio Cycling at 8:00 - 60 minutes <br><br> Abs Sculpting at 12:00 pm - 30 minutes <br><br> Power Yoga at 10:00 am - 60 minutes <br><br> Boot Camp at 2:00 pm - 30 minutes <br><br> Butt Sculpting at 4:00 pm - 60 minutes</p>
        </aside>



    </div>





    <div class="clear"></div>

    <section class="slideanim">
        <h1>Ladies Section!</h1>
        <img src="https://www.w3newbie.com/wp-content/uploads/ladies-gym.jpg" alt="">
        <p>Included in our faclity is a "ladies only" section of the gym where women can workout to themseleves.</p>
    </section>

    <section class="slideanim">
        <h1>The Gym Floor!</h1>
        <img src="https://www.w3newbie.com/wp-content/uploads/gym-floor.jpg" alt="">
        <p>Our gym floor is as spacious as they come.Enjoy scenis views from the cardio equipment from the third floor.</p>
    </section>

    <section class="slideanim">
        <h1>Free Weigths!</h1>
        <img src="https://www.w3newbie.com/wp-content/uploads/free-weights.jpg" alt="">
        <p>Our free weigthts se ction has an extensive collection of dumbbells and Olympic plates for bodybuilding.</p>
    </section>


    <footer>

        <section class="slideanim">
            <h3>The Gym</h3>
            <p>215-555-55555 <br><br> 190 Baker Street London, Pa 1100 trainer@gym.com
            </p>
        </section>
        <section class="slideanim">
            <h3>Connect with us.</h3>
            <ul class="social">
                <li><a href="https://www.facebook.com"><img src="https://www.w3newbie.com/wp-content/uploads/facebook1.png" alt=""></a></li>
                <li><a href="https://plus.google.com/discover"><img src="https://www.w3newbie.com/wp-content/uploads/googleplus.png" alt=""></a></li>
                <li><a href="https://twitter.com/login"><img src="https://www.w3newbie.com/wp-content/uploads/twitter1.png" alt=""></a></li>
                <li><a href="https://www.youtube.com"><img src="https://www.w3newbie.com/wp-content/uploads/youtube1.png" alt=""></a></li>
            </ul>
        </section>

        <section class="slideanim">
            <img id="lift" src="https://www.w3newbie.com/wp-content/uploads/weight-lifter.png" alt="">
        </section>

    </footer>

    <footer class="footer2">
        <p><strong>@COPYRIGHT - GYM - 2019</strong></p>
    </footer>



</body>

</html>
