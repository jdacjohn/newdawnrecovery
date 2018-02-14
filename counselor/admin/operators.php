<?php

/**********************************************************************************
* Help Center Live! � http://www.helpcenterlive.com 				  			  *
* by Digital Frontiers, UTO 							  						  *
***********************************************************************************
* Software Version: Help Center Live! v 2.1.7 					  				  *
* Software by: Digital Frontiers, UTO (http://www.helpcenterlive.com) 		      *
* Copyright 2008 by: Digital Frontiers, UTO (http://www.helpcenterlive.com) 	  *
* Support, News, Updates at: http://www.helpcenterlive.com 			  			  *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by Digital Frontiers, UTO. 	  *
* 										  										  *
* This program is distributed in the hope that it is and will be useful, but 	  *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE. 						  					  *
* 										  										  *
* See the "license.txt" file for details of the Help Center Live! license. 	 	  *
* The latest version can always be found at http://www.helpcenterlive.com. 	 	  *
***********************************************************************************
* File Comments:																  *
* This file allows administration of operators									  *
**********************************************************************************/

    include_once('../class/include.php');
    $inc = new Includer();
    $inc->auth();
    $inc->template();
    $inc->department();

    // Check to see if the person is not logged in
    $GLOBALS['auth']->check_logout();

    // Define the three sets of links in the template
    if ($GLOBALS['auth']->admin()) {
        $GLOBALS['template']->links('conf', 'conf');
    } else {
        header('Location: '.$GLOBALS['conf']['url'].'/admin/index.php');
    }

    $GLOBALS['template']->assign('links_main', array(
        array('title' => $GLOBALS['lang']['view_all'], 'url' => $GLOBALS['conf']['url'].'/admin/operators.php?view'),
        array('title' => $GLOBALS['lang']['add'], 'url' => $GLOBALS['conf']['url'].'/admin/operators.php?add'),
        array('title' => $GLOBALS['lang']['assigns'], 'url' => $GLOBALS['conf']['url'].'/admin/assigns.php')
        ));

    if (isset($_GET['add'])) {
        $GLOBALS['template']->assign('action', 'add');
        $GLOBALS['template']->assign('error', '');
        $GLOBALS['template']->assign('username', '');
        $GLOBALS['template']->assign('firstname', '');
        $GLOBALS['template']->assign('lastname', '');
        $GLOBALS['template']->assign('email', '');
        $GLOBALS['template']->assign('showpic', '');
        $GLOBALS['template']->assign('autosave', '');
        $GLOBALS['template']->assign('admin', '');
    } elseif (isset($_POST['add'])) {
        if (md5($_POST['new_password']) == md5($_POST['new_password_again'])) {
            if ($GLOBALS['operator']->add(addslashes($_POST['username']), addslashes($_POST['new_password']), addslashes($_POST['new_password_again']), addslashes($_POST['firstname']), addslashes($_POST['lastname']), addslashes($_POST['email']), $_FILES['picture'], addslashes($_POST['showpic']), addslashes($_POST['autosave']), addslashes($_POST['admin']))) {
                $GLOBALS['template']->assign('action', 'added');
            } else {
                $GLOBALS['template']->assign('action', 'add');
                $GLOBALS['template']->assign('error', $GLOBALS['lang']['db_error']);
                $GLOBALS['template']->assign('username', $_POST['username']);
                $GLOBALS['template']->assign('firstname', $_POST['firstname']);
                $GLOBALS['template']->assign('lastname', $_POST['lastname']);
                $GLOBALS['template']->assign('email', $_POST['email']);
                $GLOBALS['template']->assign('showpic', $_POST['showpic']);
                $GLOBALS['template']->assign('autosave', $_POST['autosave']);
                $GLOBALS['template']->assign('admin', $_POST['admin']);
            }
        } else {
            $GLOBALS['template']->assign('action', 'add');
            $GLOBALS['template']->assign('error', $GLOBALS['lang']['passwords_dont_match']);
            $GLOBALS['template']->assign('username', $_POST['username']);
            $GLOBALS['template']->assign('firstname', $_POST['firstname']);
            $GLOBALS['template']->assign('lastname', $_POST['lastname']);
            $GLOBALS['template']->assign('email', $_POST['email']);
            $GLOBALS['template']->assign('showpic', $_POST['showpic']);
            $GLOBALS['template']->assign('autosave', $_POST['autosave']);
            $GLOBALS['template']->assign('admin', $_POST['admin']);
        }
    } elseif (isset($_GET['edit']) && isset($_GET['id'])) {
        $GLOBALS['template']->assign('action', 'edit');
        $GLOBALS['template']->assign('operator', $GLOBALS['operator']->get(addslashes($_GET['id'])));
    } elseif (isset($_POST['edit'])) {
        $GLOBALS['template']->assign('action', 'edited');
        $GLOBALS['template']->assign('text', $GLOBALS['operator']->update(addslashes($_POST['id']), $_SESSION['hcl_password'], addslashes($_POST['new_password']), addslashes($_POST['new_password_again']), addslashes($_POST['firstname']), addslashes($_POST['lastname']), addslashes($_POST['email']), $_FILES['picture'], addslashes($_POST['showpic']), addslashes($_POST['autosave']), addslashes($_POST['admin']), addslashes($_POST['username'])));
    } elseif (isset($_POST['delete'])) {
        $GLOBALS['template']->assign('action', 'delete');
        foreach ($_POST as $key => $val) {
            if ($key == $val && is_numeric($val)) {
                $GLOBALS['operator']->delete($val);
            }
        }
    } elseif (isset($_GET['boot'])) {
        $GLOBALS['template']->assign('action', 'boot');
        if (isset($_GET['id'])) {
            $GLOBALS['template']->assign('id', addslashes($_GET['id']));
            $GLOBALS['template']->assign('alert', $GLOBALS['lang']['boot_operator']);
        } else {
            $GLOBALS['template']->assign('id', '0');
            $GLOBALS['template']->assign('alert', $GLOBALS['lang']['boot_operators']);
        }
    } elseif (isset($_POST['boot'])) {
        $GLOBALS['operator']->boot(addslashes($_POST['id']));
        $GLOBALS['template']->assign('action', 'view');
        $GLOBALS['template']->assign('operators', $GLOBALS['operator']->listall());
    } else {
        $GLOBALS['template']->assign('action', 'view');
        $GLOBALS['template']->assign('operators', $GLOBALS['operator']->listall());
    }

    // Assign the page's title and the content template that needs to be used
    $GLOBALS['template']->assign('title', $GLOBALS['lang']['operators']);
    $GLOBALS['template']->assign('content', 'admin_operators.tpl');

    // Include the javascript files
    $GLOBALS['template']->assign('javascript', 'misc');

    // Display the output
    $GLOBALS['template']->display('admin.tpl');
    
    // do events that need to be done at the end of the file
    $inc->finished();
    
?>