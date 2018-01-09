<?php declare(strict_types=1);

/*
 * +----------------------------------------------------------------------+
 * |                          ThinkSNS Plus                               |
 * +----------------------------------------------------------------------+
 * | Copyright (c) 2017 Chengdu ZhiYiChuangXiang Technology Co., Ltd.     |
 * +----------------------------------------------------------------------+
 * | This source file is subject to version 2.0 of the Apache license,    |
 * | that is bundled with this package in the file LICENSE, and is        |
 * | available through the world-wide-web at the following url:           |
 * | http://www.apache.org/licenses/LICENSE-2.0.html                      |
 * +----------------------------------------------------------------------+
 * | Author: Slim Kit Group <master@zhiyicx.com>                          |
 * | Homepage: www.thinksns.com                                           |
 * +----------------------------------------------------------------------+
 */

return [

    /*
    |--------------------------------------------------------------------------
    | 投稿方式，默认任何人都可以投稿。
    |--------------------------------------------------------------------------
    |
    | 可选方式有 verified 和 pay，可以复选，选择 verified 则表示「认证用户」可以投稿，
    | 如果只选择 pay 则所有人付费都可以投稿，两项都选择则表示「认证用户」需要付费投稿，
    | 其他用户则无权限投稿。默认所有人都可以投稿。
    |
    */
    'contribute' => [
        'pay' => false,
        'verified' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | 付费投稿需要支付的金额
    |--------------------------------------------------------------------------
    |
    | 这里设置如果在投稿方式中选择 pay，则需要支付这个字段设置的金额，金额单位为「分」
    | 以保证整数计算。默认为 100。
    |
    */
    'pay_contribute' => 100,
];
