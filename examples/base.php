<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

include __DIR__.'/../vendor/autoload.php';

use Overtrue\WeChat\Application;

$options = include __DIR__.'/config.php';

$app = new Application($options);

define('BASE_URL', 'http://wxtest.castku.com');
