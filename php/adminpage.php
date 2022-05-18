


<?php 
    session_start();
    
    $_SESSION['user_role']= $user_role;

    // echo $row['user_role'];

    // If this page needs admin access then put this code
    if( $_SESSION['user_role'] == 'admin'){
        echo "Log in was successful! Welcome, Admin!";
    } else {
        echo "Access denied, log in as admin!";
        } 
    
     
    
?>