"use strict";

$(function () {});

let btnReserve = document.querySelector("#btn-r");
let btnModel = document.querySelector(".btn-r");
let btnX = document.querySelector("#btn-x");

let animationIn = function () {
  $(".btn-r").animate(
    {
      right: 0,
    },
    500,
  );
};

let animationOut = function () {
  $(".btn-r").animate(
    {
      right: 999,
    },
    500,
  );
};

btnReserve.addEventListener("click", animationIn);

btnX.addEventListener("click", animationOut);
