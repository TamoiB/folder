<?php 
$title = "Home | Codes By Shadaine";
$showcase_title = "Welcome to Codes By Shadaine";
$showcase_img = "images/black-woman-typing.jpg";
require_once 'inc/header.php';
?>
<section class="container" id="about" style="padding:50px 20px; background:var(--linen);">
    <h3 class="title unselectable">Who <span>am</span> I?</h3>
    <p class="lead">Say hello to Codes By Shadaine, My name is Shadaine Black and I am the owner of this website.
        This body of work is a documentation of codes written by me as I learn to code. I am a Sixteen-year-old who is
        still in high school. I create many projects in my spare time just for leisure. This website consists of demos
        of
        each of my projects which are made using HTML, CSS, JavaScript, PHP, SASS, and Bootstrap. </p>
    <ul class="social-list">
        <li><a href="https://www.instagram.com/tamoiblack/" target="blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://www.facebook.com/tamoiblack1" target="blank"><i class="fab  fa-facebook-square"></i></a>
        </li>
        <li><a href="https://twitter.com/tamoiblack_" target="blank"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://github.com/Tamoiblack1" target="blank"><i class=" fab fa-github-alt"></i></a></li>
        <li><a href="https://codepen.io/tamoiblack" target="blank"><i class="fab fab fa-codepen"></i></a></li>
    </ul>
</section>
<section class="container" style="border-bottom: 2px var(--linen) solid;">
    <h1 class="title unselectable">Projects <span>Support</span></h1>
    <p class="lead">Our Projects include HTML, JavaScript, CSS, PHP, SASS, and/or Bootstrap.</p>
    <div class="d-flex container" style="margin-top:30px; flex-direction:row;">
        <div class="flex-group">
            <i class="fab fa-html5 fa-7x" style="color:#FFA500
;"></i>
            <p class="lead unselectable">HTML5</p>
        </div>
        <div class="flex-group">
            <i class="fab fa-css3-alt fa-7x" style="color:#0000FF
;"></i>
            <p class="lead unselectable">CSS</p>
        </div>
        <div class="flex-group">
            <i class="fab fa-js fa-7x" style="color:#FFFF00;"></i>
            <p class="lead unselectable">JavaScript</p>
        </div>
        <div class="flex-group">
            <i class="fab fa-php fa-7x" style="color:#800080
;"></i>
            <p class="lead unselectable">PHP</p>
        </div>
        <div class="flex-group">
            <i class="fab fa-sass fa-7x" style="color:#FFC0CB
;"></i>
            <p class="lead unselectable">SASS</p>
        </div>
        <div class="flex-group">
            <i class="fab fa-bootstrap fa-7x" style="color:#563d7c;"></i>
            <p class="lead unselectable">Bootstrap</p>
        </div>
    </div>
</section>
<section class="container" style="border-bottom: 2px var(--linen) solid;">
    <h3 class="title unselectable" style="margin-top:30px;">Why <span>do</span> projects?</h3>
    <p class="lead" style="margin-bottom:40px;">
        Here at Codes By Shadaine, we do a lot of projects, whether they are small projects, websites, or webpage
        projects.
        In whatever you do in life practice becomes perfect. This is why we create numerous amount of projects to show
        the
        progress of my development in coding. These projects will be updated and revised to make the finished product
        quite
        fantastic. In life, we never stop learning and so I will reflect that thought onto my work to aim for
        perfection.
    </p>
    <a href="mini.php" class="btn unselectable" style="margin-bottom:30px;">View</a>
