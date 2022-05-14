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
  console.log(123);
  n.onclick = function () {
    quantityNum1[index].value++;
    quantityNum1[index].setAttribute("value", quantityNum1[index].value);
  };
});
prevQuantitys.forEach(function (p, index) {
  p.onclick = function () {
    if (quantityNum1[index].value == 0) {
    } else {
      quantityNum1[index].value--;
      quantityNum1[index].setAttribute("value", quantityNum1[index].value);
    }
  };
});
