<?php
    /* database connection */
    require_once('config/Database.php');
    /**
     * get page variable to view page 
     * */
    $page = (isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : '');
    /** 
     * initialize file varialbe default empty 
     * */
    $file = "";
    /** 
     * declare global css / js 
     * */
    $global_css = array(
                    'assets/css/bootstrap.min.css',
                    'assets/css/navbar-top-fixed.css'
                );
    $global_js  = array(
                    'assets/js/jquery-3.6.0.min.js',
                    'assets/js/bootstrap.bundle.min.js'
    );

    /** 
     * initialize local css / js 
     * */
    $local_css  = array();
    $local_js   = array();        
    $data       = array();
    
    switch ($page) {
        /** 
         * START LOGIN PAGE 
         * */
        case 'login':
            $data = [
                'title' => 'Login',
                'page'  => 'login'
            ];
            $local_js   = ['assets/js/login.js'];       
            $local_css  = ['assets/css/signin.css','assets/css/login.css'];
            $file        = 'pages/login.php';
        break;
        /** 
         * END LOGIN PAGE 
         * */
        /** 
         * REGISTER LOGIN PAGE 
         * */
        case 'register':
            $data = [
                'title' => 'Register',
                'page'  => 'register'
            ];
            $local_js   = [
                'assets/js/jquery.validate.min.js', 
                'assets/js/toastr.js',
                'assets/js/register.js'
            ];       
            $local_css  = [
                'assets/css/signin.css',
                'assets/css/toastr.css',
                'assets/css/register.css'
            ];
            $file = 'pages/register.php';
        break;
        /** 
         * END REGISTER PAGE 
         * */
        /** 
         * START HOME PAGE 
         * */
        default:
            $data = array(
                'title' => 'HomePage',
                'page'  => 'home'
            );
            $local_css  = array();
            $file       = 'pages/home.php';
        break;
        /** 
         * END HOME PAGE 
         * */
   }
   /**
    * merge js and css both global and local variable
    */
   $css = array_merge($global_css, $local_css);
   $js  = array_merge($global_js, $local_js);
   /**
    * call template / content (inside header and footer file)
    */
   include "templates/content.php"
   //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
?>