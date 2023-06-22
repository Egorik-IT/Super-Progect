const scheme__open__item__first = document.querySelector(".floorplans__item__scheme__first");
const scheme__open__item__second = document.querySelector(".floorplans__item__scheme__second");
const scheme__open__item__thrid = document.querySelector(".floorplans__item__scheme__thrid");

function open__scheme__first(){
    if(scheme__open__item__first.style.height == "0px"){
        scheme__open__item__first.style.height = "100%";
        document.querySelector(".down__arrow__icons__animation__first").style.transform = "rotate(180deg)";
        document.querySelector(".floorplans__item__text__information__first").style.background = "#30caa0";
        document.querySelector(".floorplans__item__text__information__first").style.color = "#fff";
        document.querySelector(".floorplans__item__text__information__first").style.border = "1px solid #30caa0";
        document.querySelector(".down__arrow__icons__animation__first").style.color = "#fff";
    }else{
        scheme__open__item__first.style.height = "0px";
        document.querySelector(".down__arrow__icons__animation__first").style.transform = "rotate(0deg)";
        document.querySelector(".floorplans__item__text__information__first").style.background = "#f7f7f7";
        document.querySelector(".floorplans__item__text__information__first").style.color = "#707070";
        document.querySelector(".floorplans__item__text__information__first").style.border = "1px solid #e1e1e1";
        document.querySelector(".down__arrow__icons__animation__first").style.color = "#707070";
    }
};

function open__scheme__second(){
    if(scheme__open__item__second.style.height == "0px"){
        scheme__open__item__second.style.height = "100%";
        document.querySelector(".down__arrow__icons__animation__second").style.transform = "rotate(180deg)";
        document.querySelector(".floorplans__item__text__information__second").style.background = "#30caa0";
        document.querySelector(".floorplans__item__text__information__second").style.color = "#fff";
        document.querySelector(".floorplans__item__text__information__second").style.border = "1px solid #30caa0";
        document.querySelector(".down__arrow__icons__animation__second").style.color = "#fff";
    }else{
        scheme__open__item__second.style.height = "0px";
        document.querySelector(".down__arrow__icons__animation__second").style.transform = "rotate(0deg)";
        document.querySelector(".floorplans__item__text__information__second").style.background = "#f7f7f7";
        document.querySelector(".floorplans__item__text__information__second").style.color = "#707070";
        document.querySelector(".floorplans__item__text__information__second").style.border = "1px solid #e1e1e1";
        document.querySelector(".down__arrow__icons__animation__second").style.color = "#707070";
    }
};

function open__scheme__thrid(){
    if(scheme__open__item__thrid.style.height == "0px"){
        scheme__open__item__thrid.style.height = "100%";
        document.querySelector(".down__arrow__icons__animation__thrid").style.transform = "rotate(180deg)";
        document.querySelector(".floorplans__item__text__information__thrid").style.background = "#30caa0";
        document.querySelector(".floorplans__item__text__information__thrid").style.color = "#fff";
        document.querySelector(".floorplans__item__text__information__thrid").style.border = "1px solid #30caa0";
        document.querySelector(".down__arrow__icons__animation__thrid").style.color = "#fff";
    }else{
        scheme__open__item__thrid.style.height = "0px";
        document.querySelector(".down__arrow__icons__animation__thrid").style.transform = "rotate(0deg)";
        document.querySelector(".floorplans__item__text__information__thrid").style.background = "#f7f7f7";
        document.querySelector(".floorplans__item__text__information__thrid").style.color = "#707070";
        document.querySelector(".floorplans__item__text__information__thrid").style.border = "1px solid #e1e1e1";
        document.querySelector(".down__arrow__icons__animation__thrid").style.color = "#707070";
    }
};

function close__popup(){
    if(document.querySelector(".popup__container")){
        document.querySelector(".popup__container").style.display = "none";
        document.body.style.overflow = "scroll";
        document.querySelector(".web__video").src = "";
    }
};
function open__popup(){
    if(document.querySelector(".popup__container")){
        document.querySelector(".popup__container").style.display = "block";
        document.body.style.overflow = "hidden";
        document.querySelector(".web__video").src = "https://www.youtube.com/embed/OQRvkQDg12w";
    }
};


function close__popup__second(){
    if(document.querySelector(".popup__first__photo__container")){
        document.querySelector(".popup__first__photo__container").style.display = "none";
        document.body.style.overflow = "scroll";
    }
};
function open__first__photo__popup__second(){
    if(document.querySelector(".popup__first__photo__container")){
        document.querySelector(".popup__first__photo__container").style.display = "block";
        document.body.style.overflow = "hidden";
    }
};

function close__popup__thrid(){
    if(document.querySelector(".popup__second__photo__container")){
        document.querySelector(".popup__second__photo__container").style.display = "none";
        document.body.style.overflow = "scroll";
    }
};
function open__first__photo__popup__thrid(){
    if(document.querySelector(".popup__second__photo__container")){
        document.querySelector(".popup__second__photo__container").style.display = "block";
        document.body.style.overflow = "hidden";
    }
};

function close__popup__fourth(){
    if(document.querySelector(".popup__thrid__photo__container")){
        document.querySelector(".popup__thrid__photo__container").style.display = "none";
        document.body.style.overflow = "scroll";
    }
};
function open__first__photo__popup__fourth(){
    if(document.querySelector(".popup__thrid__photo__container")){
        document.querySelector(".popup__thrid__photo__container").style.display = "block";
        document.body.style.overflow = "hidden";
    }
};