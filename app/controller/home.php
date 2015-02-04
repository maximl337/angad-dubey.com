<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        //echo $_SERVER['DOCUMENT_ROOT'];
        
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'app/views/templates/header.php';
        require 'app/views/home/index.php'; 
        require 'app/views/templates/footer.php';
    }

}
