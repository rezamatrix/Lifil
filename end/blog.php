<?php
include("config/conf.php");
include("model/countonline.php");
include("model/jdf.php");
include("bb/SBBCodeParser.php");
                          include("header.php");
if(empty($_GET['idb'])){
  if($_GET['id']>0){

  } else{
if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
        $idss= $_SESSION['idb'];
        $id= $_SESSION['idb'];
         $local='location:blog.php?id='.$idss;
     header($local);
        online($_SESSION['user'],$con) ;
}
  }
}
  ?>
  <div class="container" dir="rtl">
  <?php


@$id=intval($_GET['id']) ;
$idsedddddd = mysqli_query($con,"SELECT activeblog,user FROM user WHERE id='$id' ");
$bidas=mysqli_fetch_assoc($idsedddddd) ;
$activeblog=$bidas['activeblog'];
$uesr=$bidas['user'];
if($activeblog==1) {
if(empty($_GET['idb'])){
if($_GET['id']>0){
$id=intval($_GET['id']) ;
?>

 <div class="col-sm-12">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

     <?php
 $mnu="";
$page=0;
 if(isset($_GET['idm'])){
  $rr=intval($_GET['idm']);
  $mnu="and idmnue = $rr";
 }
 @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*10;
   $page=intval($page);
   $ity=1;
$blog = mysqli_query($con,"SELECT subgect,id,matn,idmnue FROM `blog` WHERE idsender='$id'$mnu  ORDER BY id  DESC LIMIT $page , 10");
while( $blogname=mysqli_fetch_array($blog) and $ity<5){
       $q1=$blogname['subgect'];
       $q12=$blogname['id'];
       $q2=$blogname['matn'];
       $qd=$blogname['idmnue'];


     ?>
                <div class="carousel-item <?php if($ity==1){echo "active"; } ?>">
        <a href="blog.php?id=<?php echo $id; ?>&idb=<?php echo $q12; ?>">
        <img src="<?php echo "img.php?user=$uesr&name=" . $qd; ?>" alt="<?php echo $r1; ?>" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h3><?php echo $q1; ?></h3>
          <p><?php echo $q1; ?></p>
        </div>
        </a>
    </div>
     <?php
++$ity;
 }

 ?>






    </div>
           <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <?php
      $ity2=$ity-2;
       $ity3=1;
      while($ity2>0){ ?>
     <li data-target="#myCarousel" data-slide-to="<?php echo $ity3; ?>"></li>
      <?php
       --$ity2;
        ++$ity3;
       }
      ?>
    </ol>
    <!-- Left and right controls -->
    <a  href="#myCarousel" class="carousel-control-prev"  role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
   <div class="row">
  <div class="col-sm-1"></div>


  <div class="col-sm-10">    <br><br>
 <?php
$mnu="";
$page=0;
 if(isset($_GET['idm'])){
  $rr=intval($_GET['idm']);
  $mnu="and idmnue = $rr";
 }
 @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*10;
   $page=intval($page);

$blog = mysqli_query($con,"SELECT subgect,id,matn,Tarikh,barchasb,name FROM `blog` WHERE idsender='$id'$mnu  ORDER BY id  DESC LIMIT $page , 10");
while( $blogname=mysqli_fetch_array($blog)){
       $q1=$blogname['subgect'];
       $q12=$blogname['id'];
       $q2=$blogname['matn'];
       $q3=$blogname['Tarikh'];
       $q4=$blogname['barchasb'];
       $q5=$blogname['name'];
       ?>
            <div class="box">
  <div class="box-header blue"><a href="?id=<?php echo $id; ?>&idb=<?php echo $q12; ?>"><?php echo $q1; ?>:<?php echo $q5; ?>:<?php echo jdate("H:i:s j/n/Y",$q3); ?></a>     </div>
  <div class="panel-body">
        <b><u><p style="text-align: left"><p style="text-align: right"><span  dir="rtl"></span></p></p></u></b>



              <?php

         $parser = new \SBBCodeParser\Node_Container_Document();

$parser->add_emoticons(array(
	':)' => 'https://bitsoftware.ir/emoticons/smile.png',
	'8-)' => 'https://bitsoftware.ir/emoticons/cool.png',
	':angry:' => 'https://bitsoftware.ir/emoticons/angry.png',
	':angel:' => 'https://bitsoftware.ir/emoticons/angel.png',
	":'(" => 'https://bitsoftware.ir/emoticons/cwy.png',
	":ermm:" => 'https://bitsoftware.ir/emoticons/ermm.png',
	":alien:" => 'https://bitsoftware.ir/emoticons/alien.png',
	":blink:" => 'https://bitsoftware.ir/emoticons/blink.png',
	":blush:" => 'https://bitsoftware.ir/emoticons/blush.png',
	":cheerful:" => 'https://bitsoftware.ir/emoticons/cheerful.png',
	":devil:" => 'https://bitsoftware.ir/emoticons/devil.png',
	":dizzy:" => 'https://bitsoftware.ir/emoticons/dizzy.png',
	":getlost:" => 'https://bitsoftware.ir/emoticons/getlost.png',
	":happy:" => 'https://bitsoftware.ir/emoticons/happy.png',
	":kissing:" => 'https://bitsoftware.ir/emoticons/kissing.png',
	":ninja:" => 'https://bitsoftware.ir/emoticons/ninja.png',
	":pinch:" => 'https://bitsoftware.ir/emoticons/pinch.png',
	":sick:" => 'https://bitsoftware.ir/emoticons/sick.png',
	":sideways:" => 'https://bitsoftware.ir/emoticons/sideways.png',
	":silly:" => 'https://bitsoftware.ir/emoticons/silly.png',
	":sleeping:" => 'https://bitsoftware.ir/emoticons/sleeping.png',
	":unsure:" => 'https://bitsoftware.ir/emoticons/unsure.png',
	":woot:" => 'https://bitsoftware.ir/emoticons/w00t.png',
	":wassat:" => 'https://bitsoftware.ir/emoticons/wassat.png',
	":pouty:" => 'https://bitsoftware.ir/emoticons/pouty.png',
	":D" => 'https://bitsoftware.ir/emoticons/grin.png',
	":(" => 'https://bitsoftware.ir/emoticons/sad.png',
	":O" => 'https://bitsoftware.ir/emoticons/shocked.png',
	":P" => 'https://bitsoftware.ir/emoticons/tongue.png',
	";)" => 'https://bitsoftware.ir/emoticons/wink.png',
	'<3' => 'https://bitsoftware.ir/emoticons/heart.png'
));
 $sdd=  htmlspecialchars_decode($q2);
 $matn=explode('<------------->',$sdd);
echo $parser->parse($matn['0'])
    ->detect_links()
    ->detect_emails()
    ->detect_emoticons()
	->get_html();

                ?></div> <div  dir="ltr"><a href="?id=<?php echo $id; ?>&idb=<?php echo $q12; ?>"  class="btn btn-default"><b>ادامه مطلب</b></a>   </div>



      </div>
  <div class="hide">

      <span style="font-size: 6pt">برچسب ها:   </span>
              <span style="font-size:5pt">
              <?php
              $s4= explode(",",$q4) ;
                 $co=count($s4)-1 ;
               while($co >= 0){
                $s4s=$s4[$co];
               echo"<a href=\"?idb=$q12\"><span style=\"font-size: 4pt\">$s4s</span></a>,";
               --$co;
               }
              ?>
              </span>
  </div>


       <?php
}
?>
 </div>
   <div class="col-sm-2"></div>
   </div>
  <div class="col-sm-12">
 <ul class="pagination">
<?php

 if(@$_GET['idm'] > 0){
          @$yt=intval($_GET['idm']) ;
         @ $erd="and idmnue=".$yt;
        }

@$news3=mysqli_query($con,"select * from blog WHERE  `idsender`=$id $erd");
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 10;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
  while ($rows1 > -1){
   $rows2=$rows1+1;
  if(empty($_GET['idm'])){
  echo"<li><a href=\"?id=$id&p=$rows1\" > $rows2 </a></li>";
          } else{
            $yt=intval($_GET['idm']) ;
  echo"<li><a href=\"?id=$id&idm=$yt&p=$rows1\" >$rows2 </a></li>";
         }
  --$rows1;
   }
   ?>
   </ul>  </div>
<?php
}

} else{  ?> <br><br><br>
 <div class="col-sm-12">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

     <?php
 $mnu="";
$page=0;
 if(isset($_GET['idm'])){
  $rr=intval($_GET['idm']);
  $mnu="and idmnue = $rr";
 }
 @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*10;
   $page=intval($page);
   $ity=1;
$blog = mysqli_query($con,"SELECT subgect,id,matn,idmnue FROM `blog` WHERE idsender='$id'$mnu  ORDER BY id  DESC LIMIT $page , 10");
while( $blogname=mysqli_fetch_array($blog) and $ity<5){
       $q1=$blogname['subgect'];
       $q12=$blogname['id'];
       $q2=$blogname['matn'];
       $qd=$blogname['idmnue'];


     ?>
                <div class="carousel-item <?php if($ity==1){echo "active"; } ?>">
        <a href="blog.php?id=<?php echo $id; ?>&idb=<?php echo $q12; ?>">
        <img src="<?php echo "img.php?user=$uesr&name=" . $qd; ?>" alt="<?php echo $r1; ?>" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h3><?php echo $q1; ?></h3>
          <p><?php echo $q1; ?></p>
        </div>
        </a>
    </div>
     <?php
++$ity;
 }

 ?>






    </div>
           <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <?php
      $ity2=$ity-2;
       $ity3=1;
      while($ity2>0){ ?>
     <li data-target="#myCarousel" data-slide-to="<?php echo $ity3; ?>"></li>
      <?php
       --$ity2;
        ++$ity3;
       }
      ?>
    </ol>
    <!-- Left and right controls -->
    <a  href="#myCarousel" class="carousel-control-prev"  role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <div class="row">
       <div class="col-sm-1"></div>
 <?php
    $id=intval($_GET['id']) ;
  $idb=intval($_GET['idb']);
   $blog = mysqli_query($con,"SELECT subgect,matn,id,Tarikh,barchasb,name FROM `blog` WHERE id='$idb' ");
$blogname=mysqli_fetch_assoc($blog) ;
        $q1=$blogname['subgect'];
       $q2=$blogname['matn'];
       $q12=$blogname['id'];
       $q3=$blogname['Tarikh'];
       $q4=$blogname['barchasb'];
       $q5=$blogname['name'];
       ?>


           <div class="col-sm-10"> <br><br>      <div class="box">
  <div class="box-header blue"><a href="?id=<?php echo $id; ?>&idb=<?php echo $q12; ?>"><?php echo $q1; ?>:<?php echo $q5; ?>:<?php echo jdate("H:i:s j/n/Y",$q3); ?></a></div>
  <div class="panel-body">


              <?php
            $parser = new \SBBCodeParser\Node_Container_Document();

$parser->add_emoticons(array(
	':)' => 'https://bitsoftware.ir/emoticons/smile.png',
	'8-)' => 'https://bitsoftware.ir/emoticons/cool.png',
	':angry:' => 'https://bitsoftware.ir/emoticons/angry.png',
	':angel:' => 'https://bitsoftware.ir/emoticons/angel.png',
	":'(" => 'https://bitsoftware.ir/emoticons/cwy.png',
	":ermm:" => 'https://bitsoftware.ir/emoticons/ermm.png',
	":alien:" => 'https://bitsoftware.ir/emoticons/alien.png',
	":blink:" => 'https://bitsoftware.ir/emoticons/blink.png',
	":blush:" => 'https://bitsoftware.ir/emoticons/blush.png',
	":cheerful:" => 'https://bitsoftware.ir/emoticons/cheerful.png',
	":devil:" => 'https://bitsoftware.ir/emoticons/devil.png',
	":dizzy:" => 'https://bitsoftware.ir/emoticons/dizzy.png',
	":getlost:" => 'https://bitsoftware.ir/emoticons/getlost.png',
	":happy:" => 'https://bitsoftware.ir/emoticons/happy.png',
	":kissing:" => 'https://bitsoftware.ir/emoticons/kissing.png',
	":ninja:" => 'https://bitsoftware.ir/emoticons/ninja.png',
	":pinch:" => 'https://bitsoftware.ir/emoticons/pinch.png',
	":sick:" => 'https://bitsoftware.ir/emoticons/sick.png',
	":sideways:" => 'https://bitsoftware.ir/emoticons/sideways.png',
	":silly:" => 'https://bitsoftware.ir/emoticons/silly.png',
	":sleeping:" => 'https://bitsoftware.ir/emoticons/sleeping.png',
	":unsure:" => 'https://bitsoftware.ir/emoticons/unsure.png',
	":woot:" => 'https://bitsoftware.ir/emoticons/w00t.png',
	":wassat:" => 'https://bitsoftware.ir/emoticons/wassat.png',
	":pouty:" => 'https://bitsoftware.ir/emoticons/pouty.png',
	":D" => 'https://bitsoftware.ir/emoticons/grin.png',
	":(" => 'https://bitsoftware.ir/emoticons/sad.png',
	":O" => 'https://bitsoftware.ir/emoticons/shocked.png',
	":P" => 'https://bitsoftware.ir/emoticons/tongue.png',
	";)" => 'https://bitsoftware.ir/emoticons/wink.png',
	'<3' => 'https://bitsoftware.ir/emoticons/heart.png'
));
 $sdd=  htmlspecialchars_decode($q2);
 $new="";
$matn=str_replace('<------------->'," ",$sdd);
echo $parser->parse($matn)
    ->detect_links()
    ->detect_emails()
    ->detect_emoticons()
	->get_html();

              ?>
                 </div>
  <div class="hide">

      <span style="font-size: 6pt">برچسب ها:   </span>
              <span style="font-size:5pt">
              <?php
              $s4= explode(",",$q4) ;
                 $co=count($s4)-1 ;
               while($co >= 0){
                $s4s=$s4[$co];
               echo"<a href=\"?idb=$id\">$s4s</a>,";
               --$co;
               }
              ?>
                          </span>
  </div>

    </div>
    </div>
    <div class="col-sm-2"></div>     </div>
       <?php

  ?>

 <?php
 }

 ?>

            <?php
            }else{ ?>

           <center><br><br><br> <div style="border: solid #000000 1px; background: #FFF0F0; height: 25; width: 275;">بخش اطلاع رسانی این کار بر غیر فعال می باشد</div>
</center>
            <?php }

            ?>
              <div class="col-sm-12"><br><br>BITsoftwear.ir &copy;<br><br></div>
               </div>
 <?php            include("footer.php");   ?>