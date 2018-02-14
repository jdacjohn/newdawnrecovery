    //=======================================================================

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
* This file contains all the javascript used at the admin end except			  *
* for the request monitor														  *
**********************************************************************************/

    var MonitorConnection1 = new Aardvark('MonitorConnection1');
    var MonitorConnection2 = new Aardvark('MonitorConnection2');

    function Monitor() {

        this.time = Misc.epoch();
        this.mac = navigator.platform.indexOf('Mac');
        this.image_width = 0;
        this.request = false;
        this.operatorid = '<?php echo($operatorid); ?>';

        this.launch = function()
        {
            window.open('<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/index.php', '', 'toolbar=no, status=no, scrollbars=no, resizable=yes, location=no, menubar=no, directories=no, width=<?php echo($GLOBALS['conf']['monitor_width']); ?>, height=<?php echo($GLOBALS['conf']['monitor_height']); ?>');
        }

        this.check = function(variables)
        {
            var response = '';
            if (MonitorConnection1.vars.monitor_<?php echo($operatorid); ?>) {
                response = MonitorConnection1.vars.monitor_<?php echo($operatorid); ?>;
                this.time = Misc.epoch();
                this.refreshed = false;
                var i = 0;
                var max = 0;
                var action = response.split('|');
                max = action.length - 1;
                for (i = 0; i < max; ++i) {
                    switch (action[i]) {
                    case 'request-incoming':
                        this.request = true;
                        if (!this.refreshed) {
                            this.refreshed = true;
                            parent.window.monitor.location.href = '<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/monitor.php?time='+this.time;
                        }
                        break;
                    case 'request-waiting':
                        this.request = true;
                        break;
                    case 'request-cancelled':
                        this.request = false;
                        if (!this.refreshed) {
                            this.refreshed = true;
                            parent.window.monitor.location.href = '<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/monitor.php?time='+this.time;
                        }
                        break;
                    case 'activity':
                        if (!this.request && !this.refreshed) {
                            this.refreshed = true;
                            parent.window.monitor.location.href = '<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/monitor.php?time='+this.time;
                        }
                        break;
                    case 'boot':
                        if (parent.window.monitor.location.href !== 'about:blank') {
                            alert('<?php echo($GLOBALS['lang']['booted']); ?>');
                            window.close();
                        }
                        break;
                    }
                }
            }
            if (parent.window.monitor.location.href == '<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/response.php') {
                this.change_status('on');
                this.change_sounds('on');
                parent.window.monitor.location.href = '<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/monitor.php?time='+this.time;
            }
            window.setTimeout('Monitor.refresh();', <?php echo($GLOBALS['conf']['monitor_refresh']); ?>);
        }

        this.refresh = function()
        {
            MonitorConnection1.add('monitor', '');
            MonitorConnection1.add('time', Misc.epoch());
            MonitorConnection1.send('<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/response.php', 'Monitor.check(variables)', 'reset');
        }

        this.reset = function()
        {
            this.time = Misc.epoch();
            parent.window.monitor.location.href = '<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/monitor.php?time='+this.time;
        }

        this.accept = function(id, chatid, type)
        {
            this.request = false;
            MonitorConnection2.add('accept_'+type, '');
            MonitorConnection2.add('id', id);
            MonitorConnection2.add('chatid', chatid);
            MonitorConnection2.add('time', Misc.epoch());
            MonitorConnection2.send('<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/response.php', 'Monitor.reset()', 'reset');
            switch (type) {
                case 'chat':
                    window.open('<?php echo($GLOBALS['conf']['url']); ?>/live/chat/main.php?admin&chatid='+chatid, 'chat_'+chatid, 'toolbar=no, status=no, scrollbars=no, resizable=yes, location=no, menubar=no, directories=no, width=<?php echo($GLOBALS['conf']['chat_op_width']); ?>, height=<?php echo($GLOBALS['conf']['chat_op_height']); ?>');
                    break;
                case 'transfer':
                    window.open('<?php echo($GLOBALS['conf']['url']); ?>/live/chat/main.php?admin&chatid='+chatid, 'transfer_'+chatid, 'toolbar=no, status=no, scrollbars=no, resizable=yes, location=no, menubar=no, directories=no, width=<?php echo($GLOBALS['conf']['chat_op_width']); ?>, height=<?php echo($GLOBALS['conf']['chat_op_height']); ?>');
                    break;
                case 'opchat':
                    window.open('<?php echo($GLOBALS['conf']['url']); ?>/live/chat/main.php?admin&opchat&chatid='+chatid, 'operator_'+chatid, 'toolbar=no, status=no, scrollbars=no, resizable=yes, location=no, menubar=no, directories=no, width=<?php echo($GLOBALS['conf']['opchat_width']); ?>, height=<?php echo($GLOBALS['conf']['opchat_height']); ?>');
                    break;
            }
        }

        this.decline = function(id, chatid, type)
        {
            this.request = false;
            MonitorConnection2.add('decline_'+type, '');
            MonitorConnection2.add('id', id);
            MonitorConnection2.add('chatid', chatid);
            MonitorConnection2.add('time', Misc.epoch());
            MonitorConnection2.send('<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/response.php', 'Monitor.reset()', 'reset');
        }

        this.info = function(chatid)
        {
            window.open('<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/info.php?chatid='+chatid, 'info_'+chatid, 'toolbar=no, resizable=yes, status=no, scrollbars=yes, location=no, menubar=no, directories=no, width=<?php echo($GLOBALS['conf']['info_width']); ?>, height=<?php echo($GLOBALS['conf']['info_height']); ?>');
        }

        this.initiate = function(chatid)
        {
            window.open('<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/initiate.php?chatid='+chatid, 'initiate_'+chatid, 'toolbar=no, resizable=yes, status=no, scrollbars=yes, location=no, menubar=no, directories=no, width=<?php echo($GLOBALS['conf']['initiate_width']); ?>, height=<?php echo($GLOBALS['conf']['initiate_height']); ?>');
        }

        this.operator_chat = function()
        {
            this.time = Misc.epoch();
            window.open('<?php echo($GLOBALS['conf']['url']); ?>/live/operator.php', 'opchat_'+this.time, 'toolbar=no, status=no, scrollbars=yes, location=no, menubar=no, directories=no, width=<?php echo($GLOBALS['conf']['opchat_width']); ?>, height=<?php echo($GLOBALS['conf']['opchat_height']); ?>');
        }

        this.change_status = function(x, on, off)
        {
            this.time = Misc.epoch();
            if (x == 'img') {
                if (parent.window.winstatus.document.getElementById('status').src == on) {
                    parent.window.winstatus.document.getElementById('status').src = off;
                    x = 'off';
                } else {
                    parent.window.winstatus.document.getElementById('status').src = on;
                    x = 'on';
                }
            } else {
                if (x == 'on') {
                    parent.window.winstatus.document.getElementById('status_on').className = 'selected';
                    parent.window.winstatus.document.getElementById('status_off').className = 'not_selected';
                } else {
                    parent.window.winstatus.document.getElementById('status_on').className = 'not_selected';
                    parent.window.winstatus.document.getElementById('status_off').className = 'selected';
                }
            }

            MonitorConnection2.add('status', '');
            MonitorConnection2.add('x', x);
            MonitorConnection2.add('time', Misc.epoch());
            MonitorConnection2.send('<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/response.php', '', 'reset');

        }

        this.change_sounds = function(x, on, off)
        {
            this.time = Misc.epoch();
            if (x == 'img') {
                if (parent.window.winstatus.document.getElementById('sounds').src == on) {
                    parent.window.winstatus.document.getElementById('sounds').src = off;
                    x = 'off';
                } else {
                    parent.window.winstatus.document.getElementById('sounds').src = on;
                    x = 'on';
                }
            } else {
                if (x == 'on') {
                    parent.window.winstatus.document.getElementById('sounds_on').className = 'selected';
                    parent.window.winstatus.document.getElementById('sounds_off').className = 'not_selected';
                } else {
                    parent.window.winstatus.document.getElementById('sounds_on').className = 'not_selected';
                    parent.window.winstatus.document.getElementById('sounds_off').className = 'selected';
                }
            }

            MonitorConnection2.add('sounds', '');
            MonitorConnection2.add('x', x);
            MonitorConnection2.add('time', Misc.epoch());
            MonitorConnection2.send('<?php echo($GLOBALS['conf']['url']); ?>/admin/monitor/response.php', '', 'reset');
            
        }

    }

    var Monitor = new Monitor();

    //=======================================================================
