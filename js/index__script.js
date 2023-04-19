function open__on__menu(){
    if(document.querySelector(".menu__list").style.height == "0px"){
      document.querySelector(".menu__list").style.height = "276px";
    }else{
      document.querySelector(".menu__list").style.height = "0px";
    }
  }