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

// function fetchChildren() {
//   let outputHTML;
//   let childList = document.querySelector(".children__list");
//   let spinner = document.querySelector(".preloader__wrapper");
//   let noChild = document.querySelector(".no__child");
//   fetch(
//     "https://demo.frontlinebusiness.com.ph/dev/ftc2021/ftc/rest/server/stripe/products/list-products.php"
//   )
//     .then((res) => res.json())
//     .then((data) => {
//       console.log(data)
// 	  if(Object.values(data)[1].length <= 0) {
// 		  noChild.style.display = "block"
// 		  spinner.classList.remove("show");
//       childList.style.display = "none"
// 	  } else {
// 		   //loop child start
//        childList.style.display = "grid"
//        noChild.style.display = "none"
// 		Object.values(data)[1].slice(0, 9).map(function (child) {
// 		 if(child.metadata.class == 'resident') {
//          let photo = "";
//          if(child.metadata.photo === "na" ) {
//             photo = `https://demo.frontlinebusiness.com.ph/dev/ftc2021/ftc/images/no-photo.jpg`;
//          } else {
//            photo = `https://demo.frontlinebusiness.com.ph/dev/ftc2021/ftc/images/${child.metadata.photo}`;
//          }

//          console.log(photo);
// 			   outputHTML = `
// 					<div class="child__item">
// 					<img src="${photo}" alt="${child.metadata.photo}" />

// 					 <div class="child__item__info">
// 					  <div class="infobox">
// 						  <div class="inner__info"> 
// 							  <h2>${child.name}</h2>
// 						  </div>
// 					  </div>
// 					 </div>   
// 					</div>
// 				  `;
// 		 } else {
// 			 outputHTML = "";
// 		 }	 
//           spinner.classList.remove("show");
//           childList.innerHTML += outputHTML;
//         });
// 	  //loop child end  
// 	  }

	  
			  
//     })
//     .catch((error) => {
//      return error = `
  
//     `
//     });
// }

window.addEventListener('scroll', addShadow)

function addShadow() {
  const header = document.querySelector('.header');
  let scrollPos = window.scrollY;
  if(scrollPos > 50) {
    header.style.boxShadow = "0 2px 2px rgba(0,0,0,0.2)"
  } else {
    header.style.boxShadow = "unset"
  }
  
}
