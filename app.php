<?php 
require "inc/header.php";
?>
<style>
.showcase,
.navbar,
.navbar-mobile,
.footer {
  display: none;
}

html {
  scroll-behavior: auto;
}

body {
  overflow: hidden;
}

.home {
  position: fixed;
  top: 20px;
  left: 30px;
  z-index: 5;
  font-size: 2rem;
  border: 2px solid #fff;
  padding: 10px;
  border-radius: 50%;
}
</style>
<a href="mini.php" class="home"><i class="fas fa-home"></i></a>
<section id="section-a">
  <style>
  #section-a {
    font-family: var(--lora-font);
    background-color: #d359c9;
    background: linear-gradient(27deg, rgba(186, 214, 66, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 69, 208, 1) 100%);
    height: 100vh;
  }

  #section-a .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.35);
    width: 60%;
    height: 400px;
    border-radius: 10px;
    position: absolute;
    top: 100px;
    left: 50%;
    transform: translateX(-50%);
  }

  #section-a .title {
    font-size: 2.5rem;
    font-weight: 500;
    margin-bottom: 20px;
  }

  #section-a .lead {
    font-size: 3.5rem;
    margin-bottom: 30px;
    margin-top: 10px;
    font-family: var(--mont-font);
    transition: all ease-in .3s;
  }

  #section-a .btn {
    background-color: #fff;
    border-color: #fff;
    color: #333;
  }

  #section-a .group-btn {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    flex-wrap: wrap;
  }

  @media (max-width:950px) {
    #section-a .container {
      width: 90%;
    }

  }

  @media (max-width:450px) {
    #section-a .container {
      width: 90%;
    }

    #section-a .title {
      font-size: 1.5rem;
    }

    #section-a .lead {
      font-size: 2.5rem;
    }

  }
  </style>
  <div class="container">
    <h3 class="title">The Counter</h3>
    <p class="lead" id="count">0</p>
    <div class="group-btn">
      <button class="btn" id="start">Start counter</button>
      <button class="btn" id="stop">Stop counter</button>
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
        clearInterval(counter)
      });
    }, 100);
  });
  </script>
</section>
<section id="section-b">
  <style>
  #section-b {
    background-color: #ff7f50;
    height: 100vh;
  }

  #section-b .container-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    text-align: center;
    transition: ease-in-out 1s;
  }

  #section-b .container {
    height: 70%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #ff7f50;
  }

  #section-b .container-content p {
    margin-bottom: 30px;
    font-size: 1.2rem;
  }

  #section-b a {
    color: #fff;
    text-decoration: none;
  }

  #section-b .btn {
    width: 30%;
    margin-left: auto;
    margin-right: auto;
    background-color: #333;
    color: white;
    padding: 0.3rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  #section-b .btn:focus {
    outline: none;
  }

  #section-b .modal {
    display: none;
    background-color: rgba(51, 51, 50, 0.555);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    margin-left: auto;
    position: fixed;
    margin-right: auto;
    z-index: 3;
    transition: ease-in-out 3s;
  }

  #section-b .modal-content {
    background-color: #fff;
    margin-top: 30vh;
    margin-left: auto;
    margin-right: auto;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    width: 60%;
    padding: 20px;
    position: relative;
  }

  #section-b .fas {
    position: absolute;
    top: 10px;
    font-size: 1rem;
    right: 10px;
    color: rgb(180, 178, 178);
    cursor: pointer;
    transition: linear 1s;
  }

  #section-b .modal-heading {
    text-align: center;
    margin-bottom: 20px;
    font-family: var(--lora-font);
  }

  #section-b .modal-para {
    text-align: justify;
    margin-bottom: 2rem;
    font-family: var(--mont-font);
  }

  #section-b .modal-content .btn {
    margin-left: auto;
    margin-right: auto;
    width: 30%;
    border: none;
    border-radius: 5px;
    color: #fff;
    padding: 10px;
    background-color: var(--cg-blue);
    cursor: pointer;
    margin-bottom: 20px;
  }

  @media (max-width: 600px) {
    #section-b .btn {
      width: 50%;
    }

    #section-b .modal-content .btn {
      width: 50%;
    }
  }

  @media (max-width: 450px) {
    #section-b .modal-content {
      width: 80%;
    }

    #section-b .modal-content .btn {
      width: 65%;
    }
  }
  </style>
  <div class="container">
    <div class="container-content" id="top">
      <h3 class="title">Codes By Shadaine | Modal</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit possimus laudantium dicta
        error, doloribus itaque quam ea officia perferendis repudiandae.
      </p>
      <input type="button" value="Click Me" class="btn" id="modalBtn" />
    </div>
    <div class="modal" id="modal">
      <div class="modal-content">
        <h1 class="modal-heading">Codes By Shadaine</h1>
        <i class="fas fa-times" id="closeModal"></i>
        <p class="modal-para">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, corrupti? Est nam tenetur,
          vel iusto quae cupiditate facilis dolore ab minus quos perspiciatis amet quis, modi
          nisi? Perspiciatis, itaque animi.
        </p>
        <button class="btn">Read More</button>
      </div>
    </div>
  </div>
  <script defer>
  var btn = document.getElementById("modalBtn");
  var p = document.getElementById("modal");
  var close = document.getElementById("closeModal");
  btn.addEventListener("click", () => {
    p.style.display = "block";
  });
  close.addEventListener("click", () => {
    p.style.display = "none";
  });
  </script>
