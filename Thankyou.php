<?php
$magval1="";
if ($_POST["Submit"]=="Submit")
{
    // print_r($_POST);
    // die;
		$fullname=$_REQUEST["quote-request-name"];
		$jsemail="b.papamarketing@gmail.com";
		$headers = "From: <noreply@no1molviastro.com>\n";
		$headers .= "Reply-To: <noreply@no1molviastro.com>\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$subject  = "Enquiry Details of ".$fullname;
		$sending_mail_body='<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		</head>
		<body>';
		$sending_mail_body.='<table cellpadding="1" cellspacing="0" width="100%" border="1">
		<tr height="30" style="background-color:#FFCC00; color:#000;">
		<td><h3>Enquiry Details</h3></td>
		</tr>
				
		<tr height="30">
		<td> <b>Name :</b> '.$fullname.',</td>
		</tr>
		<tr height="30">
		<td> <b>Contact No. :</b>  '.$_REQUEST["mobile_no"].',</td>
		</tr>
		<tr height="30">
		<td> <b>Products :</b> '.$_REQUEST["Products"].',</td>
		</tr>
		<tr height="30">
		<td> <b>Email :</b> '.$_REQUEST["quote-request-email"].',</td>
		</tr>
		</table>';		
		$sending_mail_body.='</body>
		</html>';
		
		/*echo $jsemail."<br>";
		echo $subject."<br>";
		echo $sending_mail_body."<br>";
		echo $headers."<br>";
		die;*/
		//$msgsend="We have receive your request, we will contact very soon.";
		$sendmail= mail($jsemail,$subject,$sending_mail_body,$headers);
		if($sendmail)
		{
			$magval1='We have receive your request, we will contact very soon.';
		}
		
		
 }

 

?>
          <META HTTP-EQUIV=REFRESH CONTENT="5; 'index.html'">

             <?php if(isset($magval1) && !empty($magval1)){?>
          
            <h1 style="color:#333333; text-align:center; vertical-align:middle;"><?php echo $magval1;?></h1>
           
            <?php }?>
