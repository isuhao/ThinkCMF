<?php

/**
 * 后台首页
 */
class indexAction extends AdminbaseAction {

    //后台框架首页
    public function index() {
        $this->assign("SUBMENU_CONFIG", json_encode(D("Menu")->menu_json()));
        $this->display();
    }

    

}

?>
