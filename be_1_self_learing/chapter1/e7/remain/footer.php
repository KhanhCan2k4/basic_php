<?php
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
?>
<script>
   const product = document.querySelector('#product');

   product.addEventListener('change', () => {
       window.location.href = "http://localhost" +product.value;
   });
    // console.log(product.value);

</script>
</body>
</html>