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
* This class controlls the template engine.										  *
* It is an extension of the Smarty class, but could be ported to any other		  *
* template engine.																  *
* Visit http://smarty.php.net/ to find out more about Smarty					  *
**********************************************************************************/

    class Template extends Smarty {

        function Template()
        {
            $this->Smarty();
            if ($GLOBALS['conf']['safe_mode']) {
                $this->use_sub_dirs = false;
            }
            $this->template_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$GLOBALS['conf']['template'];
            $this->compile_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'compile';
            $this->config_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$GLOBALS['conf']['template'];
            $this->caching = 0;
            $this->php_handling = SMARTY_PHP_ALLOW;

            $this->assign('conf', $GLOBALS['conf']);
            $this->assign('lang', $GLOBALS['lang']);
            $this->assign('_SERVER', $_SERVER);
            $this->assign('epoch', time());

        }

        function links($top, $bottom)
        {
            switch ($top) {
            case 'none':
                $this->assign('links_top', '');
                break;
            case 'operator':
                $this->assign('links_top', array(
                    array('name' => 'logout', 'title' => $GLOBALS['lang']['logout'], 'url' => $GLOBALS['conf']['url'].'/admin/logout.php')
                    ));
                break;
            case 'admin':
                $this->assign('links_top', array(
                    array('name' => 'config', 'title' => $GLOBALS['lang']['sys_conf'], 'url' => $GLOBALS['conf']['url'].'/admin/code.php'),
                    array('name' => 'logout', 'title' => $GLOBALS['lang']['logout'], 'url' => $GLOBALS['conf']['url'].'/admin/logout.php')
                    ));
                break;
            case 'conf':
                $this->assign('links_top', array(
                    array('name' => 'configexit', 'title' => $GLOBALS['lang']['sys_conf_exit'], 'url' => $GLOBALS['conf']['url'].'/admin/index.php'),
                    array('name' => 'logout', 'title' => $GLOBALS['lang']['logout'], 'url' => $GLOBALS['conf']['url'].'/admin/logout.php')
                    ));
                break;
            }
            switch ($bottom) {
            case 'none':
                $this->assign('links_bottom', '');
                break;
            case 'operator':
                $links = array(
                    array('name' => 'livehelp', 'title' => $GLOBALS['lang']['live_help'], 'url' => 'javascript:Monitor.launch();'),
                    array('name' => 'canned', 'title' => $GLOBALS['lang']['canned_messages'], 'url' => $GLOBALS['conf']['url'].'/admin/canned.php'),
                    array('name' => 'transcripts', 'title' => $GLOBALS['lang']['transcripts'], 'url' => $GLOBALS['conf']['url'].'/admin/transcripts.php'),
                    array('name' => 'details', 'title' => $GLOBALS['lang']['my_details'], 'url' => $GLOBALS['conf']['url'].'/admin/details.php'),
                    array('name' => 'modules', 'title' => $GLOBALS['lang']['modules'], 'url' => $GLOBALS['conf']['url'].'/admin/modules.php?type=operator')
                    );
                $links = array_merge($links, $GLOBALS['module']->links('operator'));
                $this->assign('links_bottom', $links);
                break;
            case 'admin':
                $links = array(
                    array('name' => 'livehelp', 'title' => $GLOBALS['lang']['live_help'], 'url' => 'javascript:Monitor.launch();'),
                    array('name' => 'canned', 'title' => $GLOBALS['lang']['canned_messages'], 'url' => $GLOBALS['conf']['url'].'/admin/canned.php'),
                    array('name' => 'transcripts', 'title' => $GLOBALS['lang']['transcripts'], 'url' => $GLOBALS['conf']['url'].'/admin/transcripts.php'),
                    array('name' => 'details', 'title' => $GLOBALS['lang']['my_details'], 'url' => $GLOBALS['conf']['url'].'/admin/details.php'),
                    array('name' => 'modules', 'title' => $GLOBALS['lang']['modules'], 'url' => $GLOBALS['conf']['url'].'/admin/modules.php?type=admin')
                    );
                $links = array_merge($links, $GLOBALS['module']->links('admin'));
                $this->assign('links_bottom', $links);
                break;
            case 'conf':
                $links = array(
                    array('name' => 'code', 'title' => $GLOBALS['lang']['generate_code'], 'url' => $GLOBALS['conf']['url'].'/admin/code.php'),
                    array('name' => 'operators', 'title' => $GLOBALS['lang']['operators'], 'url' => $GLOBALS['conf']['url'].'/admin/operators.php'),
                    array('name' => 'departments', 'title' => $GLOBALS['lang']['departments'], 'url' => $GLOBALS['conf']['url'].'/admin/departments.php'),
                    array('name' => 'assigns', 'title' => $GLOBALS['lang']['assigns'], 'url' => $GLOBALS['conf']['url'].'/admin/assigns.php'),
                    array('name' => 'transcripts', 'title' => $GLOBALS['lang']['transcripts'], 'url' => $GLOBALS['conf']['url'].'/admin/transcripts.php?admin'),
                    array('name' => 'icons', 'title' => $GLOBALS['lang']['icons'], 'url' => $GLOBALS['conf']['url'].'/admin/icons.php'),
                    array('name' => 'hotpages', 'title' => $GLOBALS['lang']['hot_pages'], 'url' => $GLOBALS['conf']['url'].'/admin/hotpages.php'),
                    array('name' => 'stats', 'title' => $GLOBALS['lang']['statistics'], 'url' => $GLOBALS['conf']['url'].'/admin/stats.php'),
                    array('name' => 'modules', 'title' => $GLOBALS['lang']['modules'], 'url' => $GLOBALS['conf']['url'].'/admin/modules.php?type=conf')
                    );
                $links = array_merge($links, $GLOBALS['module']->links('conf'));
                $this->assign('links_bottom', $links);
                break;
            }
        }

    }

?>