<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //获取用户openid
        Vendor('Weixinpay.Weixinpay');
        Vendor('Sample.jssdk');
        $wxpay=new \Weixinpay();
        // 获取jssdk需要用到的数据
        $data=$wxpay->getParameters();
        print_r($data) ;die;
        // 将数据分配到前台页面
        $jssdk = new \JSSDK("wx4ff19b6511cb0168", "ef0cc74d77ceb137e297efecfc0e9908");
        $signPackage = $jssdk->GetSignPackage();
        $data['nonceStr']=$signPackage['nonceStr'];
        //print_r($signPackage);die;
        $assign=array(
            'data'=>json_encode($data)
        );
        $this->assign($assign);
        $this->assign('signPackage',$signPackage);
        $this->display();

        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

    }
}