<footer class="footer">
    <script src="./assets/javascript/openForm.js"></script>
    <script src="./assets/javascript/BtnSort.js"></script>
    <script src="./assets/javascript/updateQuantity.js"></script>
    <script>
      var addCartBtn = document.querySelector(".item__description-order-cart");
      var orderCart = document.querySelector(".add__order-cart");

      addCartBtn.onclick = function () {
        orderCart.style.display = "flex";
        setTimeout(function () {
          orderCart.style.display = "none";
        }, 3000);
      };
    </script>
  </body>
</html>
