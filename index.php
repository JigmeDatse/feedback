<?php 

$sitename=$_SERVER['SERVER_NAME'];

$title=$sitename." — Main Page";
$h1="Welcome to ".$sitename.".  Please look about";

include "header.php";

echo "
<p>Hello, this is a quick start for the feedback site.  It is running on several 
domains.  This means that it could be different sites.  Currently we have:</p>

<ul>
    <li>inputfeedback.com</li>
    <li>www.inputfeedback.com</li>
    <li>feedbackinput.com</li>
    <li>www.feedbackinput.com</li>
    <li>reviewinput.com</li>
    <li>www.reviewinput.com</li>
</ul>";

include "footer.php";


?>