</section>
<section id="section-c">
  <style>
  #section-c {
    box-sizing: border-box;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  #section-c main {
    width: 500px;
    height: 200px;
    background-color: rgba(255, 255, 255, 0.425);
    border-radius: 25px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  #section-c main a {
    color: #fff;
    font-size: 2rem;
  }

  #section-c main a:hover {
    transform: rotateY(180deg);
    border-radius: 50%;
    height: 3rem;
    width: 3rem;
    border: 1.3px solid #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    text-shadow: 3px 1px 1px #333;
    transition: ease-in-out .7s transform;
    box-shadow: 2px 2px 2px #333;
    text-decoration: none;
  }

  #section-c .container {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
    background-color: #ff00ff;
    background: linear-gradient(27deg, rgba(186, 214, 66, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 69, 208, 1) 100%);
    box-shadow: #ff00ff 7px 5px 1px;
    padding: 5px;
    margin: 0 auto;
    width: 400px;
    height: 50px;
    border-radius: 20px;
    border: #fff 2px solid;
  }

  @media (max-width:550px) {
    #section-c .container {
      flex-direction: column;
      height: 400px;
      width: 50px;
    }

    #section-c main {
      height: 470px;
      width: 200px;
    }
  }
  </style>
  <main>
    <div class="container">
      <div class="social-c">
        <a href="https://www.instagram.com/" target="blank"> <i class="fab fa-instagram"></i></a>
      </div>
      <div class="social-c">
        <a href="https://www.facebook.com" target="blank"> <i class="fab fab fa-facebook-f"></i></a>
      </div>
      <div class="social-c">
        <a href="https://twitter.com" target="blank"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="social-c">
        <a href="https://www.snapchat.com/" target="blank"><i class="fab fab fa-snapchat-ghost"></i></a>
      </div>
      <div class="social-c">
        <a href="https://www.youtube.com/" target="blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </main>
