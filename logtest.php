<html>
<head>
  <style>
  .home{
    margin-left: 100px;
    margin-top: 100px;
    height: 70px;
    width: 200px;
    background-color: lightgreen;
  }
  .chiled{
    display: none;
    height: 300px;
    width: 200px;
    margin-left: 100px;
    background-color: lightblue;
  }
  </style>
  <script>
  alert(h);

  function user_menu(){
      var h=document.getElementById("u_name").value;
      alert(h);
     $("#chiled").slideDown("fast");
  }
  function cls_umenu(){
       $("#chiled").slideUp("fast");
  }
  </script>
  <script src="jquery-1.11.3.min.js"></script>
</head>
<body>
  <div class="home" onmouseover="user_menu();" onmouseout="cls_umenu();">
    <?php echo $_SESSION['login'] ?>
    <input type="hidden" value="<?php echo $_SESSION['login'] ?>" id="u_name">
  </div>
  <div class="chiled" id="chiled">
  </div>
</body>
</html>
