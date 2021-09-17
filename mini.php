<?php
$title = "Mini Projects | Codes By Shadaine";
$showcase_title = "Mini Projects";
$showcase_img='images/woman-typing.jpg';
require_once "inc/header.php";
?>
<style>
.showcase-img {
    display: none;
}

.showcase {
    height: 450px;
    background-image: url('https://static.wixstatic.com/media/4413f9b523b74b658fc475af2ad9bdb5.png/v1/crop/x_0,y_0,w_140,h_141,q_85/4413f9b523b74b658fc475af2ad9bdb5.webp');
    background-size: auto;
    background-repeat: repeat;
    background-position: center center
}
</style>
<!-- Accordion for Mini Projects -->
<div class="container" id="accordion" style="background-color: var(--linen);">
    <h3 class="title">All my <span>mini</span> projects</h3>
    <ul class="social-list unselectable">
        <li>
            <a href="https://www.instagram.com/tamoiblack/" target="blank"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
            <a href="https://twitter.com/tamoiblack" target="blank"></a><i class="fab fa-twitter"></i>
        </li>
        <li>
            <a href="https://github.com/Tamoiblack1" target="blank"><i class="fab fab fa-github-alt"></i></a>
        </li>
    </ul>
    <div class="accordion-group unselectable">
        <div class="collaspe">
            <p class="group-text title">The Counter</p>
            <div class="accordion-body show">
                <p class="lead">
                    The <span>Counter</span> is a mini application that consist of a number value which is
                    increased by one every <span>200ms</span>. It is controlled by start and stop
                    <span>buttons</span> that will pause and play the increasing value.
                </p>
                <a class="btn" href="app.php#section-a">View</a>
            </div>
        </div>
        <div class="collaspe">
            <p class="group-text title">Fullscreen Carousel</p>
            <div class="accordion-body show">
                <p class="lead">
                    The <span>Random Gradient</span> Background is a mini application that consist of a
                    <span>button</span> that changes the background to different gradients. The
                    application also allows the <span>CSS</span> code to be copied to the clipboard.
                </p>
                <a class="btn" href="">View</a>
            </div>
        </div>
        <div class="collaspe">
            <p class="group-text title">My Todo App</p>
            <div class="accordion-body show">
                <p class="lead">
                    The <span>Todo</span> application is a responsive web-page which consist of an text
                    input to add to the Unordered list a task inputted by the user. The tasks added to the
                    <span>Todo</span> list are saved to the user's <span>local storage</span> and are
                    accessable on reload and/or revisiting webpage.
                </p>
                <a class="btn" href="app.php#section-d">View</a>
            </div>
        </div>
        <div class="collaspe">
            <p class="group-text title">Socials Navigation</p>
            <div class="accordion-body show">
                <p class="lead">
                    The <span>Socials Navigation</span> mini project is an application that consist of an
                    <span>animated navigation</span> with different social media sites, along with their
                    respective logos.
                </p>
                <a class="btn" href="app.php#section-c">View</a>
            </div>
        </div>
        <div class="collaspe">
            <p class="group-text title">Typewriter</p>
            <div class="accordion-body show">
                <p class="lead">
                    The <span>Random Image</span> Background is a mini application that consist of a
                    <span>button</span> that changes the background to different images. The images used
                    in this application are available at <a href="files.html">Media Used</a> and are
                    available to be downloaded.
                </p>
                <a class="btn" href="app.php#section-e">View</a>
            </div>
        </div>
        <div class="collaspe">
            <p class="group-text title">Modal</p>
            <div class="accordion-body show">
                <p class="lead">
                    The <span>Modal</span> app is a mini application that represents the demo of opening
                    of a <span>modal</span>. In the application there are <span>buttons</span> that allows
                    the opening and closing of the <span>modal</span>.
                </p>
                <a class="btn" href="app.php#section-b">View</a>
            </div>
        </div>
    </div>
</div>
<section class="container" id="project-row" style="background:#fff; margin-bottom:40px;">
    <style>
    #body {
        background-color: blue;
        height: 100%;
        box-shadow: 3px 3px 6px #333;
    }

    #body .text {
        font-size: 20px;
        margin-right: 10px;
        font-weight: bolder;
        color: #000;
        font-family: var(--mont-font);
    }

    #body .color {
        font-size: 20px;
        font-weight: bold;
        font-family: var(--mont-font);
        color: #000;
    }

    #body.btn {
        font-size: x-large;
        background-color: transparent;
        border: double white 5px;
        cursor: pointer;
        width: 150px;
        ;
        padding: 10px;
    }

    #body .btn:hover {
        background-color: white;
        font-style: italic;
        border-color: black;
    }
    </style>
    <h2 class="title">Random <span>Background</span> Color</h2>
    <div class="content w-50 rancol" style="gap:50px; height:400px; " id="body">
        <div class="d-flex">
            <div class="text" id="backgroundText">Background Color:</div>
            <div class="color" id="backgroundColor"> blue</div>
        </div>
        <button class="btn" id="button">Click Me!</button>
    </div>
    <script defer>
    const background = document.getElementById('backgroundText');
    const colorName = document.getElementById('backgroundColor');
    const btn = document.getElementById('button');
    const body = document.getElementById('body');
    const colorArray = ['#333', '#020887', '#647aa3', '#b89e97', '#3B3561', '#EAD94C', '#D64045',
        '#C46BAE', '#EED5C2', '#4F000B', '#720026', '#A5FFD6', '#736CED', '#35FF69', '#D138BF',
        '#FC440F',
        '#1F01B9'
    ];
    btn.addEventListener('click', change);
    body.style.backgroundColor == '#FC440F';

    function change() {
        var Index = parseInt(Math.random() * colorArray.length)
        colorName.innerText = colorArray[Index];
        body.style.backgroundColor = colorArray[Index];
    }
    </script>
    </div>