</section>
<section id="section-d">
  <style>
  :root {
    --main-color: #dc143c;
  }

  #section-d {
    background-color: #fff;
    height: 100vh;
    background: linear-gradient(112.9deg, rgba(112, 255, 151, 1)6.2%, rgba(70, 195, 255, 1)99.7%);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #section-d main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
  }

  #section-d .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-bottom: 100px;
    background-color: rgba(255, 255, 255, .3);
    padding: 20px;
    border-radius: 10px;
    width: 70%
  }

  #section-d .heading {
    font-size: 1.5rem;
    font-family: 'Nova Flat', cursive;
    text-align: center;
    margin-bottom: 1rem
  }

  #section-d .heading-span {
    color: var(--main-color);
    font-weight: bolder
  }

  #section-d .content {
    font-family: 'NanumMyeongjo', serif;
    text-align: center;
    margin-bottom: .8rem
  }

  #section-d .input-group {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 2px;
    width: 100%
  }

  #section-d .input {
    width: 80%;
    background-color: transparent;
    border: none;
    border-bottom: solid 2px #000;
    font-family: var(--dafault-text);
    font-size: 1rem;
    padding: 3px
  }

  #section-d .input:focus {
    outline: none
  }

  #section-d main.fas {
    font-size: 16px;
    color: var(--main-color);
  }

  #section-d .btn {
    cursor: pointer;
    width: 30px;
    height: 30px;
    background-color: transparent;
    border: 2px solid#000;
    border-radius: 50%
  }

  #section-d .list {
    margin-top: 2rem;
    text-decoration: none;
    margin-left: .5rem;
    margin-right: .5rem;
    text-align: justify;
    flex-direction: column;
    justify-content: start;
  }

  #section-d main li {
    text-decoration: none;
    font-size: .7rem;
    font-family: var(--raleway-text);
    list-style-type: none;
    padding: 5px;
    margin-top: 3px;
    cursor: pointer;
    letter-spacing: 1px;
    position: relative;
  }

  #section-d .ani {
    animation-name: enter;
    animation-timing-function: ease-in-out;
    animation-duration: 1s;
  }

  @keyframes enter {
    0% {
      transform: scale(0)
    }

    100% {
      transform: scale(1)
    }
  }

  #section-d main li:nth-child(odd) {
    background-color: rgba(255, 255, 255, .9)
  }

  #section-d main li::before {
    content: "\2610";
    margin-right: 4px;
  }

  #section-d main li:hover {
    text-decoration: line-through;
    transition: ease-in-out 1s;
  }

  #section-d .checked {
    font-weight: bold;
    font-style: italic;
    color: var(--main-color);
    transition: none;
  }

  #section-d .checked:hover {
    text-decoration: none;
  }

  #section-d .checked::before {
    content: '\2713';
    font-weight: bolder;
    color: #006400;
    font-size: 1rem;
  }

  #section-d .checked::after {
    content: '\26CC';
    padding: 0 3px;
    right: 2px;
    font-style: normal;
    position: absolute
  }

  #section-d .clear {
    width: 100px;
    font-size: 1rem;
    background: transparent;
    border: none;
    color: rgb(194, 191, 191);
    margin-left: auto;
    margin-right: auto;
    cursor: pointer;
    margin-top: 20px
  }

  #section-d .clear:hover {
    color: #333;
    transition: all ease-in-out .5s
  }

  @media (max-width:950px) {
    #section-d .heading {
      font-size: 2rem
    }

    #section-d main li {
      font-size: 1rem
    }
  }

  @media(max-width:450px) {
    #section-d .container {
      width: 90%
    }

    #section-d .heading {
      font-size: 1.1rem
    }

    #section-d .content {
      font-size: .9rem
    }
  }
  </style>

  <div class="container">
    <h2 class="heading title">AdMath <span class="heading-span">|</span>ToDo List</h2>
    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <div class="input-group"><input class="input" type="text" name="doInput" id="doInput" /><button class="btn"
        id="addInput" title="Add to List"><i class="fas fa-plus" id=""></i></button></div>
    <ul class="list" id="list">
      <li>Do something</li>
    </ul><button class="clear" id="clear">(Remove all)</button>
  </div>
  <script defer>
  var add = document.getElementById('addInput');
  var newItem = document.getElementById('doInput');
  var clear = document.getElementById('clear');
  var list = document.getElementById('list');
  var listers = document.querySelector('#list');
  listItem = document.getElementsByTagName('li');
  var todo;
  add.addEventListener('click', addItemToList);
  newItem.addEventListener('keydown', function(e) {
    if (e.code === "Enter") {
      addItemToList();
    }
  });

  function addItemToList() {
    if (newItem.value != '') {
      todo = '<li>' + newItem.value + '</li>';
      list.innerHTML += todo;
      save();
      newItem.value = ' '
    } else {
      return
    }
  };
  listers.addEventListener('click', (e) => {
    var h = e.target;
    if (h.classList.contains('checked')) {
      h.parentNode.removeChild(h);
      save();
    } else {
      h.classList.add('checked');
      save()
    }
  }, false);
  clear.addEventListener('click', () => {
    list.innerHTML = ' ';
    save()
  });

  function save() {
    window.localStorage.myitems = list.innerHTML;
  };

  function restore() {
    if (window.localStorage !== null) {
      list.innerHTML = window.localStorage.myitems;
    }
  };
  restore();
  </script>