</section>
<section class="container" id="project-row">
    <div class="f-wrapper" style="box-shadow:none;  background:transparent; gap:0;">
        <div class="content" style="background: #fff; height: 100%;">
            <h3 class="title unselectable" style="margin-top: 20px;">Password Generator</h3>
            <p class="lead unselectable" style="margin-bottom:100px;"> Say Hello to our <span>Password Generator</span>,
                it allows you to check the type of characters desired for your password. This is completely randomized
                so your password is unique to you. Check whether you want numbers, symbols, uppercase letters or/and
                lowercase letters then click "Generate Password". Copy it to your clipboard to use however you like.
            </p>
        </div>
        <form class="form pass" style="background: #011627; color:#fff; ">
            <div class="input-group">
                <div class="form-control text-center" id="result"
                    style="font-size: 1.1rem; border-color:#fff; color:#333;">
                </div>
                <button class="btn unselectable" type="button" id="button-addon2" style="width:40px;"><i
                        class="far fa-clipboard"></i></button>
            </div>
            <div class="d-flex f-column jcc aic w-75 mx-auto">
                <div class="input-group unselectable">
                    <label for="Password-length" class="w-75">Password Length</label>
                    <input type="number" name="Password-length" id="Password-length" max="20" min="4" value="20"
                        style=" border-color:#fff;" class="w-25">
                </div>
                <div class="input-group unselectable">
                    <label for="symbolVal" class="w-75">Symbol</label>
                    <input type="checkbox" name="symbolVal" id="symbolVal" checked style="" class="w-25">
                </div>
                <div class="input-group unselectable">
                    <label for="number" class="w-75">Numbers</label>
                    <input type="checkbox" name="number" id="number" checked class="w-25">
                </div>
                <div class="input-group unselectable">
                    <label for="upperLetter" class="w-75">Uppercase</label>
                    <input type="checkbox" name="upperLetter" id="upperLetter" checked class="w-25">
                </div>
                <div class="input-group unselectable">
                    <label for="lowerLetter" class="w-75">Lowercase</label>
                    <input type="checkbox" name="lowerLetter" id="lowerLetter" checked class="w-25">
                </div>
            </div>

            <input type="button" value="Generate Password" class="btn unselectable"
                style="margin-top:30px; margin-bottom: 40px;" id="generateBtn">
        </form>
        <script>
        // Password Generator
        const output = document.getElementById('result');
        const lengthEl = document.getElementById('Password-length');
        const number = document.getElementById('number');
        const lowerLetter = document.getElementById('lowerLetter');
        const upperLetter = document.getElementById('upperLetter');
        const symbolVal = document.getElementById('symbolVal');
        const ClipBoardbtn = document.getElementById('button-addon2');
        const generate = document.getElementById('generateBtn');

        const gen = {
            lower: getLower,
            upper: getUpper,
            symbol: getSymbol,
            number: getNumber,
        };

        generate.addEventListener('click', () => {
            const length = +lengthEl.value;
            const hasLower = lowerLetter.checked;
            const hasUpper = upperLetter.checked;
            const hasNumber = number.checked;
            const hasSymbol = symbolVal.checked;

            output.innerText = generatePassword(
                hasLower,
                hasUpper,
                hasNumber,
                hasSymbol,
                length
            );
        });

        ClipBoardbtn.addEventListener('click', () => {
            const textarea = document.createElement('textarea');
            const Passcode = output.innerText;

            if (!Passcode) {
                return;
            }
            textarea.value = Passcode;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            textarea.remove();
            alert('Password is copied to clipboard.')
        });

        function generatePassword(lower, upper, number, symbol, length) {
            let passOutput = '';
            const typesCount = lower + upper + number + symbol;
            const typesArray = [{
                lower
            }, {
                upper
            }, {
                number
            }, {
                symbol
            }].filter(item => Object.values(item)[0]);
            if (typesCount === 0) {
                return '';
            }
            for (let i = 0; i < length; i += typesCount) {
                typesArray.forEach(type => {
                    const funcName = Object.keys(type)[0];
                    passOutput += gen[funcName]();
                })
            }
            const finalResult = passOutput.slice(0, length);
            return finalResult;
        }


        function getUpper() {
            return String.fromCharCode(Math.floor(Math.random() * 26) + 65);
        }

        function getLower() {
            return String.fromCharCode(Math.floor(Math.random() * 26) + 97);
        }

        function getNumber() {
            return String.fromCharCode(Math.floor(Math.random() * 10) + 48);
        }

        function getSymbol() {
            const sym = '!@#$%&()?{/'
            return sym[Math.floor(Math.random() * sym.length)];
        }
        </script>
    </div>
</section>
<?php require_once "inc/contact-form.php"?>
<?php require_once "inc/footer.php";?>