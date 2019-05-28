<?php
/**
 * Git destroy history
 * 
 * @author  Yohei Yoshikawa
 *
 * Copyright (c) 2019 Yohei Yoshikawa (https://github.com/yoo16/)
 * 
 * Attention!
 * It do not guarantee the operation.
 * 
 * please exec Git home directory.
 * 
 * 1) input $argv[1] as file path.
 * 2) when you input $argv[2], able to execute.
 */

$remote_server = 'origin';
$branch_name = 'master';

$path = '';
$is_exeute = false;
if (isset($argv[1])) $path = $argv[1];
if (isset($argv[2])) $is_exeute = (bool) $argv[2];

if ($path && file_exists($path)) {
    echo "file exists! can't destroy object: {$path}".PHP_EOL;
    return;
}
$is_dir = (mb_substr($path, -1) == '/');

echo '------------------------------------------------'.PHP_EOL;
echo "Destory git object!!".PHP_EOL;
echo $path.PHP_EOL;
echo "is_excute: {$is_exeute}".PHP_EOL;
echo "is_dir: {$is_dir}".PHP_EOL;
echo '------------------------------------------------'.PHP_EOL;

$cmds = [];
if ($is_dir) {
    $cmds[] = "git filter-branch -f --index-filter 'git rm -r --cached --ignore-unmatch {$path}' --prune-empty -- --all";
} else {
    $cmds[] = "git filter-branch -f --index-filter 'git rm --cached --ignore-unmatch {$path}' --prune-empty -- --all";
}
$cmds[] = "git gc --aggressive --prune=now";
$cmds[] = "git reflog expire --expire=now --all";
$cmds[] = "git repack -A -d";
$cmds[] = "git push --force {$remote_server} {$branch_name}";

executes($cmds, $is_exeute);

/**
 * executes
 *
 * @param array $cmds
 * @return void
 */
function executes($cmds, $is_exeute = false) {
    foreach ($cmds as $cmd) {
        echo $cmd.PHP_EOL;
        if ($is_exeute) exec($cmd);
    }
}