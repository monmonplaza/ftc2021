// GENERAL DONATION PAGE //

document.addEventListener("DOMContentLoaded", function () {
  fetchChildren();
});

//DOM ONLOAD END

const toggleMenu = document.querySelector("#toggleMenu");
const nav = document.querySelector("nav");
const mainheader = document.querySelector(".main-header");

if (toggleMenu) {
  toggleMenu.addEventListener("click", () => {
    toggleMenu.classList.toggle("open");

    document.querySelector("body").classList.toggle("no-scroll");

    nav.classList.toggle("active");
  });
}

const navbarLinks = document.querySelectorAll(".faq-links");

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", navbarLinkClick);
}

function navbarLinkClick(event) {
  smoothScroll(event);
}
function smoothScroll(event) {
  event.preventDefault();
  const targetId =
    event.currentTarget.getAttribute("href") === "#"
      ? "qna"
      : event.currentTarget.getAttribute("href");
  document.querySelector(targetId).scrollIntoView({
    behavior: "smooth",
    block: "start",
    inline: "end",
  });
}

const allOpen = document.querySelectorAll(".qna__block");
const questions = document.querySelectorAll(".questions");

function removeIsOpen() {
  allOpen.forEach((open) => {
    if (open.classList.contains("isOpen")) {
      open.classList.remove("isOpen");
    }
  });
}

questions.forEach(function (question) {
  question.addEventListener("click", () => {
    removeIsOpen();
    question.parentElement.classList.toggle("isOpen");
  });
});

//FETCH CHILDREN

function fetchChildren() {
  let outputHTML;
  let childList = document.querySelector(".children__list");
  let spinner = document.querySelector(".preloader__wrapper");
  fetch(
    "https://demo.frontlinebusiness.com.ph/dev/ftc2021/ftc/rest/server/stripe/products/list-products.php"
  )
    .then((res) => res.json())
    .then((data) => {
      console.log(Object.values(data));
      Object.values(data)[1]
        .slice(0, 2)
        .map(function (child) {
          outputHTML = `
        <div class="child__item">
        <img src="http://localhost/ftc/wp-content/uploads/2021/03/noPhoto.jpg" alt="" />
        
         <div class="child__item__info">
          <div class="infobox">
              <div class="inner__info"> 
                <h2>${child.name}</h2>
                <a href="#">View info</a>
              </div>
              <a href="" class="btn--help">Help <img src="http://localhost/ftc/wp-content/uploads/2021/03/icon_arrow-right.png"/></a>
          </div>
          <div class="donation__bar">
            <div class="donation__bar__percent"></div>
            <p>20% - sponsored</p>
          </div>
         </div>   
        </div>
      `;
          spinner.classList.remove("show");
          childList.innerHTML += outputHTML;
        });
    })
    .catch((error) => "Something when wrong!");
}
