<?php
include("../config/conf.php");
include("../model/functionlogin.php");
include("../model/countonline.php");
//include("../h2.php");

      ?>


      <?php
  if(isset($_POST['send'])){

      if(1==1){
      $user=$_POST['user'] ;
      $password=$_POST['password'] ;
      $password =md5(base64_encode(base64_encode($password))) ;
      if(!preg_match( "/[:,\\. ^ ? ; & | ! ' # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $user )){
      $re=mysqli_query($con,"SELECT password FROM `user`WHERE `user` = '$user'");
      $fach=mysqli_fetch_assoc($re);
      $pas= $fach['password'];
          if($pas==$password){
           loginapi($password,$user);
           $idse = mysqli_query($con,"SELECT id,activeblog,active,nazarat,lvl,dev FROM user WHERE user='$user'");
$bid=mysqli_fetch_assoc($idse) ;
             $idh=$bid['id'];
             $activeblog=$bid['activeblog'];
             $active=$bid['active'];
             $active2=$bid['nazarat'];
             $active3=$bid['lvl'];
             $active4=$bid['dev'];

             $_SESSION['pass']=$password;
$_SESSION['user']=strtolower($user);
$_SESSION['idb']=$idh;
$_SESSION['active']=$active;
$_SESSION['activeblog']=$activeblog;
$_SESSION['nazarat']=$active2;
$_SESSION['lvl']=$active3;
$_SESSION['dev']=$active4;

setcookie("user", "$user", time()-3600);
setcookie("pass", "$password", time()-3600);
// $_COOKIE['user']=strtolower($user);
 //$_COOKIE['pass']=$password;

}else{
    ?>
<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطا!</strong>رمز عبور یا نام کاربری اشتباه است</div>
<?php
}} else{

  ?>
<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطا!</strong>رمز عبور یا نام کاربری اشتباه است</div>
<?php
          }
  } else{
  ?>
<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطا!</strong>کد امنیتی اشتباه است</div>
<?php
  }
  }


?>

      <div class="m-b text-sm">

      </div>
      <form name="form" method="post" action="login.php">
        <div class="md-form-group float-label">
          <input class="md-input" ng-model="user.text" required="" type="text" name="user">
          <label >نام کاربری</label>
        </div>
        <div class="md-form-group float-label">
          <input class="md-input" ng-model="user.password" required="" type="" name="password">
          <label >گذرواژه</label>
        </div>
        <div class="m-b-md">
          <label class="md-check" dir="rtl" >
            <input class="has-value" type="checkbox"><i class="primary"></i> مرا به خاطر بسپار
          </label>
        </div>
       <input type="hidden" name="key" value="">
        <button type="submit" class="btn primary btn-block p-x-md" name="send" style="cursor: pointer; font-family:'BYekan+ Bold'; ">ورود</button>
      </form>

                   <div class="p-v-lg text-center">
      <div>فراموشی<a ui-sref="access.signin" href="repass.php" class="text-primary _600">گذرواژه</a></div>
    </div>


                        <?php
        //  include("../footer.php");
            ?>

