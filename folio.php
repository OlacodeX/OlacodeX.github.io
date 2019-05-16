<?php
$email = $_POST['email'];
$name = $_POST['name'];
$comment = $_POST['comment'];

if (!$name || !$email ||!$comment)
{
    echo 'You did not enter anything on the form.';
    exit;
}
/*
if (!get_magic_quotes_gpc())
{
    $email = addslashes($email);
    $name = addslashes($name);
    $comment = addslashes($comment);
}

@ $db = new mysqli ('localhost','admin','admin1','folio');
if (mysqli_connect_errno())
{
    echo 'Error:Unable to connect to database, please contact administrator'; 
}

$query = "insert into contact values('".$email."', '".$name."', '".$comment."')";
$result = $db->query($query);

 if ($result)
 {
 echo 'Thanks for contacting me, You will hear from me soonest.';
}
$db->close();*/
if(isset($_POST['contact']))
{
$to_1 ='aluko798@gmail.com';
$name = $_POST['name'];
$Pnum = $_POST['P.num'];
$subject_1 = 'Service request from '.$name;
$email =$_POST['email'];
$headers_1 = "From: ".strip_tags($email) . "\r\n";
$headers_1 .= "Reply-To: ".strip_tags($email). "\r\n";
$headers_1 .= "CC: olawale.aluko@st.futminna.edu.ng \r\n";
$headers_1 .= "MIME-Version: 1.0\r\n";
$headers_1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message_1 = '<html>
                  <head>
                     <meta charset="utf-8" />
                     <meta http-equiv="X-UA-Compatible" content="IE=edge">
                     <title>SEGAINElectrical</title>
                     <meta name="viewport" content="width=device-width, initial-scale=1">
                     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=coiny">

                   </head>
              <body style="background: black; text-align:center; color: rgb(228, 173, 107);">';
$message_1 .= '<div class="panel panel-default" style="background: black;">';
$message_1 .= '<div class="panel-heading"><h3 style="text-align:center; color: rgb(228, 173, 107);">The following message was sent from:</h3></div>';
$message_1 .= '<div class="panel-body" style="color: rgb(228, 173, 107);">';
$message_1 .='<p> "'.$name.'"</p>';
$message_1 .= '<p> "'.$email.'"</p>';
$message_1 .= '<p> "'.$Pnum.'"</p>';
$message_1 .= '<p> "'.$comment.'"</p>';
$message_1 .='</div>';
$message_1 .='</div>';
$message_1 .= '</body></html>';
//send mail
if(mail($to_1, $subject_1, $message_1, $headers_1))
{
    echo "Thanks for contacting me, Your satisfaction 
    is important to me! <br>"."I will get back to you soonest.";
}
else
{
    echo "oops, sorry your request can't processed at this time <br>"."Please try again, Thanks.";
}



$subject_2 = 'Thanks for contacting me.';
$email =$_POST['email'];
$to_2 =$email;
$headers_2 = "From: ".strip_tags('.olacodeX') . "\r\n";
$headers_2 .= "Reply-To: ".strip_tags('aluko798@gmail.com'). "\r\n";
$headers_2 .= "MIME-Version: 1.0\r\n";
$headers_2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message_2 = '<html><head>
                       <meta charset="utf-8" />
                       <meta http-equiv="X-UA-Compatible" content="IE=edge">
                       <title>SEGAINElectrical</title>
                       <meta name="viewport" content="width=device-width, initial-scale=1">
                       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=coiny">

                  </head><body style="background: black; text-align:center; color: rgb(228, 173, 107);">';
$message_2 .='<div class="panel panel-default" style="background: black;">';
$message_2 .='<div class="panel-heading" style="padding:3px; margin-bottom:10px; color: rgb(228, 173, 107);"><h3>Thank you for contacting us.</h3></div>';
$message_2 .='<div class="panel-body" style="margin-bottom:10px; margin-top:10px; background: Aliceblue;">';
$message_2 .= '<p> OlacodeX has received your message and currently working on it,he will get back to you soon. <br> Thanks </p>';
$message_2 .='</div>';
$message_2 .= '<div class="panel-footer" style:padding:10px; color: rgb(228, 173, 107);>';
$message_2 .= '<p>Copyright &copy; 2018 | <a style="text-decoration:none;" href="https://afrifashionshop.000webhostapp.com/index.html">HOME</a> | All Rights Reserved |<a style="text-decoration:none;" href="https://afrifashionshop.000webhostapp.com/aboutme.html">About</a></p>';
$message_2 .= '</div>';
$message_2 .= '</div>';
$message_2 .= '</body></html>';
//send mail
mail($to_2, $subject_2, $message_2, $headers_2);

}
?>
<br><br>
<button type="button" class="btn btn-sm btn-success"><a href="aboutme.html" style="text-decoration:none; color:aliceblue;">Previous page</a> </button> | <button type="button" class="btn btn-sm btn-success"><a href="index.html" style="text-decoration:none; color:aliceblue;">HOME</a> </button>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
