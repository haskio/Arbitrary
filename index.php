<?php

/**
 * 移植牧风的主题
 * 
 * @package Arbitrary Theme
 * @author Sloger
 * @version 1.1.0
 * @link http://blog.sloger.info
 */

if(isset($_GET["action"]) && $_GET["action"] == "ajax_article") {
    $this->need('article.php');   
}
else if(isset($_GET["action"]) && $_GET["action"] == "ajax_comments") {
    $this->need('comments.php');   
}
else {   
    if (strpos($_SERVER["PHP_SELF"],"themes"))
        header('Location:/');

    $this->need('header.php');

    $this->need('article.php');

    $this->need('side.php');

    $this->need('footer.php');
}
