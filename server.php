<?php

    //Start session

    session_start();    

    //Unset the variables stored in session

    unset($_SESSION['SESS_ID']);

    unset($_SESSION['SESS_PSEUDO']);

    unset($_SESSION['SESS_EMAIL']);
    
    unset($_SESSION['SESS_IP']);
    
    unset($_SESSION['SESS_PASSWORD']);
    
    unset($_SESSION['SESS_DATE_LOGIN']);

?> 