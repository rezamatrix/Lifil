<?php
include("../config/conf.php");
include("../model/functionlogin.php");
include("../model/countonline.php");
include("h2.php");

      ?>
    <div class="center-block w-xxl w-auto-xs p-y-md">
         <div class="navbar">
      <div class="pull-center">
        <!-- brand -->
<a class="navbar-brand">
<img src="../img/b.png" alt="lifil">
 <span class="hidden-folded inline">Lifil</span>
</a>
<!-- / brand -->
      </div>
    </div>

 <div class="p-a-md box-color r box-shadow-z1 text-color m-a" >

      <?php
  if(isset($_POST['send'])){
       if($_POST['key']==$_SESSION['key']){
      if(1==1){
      $user=$_POST['user'] ;
      $password=$_POST['password'] ;
      $password =md5(base64_encode(base64_encode($password))) ;
      if(!preg_match( "/[:,\\. ^ ? ; & | ! ' # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $user )){
      $re=mysqli_query($con,"SELECT password FROM `user`WHERE `user` = '$user'");
      $fach=mysqli_fetch_assoc($re);
      $pas= $fach['password'];
          if($pas==$password){

           $idse = mysqli_query($con,"SELECT id,activeblog,active,nazarat,lvl,dev,tauh,auh FROM user WHERE user='$user'");
$bid=mysqli_fetch_assoc($idse) ;
             $idh=$bid['id'];
             $activeblog=$bid['activeblog'];
             $active=$bid['active'];
             $active2=$bid['nazarat'];
             $active3=$bid['lvl'];
             $active4=$bid['dev'];
                          $activedfacc=$bid['tauh'];
             $activedfaccl=$bid['auh'];
             $_SESSION['pass']=$password;
$_SESSION['user']=strtolower($user);
$_SESSION['idb']=$idh;
$_SESSION['tauh']=$activedfacc;
$_SESSION['auh']=$activedfaccl;
$_SESSION['as']=1;
$ii=$activedfacc;
 $_SESSION['auh']=login(3,$con,$idh,chatid($idh,$con),$token);

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
  } }


?>



      <div class="m-b text-sm">

      </div>
      <form name="form" method="post" action="login.php">
        <div class="md-form-group float-label">
          <input class="md-input" ng-model="user.text" required="" type="text" name="user">
          <label >نام کاربری</label>
        </div>
        <div class="md-form-group float-label">
          <input class="md-input" ng-model="user.password" required="" type="password" name="password">
          <label >گذرواژه</label>
        </div>
        <div class="m-b-md">
          <label class="md-check" dir="rtl" >
            <input class="has-value" type="checkbox"><i class="primary"></i> مرا به خاطر بسپار
          </label>
        </div>
          <input type="hidden" name="key" value="<?php echo loginkey() ; ?>">
        <button type="submit" class="btn primary btn-block p-x-md" name="send" style="cursor: pointer; font-family:'BYekan+ Bold'; ">ورود</button>



      </form>

</div>
                   <div class="p-v-lg text-center">
      <div>فراموشی<a ui-sref="access.signin" href="../repass.php" class="text-primary _600">گذرواژه</a></div>
    </div>
                 </div>
                        <?php
          include("footer.php");
            ?>

