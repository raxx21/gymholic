<?php
session_start();
if (isset($_SESSION['useremail'])) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMHOLIC</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7108b832d3.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/page2.css">
</head>

<body>
    <!-- Navigation Bar-->

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/name.jpg" alt="">YMHOLIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="page2.php">Back <span class="sr-only"></span></a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- progress bar -->

    <div class="jumbotron my-color1">
        <h1 class="text-center">Full Body Workout Progress</h1>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>


    <!-- full Body Week 1 -->
    <div class="text-center">
        <h1>Week 1</h1>
        <a data-toggle="collapse" data-target="#icon-one" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-one.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-two" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-two.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-three" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-three.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-four" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-four.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-five" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-five.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-six" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-six.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-seven" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-seven.jpg" alt="" class="img-thumbnail"> </a>-->

        <img src="img/trophy.jpg" alt="" class="img-thumbnail">

        <!-- week 1 day 1 -->
        <div class="collapse" id="icon-one">
            <h1 class="text-center">Week 1 Day 1</h1>
            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-jumping-jacks.gif" alt="">
                    <h2 class="text-center">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button onclick="seconds(this.id,20,0)" id="btn1" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-decline-push-up.gif" alt="">
                    <h2 class="text-center">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn2" class="btn btn-primary" onclick="time(this.id,16)" disabled="disabled">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-knee-push-up.gif" alt="">
                    <h2 class="text-center">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn3" onclick="time(this.id,10)" class="btn btn-primary" disabled="disabled">Start</button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-push-up.gif" alt="">
                    <h2 class="text-center">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn4" onclick="time(this.id,8)" class="btn btn-primary" disabled="disabled">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-wide-push-up.gif" alt="">
                    <h2 class="text-center">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn5" onclick="time(this.id,8)" class="btn btn-primary" disabled="disabled">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-cobra-stretch.jpg" alt="">
                    <h2 class="text-center">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button onclick="seconds(this.id,20,1)" id="btn6" class="btn btn-primary" disabled="disabled">Start</button>
                </div>
            </div>
        </div>

        <!-- week 1 day 2 -->
        <div class="collapse" id="icon-two">
            <h1 class="text-center">Week 1 Day 2</h1>
            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-abdominal-crunches.gif" alt="">
                    <h2 class="text-center">Abdominal Crunches</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn7" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-russian-twist.gif" alt="">
                    <h2 class="text-center">Russian Twist</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn8" onclick="time(this.id,12)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-mountain-climber.gif" alt="">
                    <h2 class="text-center">Mountain Climber</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn9" onclick="time(this.id,12)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-heel-touch.gif" alt="">
                    <h2 class="text-center">Heel Touch</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn10" onclick="time(this.id,16)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-leg-raises.gif" alt="">
                    <h2 class="text-center">Leg Raises</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn11" onclick="time(this.id,12)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-plank.jpg" alt="">
                    <h2 class="text-center">Plank</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn12" onclick="seconds(this.id,30,0)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-cobra-stretch.jpg" alt="">
                    <h2 class="text-center">Cobra Stretch</h2>
                    <h4>(30 x2)</h4>
                    <button id="btn13" onclick="seconds(this.id,30,1)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-spine-lumbar.jpg" alt="">
                    <h2 class="text-center">Spine Lumbar Stretch Left </h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn14" onclick="seconds(this.id,30,0)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-spine-lumbar.jpg" alt="">
                    <h2 class="text-center">Spine Lumbar Stretch Right</h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn15" onclick="seconds(this.id,30,0)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
        </div>

        <!-- week 1 day 3 -->
        <div class="collapse" id="icon-three">
            <h1 class="text-center">Week 1 Day 3</h1>
            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-side-arm-raise.gif" alt="">
                    <h2 class="text-center">Side Arm Raise</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn16" onclick="time(this.id,16)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-knee-push-up.gif" alt="">
                    <h2 class="text-center">Knee Push Ups</h2>
                    <h4>(14 x2)</h4>
                    <button id="btn17" onclick="time(this.id,14)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-inchworms.gif" alt="">
                    <h2 class="text-center">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn18" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-arm-scissors.gif" alt="">
                    <h2 class="text-center">Arm Scissors</h2>
                    <h4>(30 x2)</h4>
                    <button id="btn19" onclick="time(this.id,30)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-cat-cow.gif" alt="">
                    <h2 class="text-center">Cat Cow Pose</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn20" onclick="seconds(this.id,30,1)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-childs.jpg" alt="">
                    <h2 class="text-center">Child's Pose</h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn21" onclick="seconds(this.id,30,0)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
        </div>

        <!-- week 1 day 4 -->
        <div class="collapse" id="icon-four">
            <h1 class="text-center">Week 1 Day 4</h1>
            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-jumping-jacks.gif" alt="">
                    <h2 class="text-center">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn22" onclick="seconds(this.id,20,0)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-push-up.gif" alt="">
                    <h2 class="text-center">Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn23" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-wide-push-up.gif" alt="">
                    <h2 class="text-center">Wide Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn24" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-push-up-rotation.gif" alt="">
                    <h2 class="text-center">Push Ups & Rotation</h2>
                    <h4>(6 x2)</h4>
                    <button id="btn25" onclick="time(this.id,6)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-staggered-push-up.gif" alt="">
                    <h2 class="text-center">Staggered Push Ups</h2>
                    <h4>(6 x2)</h4>
                    <button id="btn26" onclick="time(this.id,6)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-decline-push-up.gif" alt="">
                    <h2 class="text-center">Decline Push Up</h2>
                    <h4>(6 x2)</h4>
                    <button id="btn27" onclick="time(this.id,20)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
        </div>

        <!-- week 1 day 5 -->
        <div class="collapse" id="icon-five">
            <h1 class="text-center">Week 1 Day 5</h1>
            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-russian-twist.gif" alt="">
                    <h2 class="text-center">Russian Twist</h2>
                    <h4>(14 x2)</h4>
                    <button id="btn28" onclick="time(this.id,14)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-leg-raises.gif" alt="">
                    <h2 class="text-center">Leg Raises</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn29" onclick="time(this.id,16)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-butt-bridge.gif" alt="">
                    <h2 class="text-center">Butt Bridge</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn30" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-side-bridge.gif" alt="">
                    <h2 class="text-center">Side Bridge Left</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn31" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-side-bridge.gif" alt="">
                    <h2 class="text-center">Side Bridge Right</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn32" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-abdominal-crunches.gif" alt="">
                    <h2 class="text-center">Abdominal Crunches</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn33" onclick="time(this.id,12)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-v-up.gif" alt="">
                    <h2 class="text-center">V Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn34" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-push-up-rotation.gif" alt="">
                    <h2 class="text-center">Push Up & Rotation</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn35" onclick="time(this.id,10)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-cobra-stretch.jpg" alt="">
                    <h2 class="text-center">Cobra Stretch</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn36" onclick="seconds(this.id,30,1)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
            </div>
        </div>

        <!-- week 1 day 6 -->
        <div class="collapse" id="icon-six">
            <h1 class="text-center">Week 1 Day 6</h1>
            <div class="row">
                <div class="col-lg-4">
                    <img src="gif/e-arm-scissors.gif" alt="">
                    <h2 class="text-center">Arm Scissors</h2>
                    <h4>(30 x2)</h4>
                    <button id="btn37" onclick="time(this.id,30)" disabled="disabled" class="btn btn-primary">Start</button>
                </div>
                <div class="col-lg-4">
                    <img src="gif/e-triceps-kickback.gif" alt="">
                    <h2 class="text-center">Triceps KickBack</h2>
                    <h4>(6 x2)</h4>
                    <button id="btn38 onclick=" time(this.id,6) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-ups.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(6 x2)</h4>
                    <button id="btn39 " onclick="time(this.id,6) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-inchworms.gif " alt=" ">
                    <h2 class="text-center ">Inchworms</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn40 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cat-cow.gif " alt=" ">
                    <h2 class="text-center ">Cat Cow Pose</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn41 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-childs.jpg " alt=" ">
                    <h2 class="text-center ">Child's Pose</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn42 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 1 day 7 -->
        <div class="collapse" id="icon-seven">
            <h1 class="text-center ">Week 1 Day 7</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn43 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(18 x2)</h4>
                    <button id="btn44 " onclick="time(this.id,18) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn45 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up-rotation.gif " alt=" ">
                    <h2 class="text-center ">Push Ups & Rotation</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn46 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-staggered-push-up.gif " alt=" ">
                    <h2 class="text-center ">Staggered Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn47 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-decline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Decline Push Up</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn48 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- full body week 2 -->
    <div class="text-center ">
        <h1>Week 2</h1>
        <a data-toggle="collapse" data-target="#icon-2-1" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-one.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-2-2" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-two.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-2-3" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-three.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-2-4" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-four.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-2-5" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-five.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-2-6" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-six.jpg" alt="" class="img-thumbnail"> </a>-->
        <a data-toggle="collapse" data-target="#icon-2-7" aria-expanded="false" aria-controls="icon-one"><img src="img/icon-seven.jpg" alt="" class="img-thumbnail"> </a>-->
 `  <img src="img/trophy.jpg " alt=" " class="img-thumbnail ">

        <!-- week 2 day 1 -->
        <div class="collapse " id="icon-2-one ">
            <h1 class="text-center ">Week 2 Day 1</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-abdominal-crunches.gif " alt=" ">
                    <h2 class="text-center ">Abdominal Crunches</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn49 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-russian-twist.gif " alt=" ">
                    <h2 class="text-center ">Russian Twist</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn50 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-plank.jpg " alt=" ">
                    <h2 class="text-center ">Plank</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn51 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-butt-bridge.gif " alt=" ">
                    <h2 class="text-center ">Butt Bridge</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn52 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-crossover-crunch.gif " alt=" ">
                    <h2 class="text-center ">Crossover Crunch</h2>
                    <h4>(14 x2)</h4>
                    <button id="btn53 " onclick="time(this.id,14) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-side-bridge.gif " alt=" ">
                    <h2 class="text-center ">Side Bridge Left</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn54 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-side-bridge.gif " alt=" ">
                    <h2 class="text-center ">Side Bridge Right</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn55 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-bicycle-crunches.gif " alt=" ">
                    <h2 class="text-center ">Bicycle Crunch</h2>
                    <h4>(14 x2)</h4>
                    <button id="btn56 " onclick="time(this.id,14) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-abdominal-crunches.gif " alt=" ">
                    <h2 class="text-center ">Abdominal Crunch</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn57 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up-rotation.gif " alt=" ">
                    <h2 class="text-center ">Push Up & Rotation</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn58 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-spine-lumbar.jpg " alt=" ">
                    <h2 class="text-center ">Spine Lumbar Left</h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn59 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-spine-lumbar.jpg " alt=" ">
                    <h2 class="text-center ">Spine Lumbar Right</h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn60 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 2 day 2 -->
        <div class="collapse " id="icon-2-2 ">
            <h1 class="text-center ">Week 2 Day 2</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-side-arm-raise.gif " alt=" ">
                    <h2 class="text-center ">Side Arm Raise</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn61 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-triceps-kickback.gif " alt=" ">
                    <h2 class="text-center ">Triceps KickBack</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn62 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-ups.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Up</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn63 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-inchworms.gif " alt=" ">
                    <h2 class="text-center ">Inchworms</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn64 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cat-cow.gif " alt=" ">
                    <h2 class="text-center ">Cat Cow Pose</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn65 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-abdominal-crunches.gif " alt=" ">
                    <h2 class="text-center ">Plank</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn66 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(30 x2)</h4>
                    <button id="btn67 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-spine-lumbar.jpg " alt=" ">
                    <h2 class="text-center ">Spine Lumbar Stretch Left </h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn68 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-spine-lumbar.jpg " alt=" ">
                    <h2 class="text-center ">Spine Lumbar Stretch Right</h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn69 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 2 day 3 -->
        <div class="collapse " id="icon-2-3 ">
            <h1 class="text-center ">Week 2 Day 3</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn70 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn71 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn72 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn73 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn74 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn75 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 2 day 4 -->
        <div class="collapse " id="icon-2-4 ">
            <h1 class="text-center ">Week 2 Day 4</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn76 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn77 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn78 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn79 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn80 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn81 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 2 day 5 -->
        <div class="collapse " id="icon-2-5 ">
            <h1 class="text-center ">Week 2 Day 5</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn82 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn83 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn84 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn85 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn86 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn87 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 2 day 6 -->
        <div class="collapse " id="icon-2-6 ">
            <h1 class="text-center ">Week 2 Day 6</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn88 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn89 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn90 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn91 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn92 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn93 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 2 day 7 -->
        <div class="collapse " id="icon-2-7">
            <h1 class="text-center ">Week 2 Day 7</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn94 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn95 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn96 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn97 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn98 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn99 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- full body week 3 -->
    <div class="text-center ">
        <h1>Week 3</h1>
        <a data-toggle="collapse " data-target="#icon-3-1 " aria-expanded="false " aria-controls="icon-3-1 "><img src="img/icon-one.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-3-2 " aria-expanded="false " aria-controls="icon-3-2 "><img src="img/icon-two.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-3-3 " aria-expanded="false " aria-controls="icon-3-3 "><img src="img/icon-three.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-3-4 " aria-expanded="false " aria-controls="icon-3-4 "><img src="img/icon-four.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-3-5 " aria-expanded="false " aria-controls="icon-3-5 "><img src="img/icon-five.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-3-6 " aria-expanded="false " aria-controls="icon-3-6 "><img src="img/icon-six.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-3-7 " aria-expanded="false " aria-controls="icon-3-7 "><img src="img/icon-seven.jpg " alt=" " class="img-thumbnail "> </a>-->
        <img src="img/trophy.jpg " alt=" " class="img-thumbnail ">

        <!-- week 3 day 1 -->
        <div class="collapse " id="icon-3-1 ">
            <h1 class="text-center ">Week 3 Day 1</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn100 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn101 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn102 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn103 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn104 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn105 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 3 day 2 -->
        <div class="collapse " id="icon-3-2 ">
            <h1 class="text-center ">Week 3 Day 2</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-abdominal-crunches.gif " alt=" ">
                    <h2 class="text-center ">Abdominal Crunches</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn106 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-russian-twist.gif " alt=" ">
                    <h2 class="text-center ">Russian Twist</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn107 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-mountain-climber.gif " alt=" ">
                    <h2 class="text-center ">Mountain Climber</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn108 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-heel-touch.gif " alt=" ">
                    <h2 class="text-center ">Heel Touch</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn109 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-leg-raises.gif " alt=" ">
                    <h2 class="text-center ">Leg Raises</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn110 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-plank.jpg " alt=" ">
                    <h2 class="text-center ">Plank</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn111 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(30 x2)</h4>
                    <button id="btn112 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-spine-lumbar.jpg " alt=" ">
                    <h2 class="text-center ">Spine Lumbar Stretch Left </h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn113 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-spine-lumbar.jpg " alt=" ">
                    <h2 class="text-center ">Spine Lumbar Stretch Right</h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn114 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 3 day 3 -->
        <div class="collapse " id="icon-3-3 ">
            <h1 class="text-center ">Week 3 Day 3</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn115 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn116 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn117 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn118 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn119 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn120 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 3 day 4 -->
        <div class="collapse " id="icon-3-4 ">
            <h1 class="text-center ">Week 3 Day 4</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn121 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn122 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn123 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn124 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn125 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn126 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 3 day 5 -->
        <div class="collapse " id="icon-3-5 ">
            <h1 class="text-center ">Week 3 Day 5</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn127 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn128 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn129 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn130 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn131 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn132 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 3 day 6 -->
        <div class="collapse " id="icon-3-6 ">
            <h1 class="text-center ">Week 3 Day 6</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn133 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn134 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn135 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn136 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn137 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn138 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 3 day 7 -->
        <div class="collapse " id="icon-3-7 ">
            <h1 class="text-center ">Week 3 Day 7</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn139 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn140 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn141 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn142 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn143 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn144 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- full body week 4 -->
    <div class="text-center ">
        <h1>Week 4</h1>
        <a data-toggle="collapse " data-target="#icon-4-1 " aria-expanded="false " aria-controls="icon-4-1 "><img src="img/icon-one.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-4-2 " aria-expanded="false " aria-controls="icon-4-2 "><img src="img/icon-two.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-4-3 " aria-expanded="false " aria-controls="icon-4-3 "><img src="img/icon-three.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-4-4 " aria-expanded="false " aria-controls="icon-4-4 "><img src="img/icon-four.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-4-5 " aria-expanded="false " aria-controls="icon-4-5 "><img src="img/icon-five.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-4-6 " aria-expanded="false " aria-controls="icon-4-6 "><img src="img/icon-six.jpg " alt=" " class="img-thumbnail "> </a>-->
        <a data-toggle="collapse " data-target="#icon-4-7 " aria-expanded="false " aria-controls="icon-4-7 "><img src="img/icon-seven.jpg " alt=" " class="img-thumbnail "> </a>-->
        <img src="img/trophy.jpg " alt=" " class="img-thumbnail ">

        <!-- week 4 day 1 -->
        <div class="collapse " id="icon-4-1 ">
            <h1 class="text-center ">Week 4 Day 1</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn145 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn146 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn147 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn148 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn149 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn150 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 4 day 2 -->
        <div class="collapse " id="icon-4-2 ">
            <h1 class="text-center ">Week 4 Day 2</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-abdominal-crunches.gif " alt=" ">
                    <h2 class="text-center ">Abdominal Crunches</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn151 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-russian-twist.gif " alt=" ">
                    <h2 class="text-center ">Russian Twist</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn152 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-mountain-climber.gif " alt=" ">
                    <h2 class="text-center ">Mountain Climber</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn153 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-heel-touch.gif " alt=" ">
                    <h2 class="text-center ">Heel Touch</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn154 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-leg-raises.gif " alt=" ">
                    <h2 class="text-center ">Leg Raises</h2>
                    <h4>(12 x2)</h4>
                    <button id="btn155 " onclick="time(this.id,12) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-plank.jpg " alt=" ">
                    <h2 class="text-center ">Plank</h2>
                    <h4>(30sec x2)</h4>
                    <button id="btn156 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(30 x2)</h4>
                    <button id="btn157 " onclick="seconds(this.id,30,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-spine-lumbar.jpg " alt=" ">
                    <h2 class="text-center ">Spine Lumbar Stretch Left </h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn158 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-spine-lumbar.jpg " alt=" ">
                    <h2 class="text-center ">Spine Lumbar Stretch Right</h2>
                    <h4>(30sec x1)</h4>
                    <button id="btn159 " onclick="seconds(this.id,30,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 4 day 3 -->
        <div class="collapse " id="icon-4-3 ">
            <h1 class="text-center ">Week 4 Day 3</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn160 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn161 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn162 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn163 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn164 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn165 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 4 day 4 -->
        <div class="collapse " id="icon-4-4 ">
            <h1 class="text-center ">Week 4 Day 4</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn166 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn167 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn168 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn169 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn170 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn171 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 4 day 5 -->
        <div class="collapse " id="icon-4-5 ">
            <h1 class="text-center ">Week 4 Day 5</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn172 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn173 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn174 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn175 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn176 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn177 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 4 day 6 -->
        <div class="collapse " id="icon-4-6 ">
            <h1 class="text-center ">Week 4 Day 6</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn178 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn179 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn180 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn181 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn182 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn183 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>

        <!-- week 4 day 7 -->
        <div class="collapse " id="icon-4-7 ">
            <h1 class="text-center ">Week 4 Day 7</h1>
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-jumping-jacks.gif " alt=" ">
                    <h2 class="text-center ">Jumping Jacks</h2>
                    <h4>(20sec x1)</h4>
                    <button id="btn184 " onclick="seconds(this.id,20,0) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-incline-push-up.gif " alt=" ">
                    <h2 class="text-center ">Incline Push Ups</h2>
                    <h4>(16 x2)</h4>
                    <button id="btn185 " onclick="time(this.id,16) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-knee-push-up.gif " alt=" ">
                    <h2 class="text-center ">Knee Push Ups</h2>
                    <h4>(10 x2)</h4>
                    <button id="btn186 " onclick="time(this.id,10) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
            <hr>

            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="gif/e-push-up.gif " alt=" ">
                    <h2 class="text-center ">Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn187 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-wide-push-up.gif " alt=" ">
                    <h2 class="text-center ">Wide Push Ups</h2>
                    <h4>(8 x2)</h4>
                    <button id="btn188 " onclick="time(this.id,8) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
                <div class="col-lg-4 ">
                    <img src="gif/e-cobra-stretch.jpg " alt=" ">
                    <h2 class="text-center ">Cobra Stretch</h2>
                    <h4>(20sec x2)</h4>
                    <button id="btn189 " onclick="seconds(this.id,20,1) " disabled="disabled " class="btn btn-primary ">Start</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <script src="js/script.js "></script>

</body>

</html>
<?php
}
else{
    header("Location: login.php?direct=notallowed");        
}

?>