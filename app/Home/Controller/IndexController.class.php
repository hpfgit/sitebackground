<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display("index");
    }
    public function KindEditor(){
        $htmlData = '';
        if (!empty($_POST['content1'])) {
            if (get_magic_quotes_gpc()) {
                $htmlData = stripslashes($_POST['content1']);
            } else {
                $htmlData = $_POST['content1'];
            }
        }
        $this->assign("htmlData", $htmlData);
        $this->display("index");
    }
    public function ColumnManagement(){
        $model = M("sitebackground");
        $res = $model->field("columns")->select();
    }
}