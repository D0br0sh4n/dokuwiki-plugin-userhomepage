<?php
/**
 * Helper Component for the Userhomepage Plugin
 *
 * @author: Simon Delage <simon.geekitude@gmail.com>
 * @license: CC Attribution-Share Alike 3.0 Unported <http://creativecommons.org/licenses/by-sa/3.0/>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

class helper_plugin_userhomepage extends DokuWiki_Plugin {

    function getPrivateID() {
        if ($this->getConf('group_by_name')) {
            // private:s:simon or private:s:simon_delage
            $this->private_ns = cleanID($this->getConf('users_namespace').':'.strtolower(substr($this->privateNamespace(), 0, 1)).':'. $this->privateNamespace());
        } else {
            // private:simon or private:simon_delage
            $this->private_ns = cleanID($this->getConf('users_namespace').':'. $this->privateNamespace());
        }
        // ...:start.txt
        return $this->private_page = cleanID($this->private_ns.':'.$this->privateStart());

    }

    function getPublicID() {
        return $this->public_page = cleanID($this->getConf('public_pages_ns').':'. $_SERVER['REMOTE_USER']);
    }

    function getPrivateLink($param=null) {
        global $INFO;
        global $lang;
        if ($param == "loggedinas") {
			return '<li>'.$lang['loggedinas'].' : <a href="'.wl($this->getPrivateID()).'"  class="uhp_private" rel="nofollow" title="'.$this->getLang('privatenamespace').'">'.$INFO['userinfo']['name'].' ('.$_SERVER['REMOTE_USER'].')</a></li>';
		} elseif ($param != null) {
			return '<a href="'.wl($this->getPrivateID()).'"  rel="nofollow" title="'.$this->getLang('privatenamespace').'">'.$param.'</a>';
		} else {
			return '<a href="'.wl($this->getPrivateID()).'"  rel="nofollow" title="'.$this->getLang('privatenamespace').'">'.$this->getLang('privatenamespace').'</a>';
		}
    }

    function getPublicLink($param=null) {
        global $INFO;
        global $lang;
        if ($param == "loggedinas") {
			return '<li>'.$lang['loggedinas'].' : <a href="'.wl($this->getPublicID()).'"  class="uhp_public" rel="nofollow" title="'.$this->getLang('publicpage').'">'.$INFO['userinfo']['name'].' ('.$_SERVER['REMOTE_USER'].')</a></li>';
		} elseif ($param != null) {
			return '<a href="'.wl($this->getPublicID()).'"  rel="nofollow" title="'.$this->getLang('publicpage').'">'.$param.'</a>';
		} else {
			return '<a href="'.wl($this->getPublicID()).'"  rel="nofollow" title="'.$this->getLang('publicpage').'">'.$this->getLang('publicpage').'</a>';
		}
    }

    function privateNamespace() {
        if ( $this->getConf('use_name_string')) {
            global $INFO;
            $raw_string = $INFO['userinfo']['name'];
            // simon_delage
            return $raw_string;
        } else {
            // simon
            return strtolower($_SERVER['REMOTE_USER']);
        }
    }

    function privateStart() {
        if ( $this->getConf('use_start_page')) {
            global $conf;
            return $conf['start'];
        } else {
            return $this->homeNamespace();
        }
    }

}