<?php
class check
{
    function check_login()
    {
        // if (!isset($_SESSION)) {
        //     session_start();
        // }
        if (session('log') != true) {
            echo "<h1>You are not logged in.";
            echo "You will be redirected";
            echo "<script>
                        var timer = setTimeout(function() {
                        window.location='adminlogin'},1000);
                        </script></h1>";
            exit;
        }
    }
}
