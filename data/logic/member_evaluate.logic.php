<?php
/**
 * 评价行为
 *
 * @copyright  Copyright (c) 2007-2015 ShopWWI Inc. (http://www.shopwwi.net)
 * @license    http://www.shopwwi.net
 * @link       http://www.shopwwi.net
 * @since      File available since Release v1.1
 */
defined('ByShopWWI') or exit('Access Invalid!');
class member_evaluateLogic {

    public function evaluateListDity($goods_eval_list) {
        foreach($goods_eval_list as $key=>$value){
			$goods_eval_list[$key]['member_avatar'] = getMemberAvatarForID($value['geval_frommemberid']);
		}
		return $goods_eval_list;
    }
}
