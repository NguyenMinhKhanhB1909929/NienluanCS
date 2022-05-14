var nextQuantitys = document.querySelectorAll(
  ".item__description-quantity-next"
);
var prevQuantitys = document.querySelectorAll(
  ".item__description-quantity-prev"
);
var quantityNum1 = document.querySelectorAll(
  ".item__description-quantity-number"
);
nextQuantitys.forEach(function (n, index) {
  n.onclick = function () {
    quantityNum1[index].value++;
    quantityNum1[index].setAttribute("value", quantityNum1[index].value);
  };
});
