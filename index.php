<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 .loader {
      position: fixed;
      left: 50%;
      top: 30%;
      width: 10%;
      height: 10%;
      z-index: 9999;
      background: url(loader.svg) 50% 50% no-repeat;
    }
</style>
</head>
<body>
<div class="loader"></div>
<script>
  window.onload = function(){
    setTimeout(redirectFunction,3000);
  }
  function redirectFunction(){
    location.href = 'https://www.eneeds360.com/'; 
  }
</script>

</body>
</html>