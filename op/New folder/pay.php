<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionblog.php");
include("../model/jdf.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
   online($_SESSION['user'],$con) ;
   totalonline($con);

 }

 else{
    header("location:../login.php");

 }

 include("header.php");
?>     <div class="box" dir="rtl" >
  <div class="box-header blue" >تراکنش ها


  </div>
                  <div class="btn-group ">
<?php
        $id= $_SESSION['idb'];
@$news3=mysqli_query($con,"select id from dl WHERE  `idseler`=$id");
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 20;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a href=\"?cp=9&p=$rows1\" class=\"btn white\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
   </div>
      <?php
               $cp=intval($_GET['cp']);
          if($cp==9){


             $idse = mysqli_query($con,"SELECT mojodi FROM user WHERE id='$id' ");
$bid=mysqli_fetch_assoc($idse) ;
             $idhsa=$bid['mojodi'];
 ?>


      <div class="alert alert-info">
  <strong>موجودی حساب شما:</strong> <?php echo $idhsa; ?> 
</div>
   <div class="table-responsive" >
      <table class="table table-bordered m-0" >
           <thead>
          <tr><th ><p style="text-align: right">#</p></th>
          <th ><p style="text-align: right">تاریخ</p></th>
           <th ><p style="text-align: right">قیمت</p></th>
           <th ><p style="text-align: right">محصول</p></th>
           <th ><p style="text-align: right">کاربر</p></th>
           <th ><p style="text-align: right">وضعیت</p></th>
           </tr>
             </thead>

           <?php
             @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*20;
   $page=intval($page);
   $i=1+($get*20);
         $sel= mysqli_query($con,"SELECT namebuyer,idamozesh,vazaiat,time FROM `dl` WHERE `idseler` ='$id' ORDER BY id  DESC LIMIT $page , 20") ;
         while($del=mysqli_fetch_array($sel)){
          $sela1=$del['namebuyer'];
          $sela2=$del['idamozesh'];
          $sela3=$del['vazaiat'];
          $sela4=$del['time'];
            $sqlqurey=mysqli_query($con,"SELECT subgecet,ghymat FROM `amozsh` WHERE `id` =$sela2");
  $qw=mysqli_fetch_assoc($sqlqurey);
  $w1=$qw['subgecet'];
  $w2=$qw['ghymat'];
           ?>
           <tr>
           <td><?php echo $i  ; ?></td>
           <td><?php echo jdate("j/n/Y H:i:s",$sela4)  ; ?></td>
           <td><?php echo $w2   ; ?></td>
           <td><a href="index.php?id=<?php echo $sela2; ?>"><?php echo substr($w1,0,20)  ; ?></a></td>
           <td><?php echo $sela1  ; ?></td>
           <td><?php  if($sela3==1){echo "<span class=\"label light-green\">پرداخت شده </span>";}else{"<span class=\"label red\">پرداخت نشده </span>";} ?></td>

           </tr>
           <?php
      ++$i;   }
         ?>
          </table>
  </div>
         <?php
         }
         mysqli_close($con) ;
         ?>


       </div>


   <?php
       include("footer.php");
            ?>