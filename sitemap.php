<?php
date_default_timezone_set('Asia/Tehran');
$con = mysqli_connect('localhost', 'admin_bit', 'VaTHwupKx', 'admin_bit');
$web = "https://lifil.net";
$add='xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/ http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"';
$add2='xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
$text.="<?xml version='1.0' encoding='UTF-8'?>
<urlset $add2  $add  xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
$site='https://lifil.net/';
$date=date('Y-m-d');
$link= 'https://lifil.net';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>1</priority>

   </url>";
$q=mysqli_query($con,"SELECT * FROM `user` ");
while ($row=mysqli_fetch_array($q)){
    $id=$row['id'];
$link= $site.'profile.php?id='.$id.'';
    $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.7</priority>

   </url>";
    $link= $site.'blog.php?id='.$id.'';
    $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.7</priority>

   </url>";
    @$news3=mysqli_query($con,"select id from blog where idsender='$id'");
    $rows1 = mysqli_num_rows($news3);
    $rows1= $rows1 / 9;
    $rows1= ceil($rows1);
    while($rows1>0){
        $link= 'https://lifil.net/blog.php?p='.$rows1;
        $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.85</priority>

   </url>";
        $rows1--;
    }
}

$link= 'https://lifil.net/store.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.85</priority>

   </url>";
$news3=mysqli_query($con,"SELECT id FROM `amozsh`WHERE `acc` ='1' ORDER BY `amozsh`.`id` DESC ");

$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 24;
    $rows1= ceil($rows1);
while($rows1>0){
    $link= 'https://lifil.net/store.php?p='.$rows1;
    $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.85</priority>

   </url>";
    $rows1--;
}
$sqlqurey=mysqli_query($con,"SELECT * FROM `amozsh` WHERE `acc` ='1'  ");
while($qw=mysqli_fetch_array($sqlqurey)){
 $ma1=$qw['id'];
 $q4=$qw['barchasb'];
$link= 'https://lifil.net/product.php?id='.$ma1;
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.85</priority>

   </url>";
              @$s4= explode(",",@$q4) ;
                 @$co=count(@$s4)-1 ;
               while(@$co >= 0){
                @$s4s=@$s4[@$co];
                  // $nt=str_replace("'","",$s4s);
                   $nt=($s4s);

$link= 'https://lifil.net/store.php?tag='.$nt;
$text.= "   <url>

    <loc>$link</loc>

    <lastmod>$date</lastmod>

    <changefreq>weekly</changefreq>

    <priority>0.85</priority>

</url>";

               --$co;
               }

}
$link= 'https://lifil.net/bloga.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.95</priority>

   </url>";
@$news3=mysqli_query($con,"select id from bloga ");
$rows1 = mysqli_num_rows($news3);
$rows1= $rows1 / 9;
$rows1= ceil($rows1);
while($rows1>0){
    $link= 'https://lifil.net/bloga.php?p='.$rows1;
    $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.85</priority>

   </url>";
    $rows1--;
}
$rezal = mysqli_query($con,"select * from bloga ");

while( $blogname=mysqli_fetch_array($rezal))
{
    $idbo=$blogname['id'];
    $q4=$blogname['barchasb'];
    $link= 'https://lifil.net/posta.php?id='.$idbo;
    $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.85</priority>

   </url>";
    @$s4= explode(",",@$q4) ;
    @$co=count(@$s4)-1 ;
    while(@$co >= 0){
        @$s4s=@$s4[@$co];
        // $nt=str_replace("'","",$s4s);
        $nt=($s4s);

        $link= 'https://lifil.net/posta.php?id='.$idbo.'&amp;tag='.$nt;
        $text.= "   <url>

    <loc>$link</loc>

    <lastmod>$date</lastmod>

    <changefreq>weekly</changefreq>

    <priority>0.95</priority>

</url>";

        --$co;
    }

}
$rezal = mysqli_query($con,"select * from blog ");

while( $blogname=mysqli_fetch_array($rezal))
{
    $idbo=$blogname['id'];
    $q4=$blogname['barchasb'];
    $link= 'https://lifil.net/post.php?id='.$idbo;
    $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.85</priority>

   </url>";
    @$s4= explode(",",@$q4) ;
    @$co=count(@$s4)-1 ;
    while(@$co >= 0){
        @$s4s=@$s4[@$co];
        // $nt=str_replace("'","",$s4s);
        $nt=($s4s);

        $link= 'https://lifil.net/post.php?id='.$idbo.'&amp;tag='.$nt;
        $text.= "   <url>

    <loc>$link</loc>

    <lastmod>$date</lastmod>

    <changefreq>weekly</changefreq>

    <priority>0.95</priority>

</url>";

        --$co;
    }

}
$rezal = mysqli_query($con,"select * from mnuea ");

while( $blogname=mysqli_fetch_array($rezal))
{
    $idbo=$blogname['id'];

    $link= 'https://lifil.net/bloga.php?idm='.$idbo;
    $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.85</priority>

   </url>";
}
$rezal = mysqli_query($con,"select * from mnue ");

while( $blogname=mysqli_fetch_array($rezal))
{
    $idbo=$blogname['id'];

    $link= 'https://lifil.net/blog.php?idm='.$idbo;
    $text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>weekly</changefreq>

      <priority>0.85</priority>

   </url>";
}
$link= 'https://lifil.net/about.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.95</priority>

   </url>";
$link= 'https://lifil.net/contact.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.95</priority>

   </url>";
$link= 'https://lifil.net/rules.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.95</priority>

   </url>";
$link= 'https://lifil.net/how-to-buy.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.95</priority>

   </url>";
$link= 'https://lifil.net/how-to-sell.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.95</priority>

   </url>";
$link= 'https://lifil.net/license.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.95</priority>

   </url>";
$link= 'https://lifil.net/privacy.php';
$text.= "   <url>

      <loc>$link</loc>

      <lastmod>$date</lastmod>

      <changefreq>daily</changefreq>

      <priority>0.95</priority>

   </url>";
$text.= '</urlset>';
file_put_contents('sitemap.xml',$text);
?>


