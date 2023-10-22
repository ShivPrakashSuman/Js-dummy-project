<?php  
    session_start();
    
    if (isset($_SESSION['userData1'] )) {
      echo 'Yes Session';die;
        session_unset();
        session_destroy();

    //header('location:login.php');
?>
    <script>
        console.log('logout js');
        localStorage.removeItem("auth");
        window.location.assign('../../frontend/auth/login.php');
    </script>
<?php
    }
?>