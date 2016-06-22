<?php
/**
 * 微信支付通知地址
 *
 *
 * @copyright  Copyright (c) 2007-2015 ShopWWI Inc. (http://www.shopwwi.net)
 * @license    http://www.shopwwi.net
 * @link       http://www.shopwwi.net
 * @since      File available since Release v1.1
 */

$_GET['act'] = 'payment';
$_GET['op'] = 'notify';
$_GET['payment_code'] = 'wxpay_jsapi';

require __DIR__ . '/../../../index.php';
