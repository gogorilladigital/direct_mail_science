<?php
    if ($_POST['s-name'] === "" && $_POST['question-3'] !== "" && $_POST['question-4'] !== "" && $_POST['question-5'] !== "") {
        $to = 'mgurule@gogorilladigital.com';
        $subject = 'Direct Mail Science Contact Email';
        $body = "<h1>New Direct Mail Science Contact Email</h1>";
        $body.="<br /><hr /><br /><br />";
        $body.="<table>";
        $body.="<th><strong>Interested In (Question 1)</strong></th><td>".$_POST['question-1']."</td>";
        $body.="<th><strong>If Response Doubles (Question 2)</strong></th><td>".$_POST['question-2']."</td>";
        $body.="<th><strong>Prospect Name</strong></th><td>".$_POST['question-3']."</td>";
        $body.="<th><strong>Prospect Email</strong></th><td>".$_POST['question-4']."</td>";
        $body.="<th><strong>Prospect Company</strong></th><td>".$_POST['question-5']."</td>";
        $body.="</table>";
        $headers = 'From: DirectMailScience.com'."\r\n";
        $headers .= 'Reply-To: mgurule@gogorilladigital.com'."\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        mail($to, $subject, $body, $headers);
        header("Location: contact-ty.php"); /* Redirect browser */
    } else {
        header("Location: contact-fail.php"); /* Redirect browser */
    }
?>
