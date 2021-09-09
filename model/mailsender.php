<?php
if (file_exists('../config/conf.php')) {
include("../config/conf.php");
}
if (file_exists('config/conf.php')) {
include("config/conf.php");

}
function sendmail($msg,$to,$from,$sub,$user){
    $headers = "Reply-To: Lifil <$from>\r\n";
    $headers .= "Return-Path:  Lifil <$from> \r\n";
    $headers .= "From:  Lifil <$from> \r\n";
    $headers .= "List-Unsubscribe: <mailto:$from?subject=Unsubscribe>, <https://lifil.net/unsubscribe.php?mailid=1234> \r\n";
    $headers .= "Organization: Lifil \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
    $msgs="<!DOCTYPE html>  <html><body>
<table style=\"width:538px;background-color:#393836;\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
    <tbody><tr>
        <td style=\"min-height:65px;background-color:#ffc107;border-bottom:1px solid #4d4b48;padding:0px; border-top:3px solid #4d4b48; \">
            <img src=\"https://lifil.net/i/images/logo.png\" alt=\"Lifil\" >
        </td>
    </tr>
    <tr>
        <td style=\"background:  #111931;\">

            <table style=\"padding-left:5px;padding-right:5px;padding-bottom:10px;\" width=\"470\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">

                <tbody><tr style=\"background: linear-gradient(to bottom, #111931 0%, #0f131e 100%);\">
                    <td style=\"padding-top:32px;padding-bottom:16px; text-align: right;\" dir=\"rtl\">
					<span style=\"font-size:24px;color:#66c0f4;font-family:Tahoma;font-weight:bold; text-align: right;\">
                       $user  عزیز ,
					</span><br>
                    </td>
                </tr>
                <tr>
                    <td style=\"padding-top:12px;padding-bottom:24px;text-align: right;\" dir=\"rtl\">
					<span style=\"font-size:15px;color:#c6d4df;font-family:Tahoma;font-weight:bold;text-align: right;\">
						<p dir=\"rtl\">
                          $msg
                        </p>
					</span>


                    </td>
                </tr>

                <tr>
                    <td style=\"font-size:12px;color:#6d7880;padding-top:16px;padding-bottom:60px; font-family: Tahoma; text-align: right;\">
                        لیفیل <br>
                        <a rel=\"nofollow\" style=\"color:#8f98a0;\" target=\"_blank\" href=\"https://Lifil.net/\">https://Lifil.net</a><br>
                    </td>
                </tr>

                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor=\"#000000\">

            <table width=\"460\" height=\"55\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">

                <tbody><tr valign=\"center\">
                    <td width=\"110\">
                        <a rel=\"nofollow\" target=\"_blank\" href=\"https://Lifil.net/\" style=\"color:#8B8B8B;font-size:10px;font-family:Tahoma;text-transform:uppercase;\">
                            <img src=\"https://Lifil.net/i/images/logo.png\" alt=\"BIT\"  border=\"0\" align=\"top\" height=\"75%\" width=\"75%\"></a>
                    </td>
                    <td width=\"350\" valign=\"center\">
                        <span style=\"color:#999999;font-size:9px;font-family:Tahoma;\">© Copyright - Lifil.net </span>
                    </td>
                </tr>

                </tbody></table>
        </td>
    </tr>


    </tbody></table></body></html>";

    mail($to, $sub, $msgs, $headers);
}
?>