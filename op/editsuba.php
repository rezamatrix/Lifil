<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionbloga.php");
include("../model/jdf.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
   online($_SESSION['user'],$con) ;
   totalonline($con);


 }

 else{
    header("location:../login.php");

 }

 include("header.php");
 $id= $_SESSION['idb'];
?>

       <div class="box" dir="rtl">
  <div class="box-header blue" >ویرایش پین



  </div>   <br>
                         <div class="btn-group container">
<?php

@$news3=mysqli_query($con,"select id from mnuea");
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 20;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a href=\"?cp=15&p=$rows1\" class=\"btn white\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
   </div>
      <?php

        $cp=intval($_GET['cp']);
         if($cp==25 and $_SESSION['lvl']==2){

               $i=1;

           if(empty($_GET['idm'])){
                  ?>
                   <div class="table-responsive container" >
      <table class="table table-bordered m-0" >
        <thead>
          <tr >
              <th><p style="text-align: right">#</p></th>
            <th><p style="text-align: right">عنوان</p></th>

            <th><p style="text-align: right">ویرایش</p></th>
          </tr>
        </thead>
        <tbody>
            <?php
                                         @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*20;
   $page=intval($page);
   $i=1+($get*20);
           $rezal = mysqli_query($con,"select id,name from mnuea  ORDER BY id  DESC LIMIT $page , 20");
     while( $eed=mysqli_fetch_array($rezal)){
        $rr1=$eed['id'] ;
        $rr2=$eed['name'] ;

        ?>
             <tr>
            <td><?php echo$i; ?></td>
            <td><?php echo $rr2; ?></td>
      <td><center><a href="?cp=25&idm=<?php echo$rr1; ?>" data-toggle="tooltip"title="ویرایش"><button class="btn btn-icon btn-rounded btn-info"><i class="fa fa-edit"></i></button></a>
    </center>
   </td>
        </tr>
     <?php
   ++$i;
}
?>

  </tbody>
      </table>
    </div>

<?php

} else{
                   $idm=intval($_GET['idm']);
                                  $rezalq = mysqli_query($con,"select id,name from mnuea WHERE  id=$idm");
             $blognameq=mysqli_fetch_assoc($rezalq) ;
       $q1=$blognameq['id'];
       $q2=$blognameq['name'];


       if(isset($_POST['send'])){
          $reza1=strip_tags(mysqli_real_escape_string($con,$_POST['namem']));

              if(strlen($reza1)<3){?>

                        <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong> موضوع باید حداقل سه حرف باشد
</div>
            <?php}


             if(strlen($reza1)>=3 ){
                editm($reza1,$idm,$con);           ?>
                                               <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>حذف!</strong> حذف شد.
</div>
          <?PHP
           }
           }
         if(isset($_POST['del'])){
             $rere=intval($_POST['sdr']);
           $rezalss = mysqli_query($con,"select idmaker from mnuea WHERE idmaker='$id' and id=$rere");
            $blognamess=mysqli_fetch_assoc($rezalss) ;
            $iu=$blognamess['idmaker'];

            mysqli_query($con,"DELETE FROM mnuea WHERE `id` = $rere");
 ?>
                                              <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>حذف!</strong> حذف شد.
</div>
 <?php
           }
      ?>          <form action="" method="POST" class="form-horizontal container">
           <input name="namem" type="text" dir="rtl" placeholder="نام دسته بندی خود را وارد کنید" value="<?php echo $q2 ;?>"class="form-control"><br>

           <input name="send" type="submit" value="ارسال" class="btn btn-fw primary"style="font-family: Tahoma;" >   <br>
          </form>
             <form action="" method="POST" class="form-horizontal container">
          <input type="hidden" name="sdr" value="<?php echo $idm; ?>">
         <p style="text-align: left"> <input name="del" type="submit" value="حذف کامل پین" class="btn btn-fw danger" style="font-family: Tahoma;">    </p>
         <br>
         </form>
      <?php

      }

         }
         mysqli_close($con) ;
         ?>



       </div>


   <?php
         include("footer.php");
            ?>