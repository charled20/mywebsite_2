<?php 

session_start();

session_unset();
session_destroy();

echo "
    <script type=\"text/javascript\">alert(\"Logout Successful!\");
    window.location.href = \"/mywebsite2/main.php\";
    </script>
    ";


?>