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
 $list=array();
$month = jdate('n');
$year = jdate('Y');

             function fanum($text) {

$fa_numbrers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
$en_numbrers = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');

return str_replace($en_numbrers, $fa_numbrers, $text);
}
$month = fanum(jdate('n'));
$year = fanum(jdate('Y'));
//echo $month;
$numday="";
  switch($month){
    case 1 :
     $numday=31;
     break;
         case 2 :
     $numday=31;
     break;
         case 3 :
     $numday=31;
     break;
         case 4 :
     $numday=31;
     break;
         case 5 :
     $numday=31;
     break;
         case 6 :
     $numday=31;
     break;
         case 7 :
     $numday=30;
     break;
         case 8 :
     $numday=30;
     break;
         case 9 :
     $numday=30;
     break;
        case 10 :
     $numday=30;
     break;
         case 11 :
     $numday=30;
     break;
         case 12 :
     $numday=29;
     break;

  }            $idusefr=$_SESSION['idb'];
       $text1= "";
       $text2= "";
       $text3= "";
                        for($d=1; $d<=$numday; ++$d)
{
    $time2=jmktime(23, 59, 59, $month, $d, $year);
   $time=jmktime(0, 0, 0, $month, $d, $year);
    if (fanum(jdate('n', $time))==$month)
        $list=jdate('j/n/Y', $time);

        $rezalt=mysqli_query($con,"SELECT * FROM `dl` WHERE `time` >= '$time' and  `time` <= '$time2'  and idseler = '$idusefr' and vazaiat=1");
           $eedt=mysqli_num_rows($rezalt) ;
                   $rezalt2=mysqli_query($con,"SELECT * FROM `dl` WHERE `time` >= '$time' and  `time` <= '$time2'  and idseler = '$idusefr' and vazaiat !=1;");
           $eedt2=mysqli_num_rows($rezalt2) ;

           $text3.=$eedt2.",";
        $text2.=$eedt.",";
        $text1.= "'".$list."'".",";
}

?>

   <div class="col-sm-14"><div class="box">
   <div class="box">

<div class="box">
          <div class="box-header">
            <h3>فروش ماهانه</h3>
            <small class="block text-muted">تراکنش های موفق و ناموفق</small>
          </div>
          <div class="box-body" style="font-family: 'BYekan+ Bold';">
            <div ui-jp="chart" ui-options="{
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['پرداخت موفق','پرداخت ناموفق']
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : false,
                        data : [<?php  echo $text1;  ?>]
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'پرداخت ناموفق',
                        type:'line',
                        smooth:true,
                        itemStyle: {normal: {areaStyle: {type: 'default'}}},
                        data:[<?php  echo $text3;  ?>]
                    },
                    {
                        name:'پرداخت موفق',
                        type:'line',
                        smooth:true,
                        itemStyle: {normal: {areaStyle: {type: 'default'}}},
                        data:[<?php echo $text2; ?>]
                    }
                ]

            }" style="height: 500px; -moz-user-select: none; background-color: rgba(0, 0, 0, 0); cursor: default;" _echarts_instance_="1503061959627" style="font-family: 'BYekan+ Bold';"></div>
          </div>
        </div>
	        </div>
   </div></div>

<?php
include("footer.php");
?>
