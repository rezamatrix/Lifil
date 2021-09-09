<?php
include("config/conf.php");
include("model/countonline.php");
include("model/functionblog.php");
include("model/jdf.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
  // online($_SESSION['user'],$con) ;
 }

 include("header.php");
if(isset($_POST['send'])){
    $id=$_SESSION['idb'];
    if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
$re=htmlspecialchars(mysqli_real_escape_string($con,$_POST['text']));
 mysqli_query($con,"UPDATE `user` SET text = '$re' WHERE `id` ='$id';");
}
}
?>

 <?php

 @$id=intval($_GET['id']);
 if(empty($id)){$id=$_SESSION['idb'];}
    $idse = mysqli_query($con,"SELECT name,user,tarikhsabtenam,email,emailacc,phacc,acc2,tell,point,avatar,dev,text,timeonline FROM user WHERE id='$id' ");
$bid=mysqli_fetch_assoc($idse) ;
             $idh1=$bid['name'];
             $idh2=$bid['user'];
             $idh3=$bid['tarikhsabtenam'];
             $idh4=$bid['email'];
             $idh5=$bid['tell'];
             $idh6=$bid['point'];
             $idh7=$bid['avatar'];
             $idh8=$bid['dev'];
             $idh9=$bid['text'];
                          $idh=$bid['emailacc'];
             $active1=$bid['phacc'];
             $active2=$bid['acc2'];
                 $idhsssa3=$bid['timeonline'];
             $avatar="";
              $idh5e= substr_replace("$idh5","xxxx",6);
          $trl=($idh6/100) ;

 $ETR=floor(($idh6/100));
 $trl2= $trl-$ETR;

 if($idh7==""){$avatar="img/q.jpg";
                  } else{
                      $avatar= "img.php?user=".$idh2."&name=".$idh7;
                  }
?>
  <div class="item">
    <div class="item-bg">
      <img src="<?php echo $avatar; ?>" class="blur opacity-3">
    </div>
    <div class="p-a-md">
      <div class="row m-t">
        <div class="col-sm-7">
          <a href class="pull-right m-r-md">
            <span class="avatar w-96">
              <img src="<?php echo $avatar; ?>">

            </span>
          </a>
          <div class="clear m-b">
            <h3 class="m-0 m-b-xs"><?php echo $idh1; ?></h3>
            <p class="text-muted"><span class="m-r"></span> <small></small></p>


          </div>
        </div>
        <div class="col-sm-5">
          <p class="text-md profile-status"><?php  echo $idh9; ?></p>
        <?php  if(isset($_SESSION['pass']) and isset($_SESSION['user']) and (empty($id) or $id==$_SESSION['idb'])){      ?>
          <button class="btn btn-sm white collapsed" data-toggle="collapse" data-target="#editor" aria-expanded="false">Edit</button>  <br>
          <div class="box m-t-sm collapse" id="editor" aria-expanded="false" style="">
              <form action="" method="POST">
            <textarea class="form-control no-border has-value" rows="2" placeholder="Type something..." name="text"></textarea>
             <input name="send" type="submit" value="Edit"class="btn btn-sm white">
             </form>
          </div>
  <?php          } ?>
            <button class="md-btn md-fab m-b-sm blue"><b><h4><?php  echo $ETR; ?></h4></b></button>
            <div class="progress mb-2">
                <?php
                     @$iyo=$trl2;
   @ $kghjfklh=($iyo)*100;
                ?>
        <div class="progress-bar progress-bar-striped progress-bar-animated primary" style="width: <?php echo $kghjfklh; ?>%"><?php echo $kghjfklh; ?>%</div>
      </div>


        </div>
      </div>
    </div>
  </div>
  <div  class="row">
  <div class="col-sm-8 col-lg-9">
        <div class="tab-content">
          <div class="tab-pane p-v-sm active" id="tab_1">
            <div class="streamline b-l m-b m-l">
                   <?php      $ife=0;

    $tttt=mysqli_query($con,"SELECT name,tarikh,matn,s FROM `coment` WHERE  `active`=1 and s='$id' ORDER BY `coment`.`id` DESC LIMIT 0 , 10");
     while($ysq=mysqli_fetch_array($tttt)){

        $ysqs1=$ysq['name'];
        $ysqs2=$ysq['tarikh'];
        $ysqs3=$ysq['matn'];
        $ysqsr=$ysq['s'];
            $idseq = mysqli_query($con,"SELECT user,avatar,name FROM user WHERE id='$ysqsr' ");
$bidq=mysqli_fetch_assoc($idseq) ;
             $idh2q=$bidq['user'];
             $idh7q=$bidq['avatar'];

                    $idh1q=$bidq['name'];
                        if($idh7q==""){$avatarq="img/q.jpg";

                  } else{
                      $avatarq= "imguser/".$idh2q."/".$idh7q;
                  }
       ++$ife;
      if($ife>0){
          ?>
             <div class="sl-item">
                <div class="sl-left">
                  <img src="<?php echo $avatarq; ?>" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted"><?php echo jdate("j/n/Y H:i:s",$ysqs2);      ?></div>
                  <div class="sl-author">
                    <a href><?php echo $idh1q; ?></a>
                  </div>
                  <div>
                    <p><?php echo $ysqs3; ?></p>
                  </div>
                  <div class="sl-footer">
                    <hr>
                  </div>

                </div>
              </div>
              <?php

                }} if($ife==0){
                  ?>
                               <div class="sl-item">
                <div class="sl-left">
                  <img src="img/like.png" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">بدون زمان</div>
                  <div class="sl-author">
                    <a href>ربات</a>
                  </div>
                  <div>
                    <p>اولین نظری که برای شما ارسال بشه اینجا میزارم <h1>☺</h1></p>
                  </div>
                  <div class="sl-footer">
                    <hr>
                  </div>

                </div>
              </div>
                  <?php
                }
              ?>
            </div>
          </div>



        </div>
      </div>
      <div  class="col-sm-4 col-lg-3">
          <nav class="navside white r box-shadow-z0 m-b">  <div class="navbar">
              <a class="navbar-brand">
	<div ui-include="'img/b.svg'"></div>
	<img src="img/b.svg" alt="." class="hide">
	<span class="hidden-folded inline">BIT</span>
