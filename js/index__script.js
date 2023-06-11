function open__on__menu(){

    if(document.querySelector(".menu__list").style.height == "0px"){
      document.querySelector(".menu__list").style.height = "276px";
    }else{
      document.querySelector(".menu__list").style.height = "0px";
    }

  }
let i,
    e,
    b = document.querySelectorAll(".grid__item__fetured__listings");

    const rentFil = document.querySelector(".rent__filter");
    const buyFil = document.querySelector(".buy__filter");

function activeButtonFilterBuy() {

  if(!buyFil.classList.contains("active__button__filter")){
    buyFil.classList.add("active__button__filter");
  }else{
    buyFil.classList.remove("active__button__filter");
  }

  for(i = 0; i < b.length; i++){

    if(b[i].classList.contains("hide")){
      b[i].classList.add("hide");
    }

    if(buyFil.classList.contains("active__button__filter") && !b[i].classList.contains("itsale") && !b[i].classList.contains("hide")){
      b[i].classList.add("hide");
    }else{
      b[i].classList.remove("hide");
    }
  }
  for(i = 0; i < b.length; i++){

    if(b[i].classList.contains("hide")){
      b[i].classList.add("hide");
    }

    if(rentFil.classList.contains("active__button__filter") && buyFil.classList.contains("active__button__filter") && b[i].classList.contains("hide")){
      b[i].classList.remove("hide");
    }

    if(!buyFil.classList.contains("active__button__filter") && rentFil.classList.contains("active__button__filter") && b[i].classList.contains("itsale") && !b[i].classList.contains("hide")){
      b[i].classList.add("hide");
    }
  }
}

function activeButtonFilterRent() {

        if(!rentFil.classList.contains("active__button__filter")){
          rentFil.classList.add("active__button__filter");
        }else{
          rentFil.classList.remove("active__button__filter");
        }

        for(e = 0; e < b.length; e++){

          if(b[e].classList.contains("hide")){
            b[e].classList.add("hide");
          }

          if(rentFil.classList.contains("active__button__filter") && b[e].classList.contains("itsale") && !b[e].classList.contains("hide")){
            b[e].classList.add("hide");
        }else{
          b[e].classList.remove("hide");
        }

        }

        for(i = 0; i < b.length; i++){

          if(b[i].classList.contains("hide")){
            b[i].classList.add("hide");
          }

          if(rentFil.classList.contains("active__button__filter") && buyFil.classList.contains("active__button__filter") && b[i].classList.contains("hide")){
            b[i].classList.remove("hide");
          }

          if(buyFil.classList.contains("active__button__filter") && !rentFil.classList.contains("active__button__filter") && b[i].classList.contains("itrent") && !b[i].classList.contains("hide")){
            b[i].classList.add("hide");
          }

          if(b[i].classList.contains("hide")){
            b[i].classList.add("hide");
          }
        }
      };

      let y, 
          r;
      function searchtitle() {
        let sval = document.getElementById("countryInput").value.toUpperCase();
        let tit = document.getElementsByTagName("h2");
        let tat = document.getElementsByTagName("a");
        
        if(sval != ''){
                  for(let i = 0; i < b.length; i++){
                    if(b[i].classList.contains("hide")){
                      b[i].classList.add("hide");
                    }
                    let match = b[i].getElementsByTagName("h2")[0];
                    if(match){
                      let textValue = match.textContent || match.innerHTML;
                      if(textValue.toUpperCase().indexOf(sval) == -1){
                        b[i].classList.add("hide");
                      }else{
                        b[i].classList.remove("hide");
                      }
                    }
                  }
          }
          else{
            for(y = 0; y < b.length; y++){
                b[y].classList.remove("hide");
              }

      }};

function searchPrice() {
  let priceFrom = parseFloat(document.getElementById("priceFromInput").value.replace(/\D/g, ""));
  let priceTo = parseFloat(document.getElementById("priceToInput").value.replace(/\D/g, ""));
  let cards = document.getElementsByClassName("grid__item__fetured__listings");

  for (let i = 0; i < cards.length; i++) {
    let card = cards[i];
    let textValue = card.getElementsByClassName("room__price")[0].textContent || card.getElementsByClassName("room__price")[0].innerHTML;
    let price = parseFloat(textValue.replace(/\D/g, ""));

    if (!isNaN(price)) {
      if ((isNaN(priceFrom) || price >= priceFrom) && (isNaN(priceTo) || price <= priceTo)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    }
  }
}
function searchareaFROM() {
  let fromVal = parseFloat(document.getElementById("areaFromInput").value.replace(/\D/g, ""));
  let cards = document.getElementsByClassName("grid__item__fetured__listings");

  for (let i = 0; i < cards.length; i++) {
    let card = cards[i];
    let textValue = card.getElementsByClassName("square")[0].textContent || card.getElementsByClassName("square")[0].innerHTML;
    let area = parseFloat(textValue.replace(/\D/g, ""));

    if (!isNaN(area)) {
      if ((isNaN(fromVal) || area >= fromVal)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    }
  }
}


function searchareaTO() {
  let toVal = parseFloat(document.getElementById("areaToInput").value.replace(/\D/g, ""));
  let cards = document.getElementsByClassName("grid__item__fetured__listings");

  for (let i = 0; i < cards.length; i++) {
    let card = cards[i];
    let textValue = card.getElementsByClassName("square")[0].textContent || card.getElementsByClassName("square")[0].innerHTML;
    let area = parseFloat(textValue.replace(/\D/g, ""));

    if (!isNaN(area)) {
      if (isNaN(toVal) || area <= toVal) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    }
  }
}