</section>
<section class="container" id="project-row" style="background:#fff;">
    <div class="f-wrapper h-100" style="box-shadow:none;  background:transparent; gap:0;">
        <div class="content" style="background: var(--platinum); height: 100%;">
            <h3 class="title unselectable" style="margin-top: 50px;"> Stop & Start Counter</h3>
            <p class="lead unselectable" style="margin-bottom:100px;"> Say Hello to our <span>Counter</span>,
                it allows you to start and stop the type of characters desired for your password. This is completely
                randomized
                so your password is unique to you. Check whether you want numbers, symbols, uppercase letters or/and
                lowercase letters then click "Generate Password". Copy it to your clipboard to use however you like.
            </p>
        </div>
        <div class="count container h-100" style="background: #011627; color:#fff; ">
            <h3 class="title" style="font-family:var(--mont-font); font-size:2.5rem; margin-top:-20px;">The Counter</h3>
            <p class="lead" id="count" style="font-size: 1.5rem;">0</p>
            <div class="group-btn">
                <button class="btn" style="background:var(--champagne-pink-2); border-color: var(--champagne-pink-2);"
                    id="start">Start
                    counter</button>
                <button class="btn" style="background:var(--champagne-pink-2); border-color: var(--champagne-pink-2);"
                    id="stop">Stop
                    counter</button>
            </div>
        </div>
        <script defer>
        const stopBtn = document.getElementById('stop');
        const startBtn = document.getElementById('start');
        const counterNum = document.getElementById('count');

        let count = 0;

        startBtn.addEventListener('click', () => {
            const counter = setInterval(() => {
                count++;
                counterNum.textContent = count;
                stopBtn.addEventListener('click', () => {
                    clearInterval(counter);
                });
            }, 100);
        });
        </script>
    </div>
</section>
<section class="container" style="border-bottom: 2px var(--linen) solid; display:none;">
    <h1 class="title">Mini <span>Projects</span> For Download</h1>
    <p class="lead">Download Our Mini Projects For Free!</p>
    <div class="d-flex" style="margin-top:30px;">
        <div class="flex-group" style="margin-right:-20px;">
            <a href=""><i class="fas fa-file-archive fa-5x" style="color: #f0c44c;"></i></a>
            <p class="lead">Counter</p>
        </div>
        <div class="flex-group" style="margin-right:-20px;">
            <a href="index.php" download><i class="fas fa-file-archive fa-5x" style="color: #f0c44c;"></i></a>
            <p class="lead">Fullscreen Carousel</p>
        </div>
        <div class="flex-group" style="margin-right:-20px;">
            <a href="Mini-Application/todolist-20210911T232715Z-001.zip" download><i class="fas fa-file-archive fa-5x"
                    style="color: #f0c44c;"></i></a>
            <p class="lead">TodoList</p>
        </div>
        <div class="flex-group" style="margin-right:-20px;">
            <a href="" download><i class="fas fa-file-archive fa-5x" style="color: #f0c44c;"></i></a>
            <p class="lead">Modal</p>
        </div>
        <div class="flex-group" style="margin-right:-20px;">
            <a href="" download><i class="fas fa-file-archive fa-5x" style="color: #f0c44c;"></i></a>
            <p class="lead">Typewriter</p>
        </div>
        <div class="flex-group" style="margin-right:-20px;">
            <a href="" download><i class="fas fa-file-archive fa-5x" style="color: #f0c44c;"></i></a>
            <p class="lead">Social Links</p>
        </div>
    </div>
</section>
<script>
if (body.style.backgroundColor = "#35FF69" || body.style.backgroundColor = "#647aa3" || body.style
    .backgroundColor = "#EAD94C") {
    background.style.color = "#000";
    colorName.style.color = "#000";
} else {
    background.style.color = "#fff";
    colorName.style.color = "#fff";
}
</script>
<?php require "inc/contact-form.php";?>
<?php require "inc/footer.php";?>