</section>
<section id="section-e">
  <style>
  #section-e {
    font-family: var(--raleway-font);
    height: 100vh;
    background:
      url('https://images.pexels.com/photos/326055/pexels-photo-326055.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') no-repeat center center/cover;
    color: white;
    overflow: hidden;
  }

  #section-e .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
    padding: 0 3rem;
    background: transparent;
  }

  #section-e h1,
  #section-e h2 {
    font-weight: 200;
    margin: 0.4rem;

  }

  #section-e h1 {
    font-size: 3.5rem;
  }

  #section-e h2 {
    font-size: 2rem;
  }

  #section-e .txt-type>.txt {
    border-right: 0.2rem solid white;
  }

  @media (min-width:1200px) {
    #section-e h1 {
      font-size: 5rem;
    }
  }

  @media (max-width:800px) {
    #section-e h1 {
      font-size: 3rem;
    }

    #section-e .container {
      padding: 0 1rem;
    }

    @media (max-width:500px) {
      #section-e h1 {
        font-size: 2.5rem;
        text-align: center;
      }

      #section-e h2 {
        font-size: 1.5rem;
        text-align: center;
      }
    }
  }

  @media (max-width:350px) {
    #section-e h1 {
      font-size: 1.8rem;
      text-align: center;
    }

    #section-e h2 {
      text-align: center;
      font-size: 1rem;
    }
  }
  </style>
  <div class="container">
    <h1>
      Shadaine Black The
      <span class="txt-type" data-wait="3000" data-words='[ "Mathematican", "Scientist", "Developer", "Boss"]'></span>
    </h1>
    <h2>Welcome To My Website</h2>
  </div>
  <script defer>
  const TypeWriter = function(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
  };
  TypeWriter.prototype.type = function() {
    const current = this.wordIndex % this.words.length;
    const full = this.words[current]
    if (this.isDeleting) {
      this.txt = full.substring(0, this.txt.length - 1);
    } else {
      this.txt = full.substring(0, this.txt.length + 1);
    }
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;
    let typeSpeed = 300;
    if (this.isDeleting) {
      typeSpeed /= 2;
    };
    if (!this.isDeleting && this.txt === full) {
      typeSpeed = this.wait;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.wordIndex++;
      typeSpeed = 500;
    };
    setTimeout(() => this.type(), typeSpeed);
  };
  document.addEventListener('DOMContentLoaded', init);

  function init() {
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');
    new TypeWriter(txtElement, words, wait);
  };
  </script>
