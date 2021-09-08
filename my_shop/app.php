<?php
//現在のディレクトリパスを追加
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);

require_once 'app/helpers/Session.php';
require_once 'app/helpers/View.php';
require_once 'app/helpers/Http.php';
