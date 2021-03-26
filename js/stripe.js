var stripe = Stripe("pk_test_TYooMQauvdEDq54NiTphI7jx");
var elements = stripe.elements();

var style = {
  base: {
    color: "#32325d"
  }
};
//GENERAL SPONSOR
var card = elements.create("card", { style: style });
card.mount("#card-element");

//STRIPE VALIDATION
card.addEventListener("change", function(event) {
  var displayError = document.getElementById("card-errors");
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = "";
  }
});

//SPONSOR CHILD - indi to nagana!!!
var cardSponsor = elements.create("card-sponsor", { style: style });
cardSponsor.mount("#card-sponsor");

cardSponsor.addEventListener("change", function(event) {
  var displayError = document.getElementById("card-errors");
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = "";
  }
});
