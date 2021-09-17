const toggleNavBtn = document.getElementById('toggleBtn');
const mobileNav = document.getElementById('toggleList');
const closeMobileNav = document.getElementById('closeNav');

toggleNavBtn.addEventListener('click', () => {
  mobileNav.classList.toggle('d-flex');
  console.log(mobileNav)
  closeMobileNav.addEventListener('click', () => {
    mobileNav.style.display = "none";
  })
});

//Accordion
const accordion = document.querySelectorAll('.title')

for (let i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener('click', () => {
    accordion[i].classList.toggle('hide')
    const nextSib = accordion[i].nextElementSibling;
    nextSib.classList.toggle('show');
    nextSib.classList.add('ani');
  })
}

