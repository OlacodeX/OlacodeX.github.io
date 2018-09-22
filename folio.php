<?php
$email = $_POST['email'];
$name = $_POST['name'];
$comment = $_POST['comment'];

if (!$name || !$email ||!$comment)
{
    echo 'You did not enter anything on the form.';
    exit;
}
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
$db->close();
?>