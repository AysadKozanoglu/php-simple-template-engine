<?php

/***************************************************************************
 *
 *   Author   : Aysad Kozanoglu
 *   Package  : Simple Template Engine
 *   Version  : 1.0.3
 *   
 *   Site     : http://onweb.pe.hu
 *   Email    : aysadx@gmail.com
 *   File     : example.php
 *
 ***************************************************************************/

// Instantiate class
require_once('tpl.class.php');
$tpl =& new template();

/**
* assign expects an array of:
*     variable => value
*
* Variables in your template(s) should be in the form of:
*     {variable}
*/
$tpl->assign(array(
    'title'   => 'Simple Template Engine Test',
    'content' => 'This is a test of the <a href="http://www.kozanoglu.de">Simple Template Engine</a> class'
));

// Parse the template file
$tpl->display('example.tpl');

?>