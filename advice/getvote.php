<?php
$user = 'lat7h';// $_SERVER['PHP_AUTH_USER'];
if (isset($_REQUEST['pro']) || isset($_REQUEST['con'])) {

    $fp = fopen('advice.json', 'r+');
    if (flock($fp, LOCK_EX)) {
        $dat = json_decode(fread($fp, filesize('advice.json')), true);
        
        if (isset($_REQUEST['pro'])) $dat[$_REQUEST['pro']]['votes'] += 1;
        else $dat[$_REQUEST['con']]['votes'] -= 1;

        fseek($fp, 0);
        ftruncate($fp,0);
        fwrite($fp, json_encode($dat, JSON_PRETTY_PRINT));
        
        flock($fp, LOCK_UN);
    }
    fclose($fp);
    
    $fn = 'votes/'.$user.'.json';
    $fp = fopen($fn, 'r+');
    if (!$fp) {
        file_put_contents($fn, json_encode(array(
            "pro"=>isset($_REQUEST['pro']) ? array($_REQUEST['pro']) : array(),
            "con"=>isset($_REQUEST['con']) ? array($_REQUEST['con']) : array(),
        ), JSON_PRETTY_PRINT));
    } else if (flock($fp, LOCK_EX)) {
        $dat = json_decode(fread($fp, filesize('votes/'.$user.'.json')), true);
        
        if (isset($_REQUEST['pro'])) $dat['pro'][] = $_REQUEST['pro'];
        else $dat['con'][] = $_REQUEST['con'];

        fseek($fp, 0);
        ftruncate($fp,0);
        fwrite($fp, json_encode($dat, JSON_PRETTY_PRINT));
        
        flock($fp, LOCK_UN);
    }
    fclose($fp);
}
?>
