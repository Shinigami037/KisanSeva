<?php
class check
{
    function check_login()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['username']) || $_SESSION['login'] != true) {
            // echo "<h1>You are not logged in.";
            // echo "You will be redirected";
            echo "<script>
                        var timer = setTimeout(function() {
                        window.location='login'},0);
                        </script></h1>";
            exit;
        }
    }
}