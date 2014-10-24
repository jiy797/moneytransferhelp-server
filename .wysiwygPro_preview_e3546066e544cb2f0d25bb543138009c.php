<?php
if ($_GET['randomId'] != "4LVK1PFDhcc7BQHoEYXvk8mWCEu1lxp0spWjQECAZQDP0r_jf9Mfi8JbzBHFS1Cs") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