</a>

       </div>
       <div flex-no-shrink>
           <div class="nav-fold">
	<a href="" ui-sref="app.page.profile">
	    <span class="pull-left">
	      <img src="<?php echo $avatar; ?>" alt="..." class="w-40 img-circle">
	    </span>
	    <span class="clear hidden-folded p-x">
	      <span class="block _500"><?php echo $idh1;

             if($idhsssa3>time()){$r1="success";$r2="online";}elseif(($idhsssa3+1800)>time()){$r1="warn";$r2="Away";}elseif($idhsssa3<time()){$r1="gray";$r2="Offline";}

          ?></span>

	        <small class="block text-muted"><i class="fa fa-circle text-<?php echo @$r1; ?> m-r-sm"></i><?php echo @$r2; ?></small>
	    </span>
	</a>
</div>
</div>
     <div flex>
         <ul class="nav" ui-nav>
  <li class="nav-header hidden-folded">
            <span class="nav-icon">
        <i class="glyphicon glyphicon-user">

        </i>
      </span>
    <span class="text-xs text-muted"><?php echo $idh1; ?></span>
  </li>
    <li class="nav-header hidden-folded">
              <span class="nav-icon">
        <i class="glyphicon glyphicon-user">

        </i>
      </span>
    <span class="text-xs text-muted"><?php echo $idh2; ?></span>
  </li>
      <li class="nav-header hidden-folded">
                <span class="nav-icon">
        <i class="glyphicon glyphicon-time">

        </i>
      </span>
    <span class="text-xs text-muted"><?php echo jdate("H:i:s j/n/Y",$idh3); ?></span>
  </li>
  <?php
  $e=0;
    if($e==1){
  ?>
        <li class="nav-header hidden-folded">
                  <span class="nav-icon">
        <i class=" 	glyphicon glyphicon-envelope">

        </i>
      </span>
    <span class="text-xs text-muted"><?php echo str_replace("@", "[AT]", "$idh4"); ?></span>
  </li>
          <li class="nav-header hidden-folded">
                    <span class="nav-icon">
        <i class=" 	glyphicon glyphicon-phone">

        </i>
      </span>
    <span class="text-xs text-muted"><?php  echo "0".$idh5e; ?></span>
  </li>
    <?php
}
if($idh8==1){
  ?>
            <li class="nav-header hidden-folded">
                      <span class="nav-icon">
        <i class=" 	glyphicon glyphicon-plus">

        </i>
      </span>
    <span class="text-xs text-muted"><?php $rte=mysqli_query($con,"SELECT id FROM `amozsh` WHERE `idsender` = '$id' ");
 $nummas=mysqli_num_rows($rte);
 echo  "تعداد محصولات اضافه شده:",$nummas; ?></span>
  </li>
              <li class="nav-header hidden-folded">
                        <span class="nav-icon">
        <i class=" 	glyphicon glyphicon-plus">

        </i>
      </span>
    <span class="text-xs text-muted"><?php $nummass=mysqli_num_rows(mysqli_query($con,"SELECT id FROM `coment` WHERE `idsender` = '$id' "));
  echo  "تعداد نظرات ارسال شده:",$nummass; ?></span>
  </li>
    <?php

    }

    ?>
    <li>
    <a href="blog.php?id=<?php echo $id; ?>">
      <span class="nav-icon">
        <i class="fa fa-newspaper-o">

        </i>
      </span>
      <span class="nav-text">وبلاگ</span>
    </a>
  </li>
</ul>

     </div>
       </nav>

      </div>

      </div>

            <div  class="row">
        <div class="col-sm-8 col-lg-9">      </div>
       <div  class="col-sm-4 col-lg-3">        <div class="box">


      </div></div>



      </div>


   <?php
          include("footer.php");
            ?>