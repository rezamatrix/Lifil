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
if($_SESSION['lvl']==2){
?>

       <div class="box"  dir="rtl"><div class="box-header blue"> منو</div>
      <?php
      @$id=intval($_GET['id']);
      $cp=intval($_GET['cp']);
          if(isset($_POST['send'])){
          $name=htmlspecialchars( $_POST['namem']);
              $mothermenu=intval( $_POST['mother']);
              if ($mothermenu==0){$mothermenu='Null';}
              if(isset($_GET['id']))
              {
                  mysqli_query($con,"UPDATE `web_menu` SET `title` = '$name' WHERE `web_menu`.`id` = $id; ");
                  mysqli_query($con,"UPDATE `web_menu` SET `parent` = $mothermenu WHERE `web_menu`.`id` = $id; ");
              }
              else{
                  mysqli_query($con,"INSERT INTO `web_menu` (`title`, `parent`) VALUES ( '$name', $mothermenu);");
              }


          }

      if(isset($_GET['id'])){
          $op7=mysqli_query($con,"SELECT * FROM `web_menu`  WHERE `web_menu`.`id` = $id; ") ;
          $res=mysqli_fetch_array($op7);
          $id=$res['id'];
          $title=$res['title'];
          $parent=$res['parent'];
      }
         ?>
              <div class="row">
                  <div class="col-4"></div>
                  <div class="col-4">

                      <form action="" method="POST" class="form-horizontal">   <br>
                          <input name="namem" type="text" dir="rtl" placeholder="موضوع" class="form-control" value="<?=@$title?>"><br>
                          <div class="form-group">
                              <label for="single">  انتخاب منو مادر</label>
                              <select id="single" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" name="mother">
                                  <option value="0">منو مادر را انتخاب کنید</option>
                                  <?php
                                  $mother=mysqli_query($con,"SELECT * FROM `web_menu` where `parent`IS NULL;") ;
                                  while ($res=mysqli_fetch_array($mother)){
                                      $id=$res['id'];
                                      $title=$res['title'];
                                      if(@$parent==$id){$ech="selected";}
                                      ?>
                                      <option value="<?=$id?>" <?=@$ech?>> <?=$title?></option>
                                      <?php
                                      $ech='';

                                  }
                                  ?>
                              </select>
                          </div>
                          <input name="send" type="submit" value="ذخیره" class="btn btn-fw primary" style="font-family: Tahoma;">
                          <?php
                          if(isset($_GET['id'])){
                              ?>
                              <a href="menu.php?cp=55" class="btn btn-primary">جدید</a>
                              <?php
                          }
                          ?>
                      </form>

                  </div>
                  <div class="col-4"></div>

              </div>
           <div class="table-responsive text-right container" dir="rtl">
           <table class="table table-bordered m-0 text-right" dir="rtl">
               <thead>
               <tr>
                   <th><p style="text-align: right">#</p></th>
                   <th><p style="text-align: right">نام</p></th>
                   <th><p style="text-align: right">منو مادر </p></th>
                   <th><p style="text-align: right">ویرایش</p></th>
               </tr>
               </thead>
               <tbody>
               <?php
               $op7=mysqli_query($con,"SELECT * FROM `web_menu`  ORDER BY `web_menu`.`id` DESC ") ;
               while ($res=mysqli_fetch_array($op7)){
                   $id=$res['id'];
                   $title=$res['title'];
                   $parent=$res['parent'];
                   if($parent!=null)
                   {
                       $mothers=mysqli_query($con,"SELECT * FROM `web_menu` where `id`='$parent';") ;
                       $ress=mysqli_fetch_array($mothers);
                           $titles=$ress['title'];
                   }


                   ?>
                   <tr>
                       <td><?=$id?></td>
                       <td><?=$title?></td>
                       <td><?php if($parent==null){echo "منو مادر";}else{echo "$titles";} ?></td>
                       <td><a href="?cp=55&id=<?=$id?>" class="btn btn-primary">ویرایش</a></td>
                   </tr>
                   <?php
               }
               ?>
               </tbody>
           </table>
           </div>
         <?php

         mysqli_close($con) ;
}
         ?>


       </div>


   <?php
      include("footer.php");
            ?>