</section>
<section id="section-f">
  <style>
  #section-f {
    background: #fff;
    height: 100vh;
    position: relative;
  }

  #section-f .slider {
    position: relative;
    overflow: hidden;
    height: 100vh;
  }

  #section-f .slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
  }

  #section-f .current {
    opacity: 1;
  }

  #section-f h1 {
    text-align: left;
    margin-top: 30px;
  }

  #section-f .lead {
    font-size: 1rem;
  }

  .slide .content {
    position: absolute;
    bottom: 70px;
    left: -700px;
    color: black;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 25px;
    opacity: 0;
    width: 600px;
    height: 150px;
  }

  .slide.current .content {
    opacity: 1;
    transition: ease-in-out;
    transition-duration: 0.7s;
    transition-delay: 0.3;
    transform: translateX(700px);
  }

  #section-f button#next {
    position: absolute;
    top: 50%;
    right: 45px;
  }

  #section-f button#prev {
    position: absolute;
    top: 50%;
    left: 15px;
  }

  #section-f .buttons button {
    border: 2px solid white;
    cursor: pointer;
    padding: 10px;
    border-radius: 50%;
    color: white;
    background: transparent;
  }

  #section-f .slide:first-child {
    background: url(images/image-slider-images/bg-image1-min.jpeg) no-repeat center center/cover;
    transition: .8s ease-in all;
  }

  #section-f .slide:nth-child(2) {
    background: url(images/image-slider-images/bg-image2-min.jpeg) no-repeat center top/cover;
    transition: .8s ease-in all;
  }

  #section-f .slide:nth-child(3) {
    background: url(images/image-slider-images/bg-image3-min.jpeg) no-repeat center top/cover;
    transition: .8s ease-in all;
  }

  #section-f .slide:nth-child(4) {
    transition: .8s ease-in all;
    background: url(images/image-slider-images/bg-image4-min.jpeg) no-repeat center top/cover;
  }

  #section-f .slide:nth-child(5) {
    transition: .8s ease-in all;
    background: url(images/image-slider-images/bg-image5-min.jpeg) no-repeat center top/cover;
  }

  #section-f .slide:nth-child(6) {
    transition: .8s ease-in all;
    background: url(images/image-slider-images/bg-image6-min.jpeg) no-repeat center top/cover;
  }

  #section-f .slide:nth-child(7) {
    transition: .8s ease-in all;
    background: url(images/image-slider-images/bg-image7-min.jpg) no-repeat center top/cover;
  }

  @media (max-width:700px) {

    #section-f .slide .content {
      width: 60%;
      bottom: 50px;
      padding: 15px;
    }
  }
  </style>
  <div class="slider">
    <div class="slide current">
      <div class="content">
        <h1 class="title">Slide one</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit ex aspernatur
          blanditiis voluptates
          expedita.</p>
      </div>
    </div>
    <div class="slide ">
      <div class="content">
        <h1 class="title">Slide two</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit ex aspernatur
          blanditiis voluptates
          expedita.</p>
      </div>
    </div>
    <div class="slide ">
      <div class="content">
        <h1 class="title">Slide three</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit ex aspernatur
          blanditiis voluptates
          expedita.</p>
      </div>
    </div>
    <div class="slide ">
      <div class="content">
        <h1 class="title">Slide four</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit ex aspernatur
          blanditiis voluptates
          expedita.</p>
      </div>
    </div>
    <div class="slide ">
      <div class="content">
        <h1 class="title">Slide five</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit ex aspernatur
          blanditiis voluptates
          expedita.</p>
      </div>
    </div>
    <div class="slide ">
      <div class="content">
        <h1 class="title">Slide six</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit ex aspernatur
          blanditiis voluptates
          expedita.</p>
      </div>
    </div>
    <div class="slide ">
      <div class="content">
        <h1 class="title">Slide seven</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit ex aspernatur
          blanditiis voluptates
          expedita.</p>
      </div>
    </div>
  </div>
  </div>
  <div class="buttons">
    <button id="prev"><i class="fas fa-arrow-left"></i></button>
    <button id="next"><i class="fas fa-arrow-right"></i></button>
  </div>
  <script defer>
  const slides = document.querySelectorAll('.slide');
  const next = document.querySelector('#next');
  const prev = document.querySelector('#prev');
  const auto = false;
  const intervalTime = 5000;
  let slideInterval;
  const nextSlide = () => {
    const current = document.querySelector('.current');
    current.classList.remove('current');
    if (current.nextElementSibling) {
      current.nextElementSibling.classList.add('current');
    } else {
      slides[0].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
  };
  const prevSlide = () => {
    const current = document.querySelector('.current');
    current.classList.remove('current');
    if (current.previousElementSibling) {
      current.previousElementSibling.classList.add('current');
    } else {
      slides[slides.length - 1].classList.add('current');
    };
    setTimeout(() => current.classList.remove('current'));
  };
  next.addEventListener('click', e => {
    nextSlide();
  });
  prev.addEventListener('click', e => {
    prevSlide();
  });
  if (auto) {
    slideInterval = setInterval(nextSlide, intervalTime);
  } else {};
  </script>
</section>
<?php require "inc/footer.php";?>