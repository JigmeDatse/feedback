<?php 


$sitename=$_SERVER['HTTP_HOST'];

include "regdomains-list.php";

/*
$regDomainNames=array(
			"regdomain1" => "inputfeedback.com",
			"regdomain2" => "www.inputfeedback.com",
			"regdomain3" => "feedbackinput.com",
			"regdomain4" => "www.feedbackinput.com",
			"regdomain5" => "reviewinput.com",
			"regdomain6" => "www.reviewinput.com",
			"regdomain7" => "notreallyadomain.com"
);
*/

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

echo '<form action="record.php" method="post">';

foreach ($regDomainNames as $regNameID => $regDomainName) {
	echo '<input type="checkbox" name="'.$regNameID.'" id="'.$regNameID.'" value="'.$regDomainName.'"><label for="'.$regNameID.'">'.$regDomainName.'</label><br />';
}

echo '	<label for="other">Other:<input type="text" id="other" name="other">
	<input type="submit" value="submit" name="submit">
</form>';

include "footer.php";


?>
