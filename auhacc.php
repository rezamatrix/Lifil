<?php
include("config/conf.php");
include("model/functionlogin.php");
include("model/countonline.php");
include("model/jdf.php");
include("h2.php");
      ?>

 <div class="center-block w-xxl w-auto-xs p-y-md">
         <div class="navbar">
      <div class="pull-center">
        <!-- brand -->
<a class="navbar-brand">
<img src="img/b.png" alt="BIT">
 <span class="hidden-folded inline">BIT</span>
</a>
<!-- / brand -->
      </div>
    </div>

 <div class="p-a-md box-color r box-shadow-z1 text-color m-a" >

      <?php
  if(isset($_POST['send'])){
      $code=$_POST['keycode'];
    if(preg_match("/^[a-zA-Z0-9]+$/", $code)){
    $id=$_SESSION['idb'];

               $idse = mysqli_query($con,"SELECT auh FROM user WHERE id='$id' and auh='$code'");
$bid=mysqli_num_rows($idse);
if($bid>0){
     mysqli_query($con,"UPDATE `user` SET `auh` = '' WHERE `id` =$id ");
     $_SESSION['auh']="";
     if($_SESSION['as'] !=1 ){
         login(0);
 } } }
     }


?>

      <div class="m-b text-sm">

      </div>
      <form name="form" method="post" action="auhacc.php">
        <div class="md-form-group float-label">
          <input class="md-input" ng-model="user.text" required="" type="text" name="keycode">
          <label >کد ورود به اکانت</label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md" name="send" style="cursor: pointer; font-family:'BYekan+ Bold'; ">ورود</button>
        <br>
                <center >یا</center>
        <br>
            <a  class="btn primary btn-block p-x-md"     href="logout.php">خروج </a>


      </form>

</div>
                   <div class="p-v-lg text-center">

    </div>
                 </div>


                        <?php

          include("footer.php");
            ?>

