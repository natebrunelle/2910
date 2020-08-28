<!DOCTYPE html>
<html lang="en">
<head>
    <title>Advice from Previous TAs</title>
    <style type="text/css">
    html, div.votes { 
        font-size: 120%; 
        background: #630;
        color: #fdb;
        line-height: 1.33em;
    }
    div.votes {
        border-radius: 100%;
        border: thin solid #f70;
        padding: 0.5ex;
        margin: auto;
        display: table;
    }
    span.votes {
        font-size: 70%;
        opacity: 0.7071;
    }
    a,a:visited { color: inherit; }
    
    .advice { 
        max-width: 30em; display: table; margin: 1em auto;
        border: medium solid #f70;
        background: #fed;
        padding: 1ex;
        border-radius: 1.5ex; 
        color: black;
    }
    .author { text-align:right; font-style: italic; }
    .author:before { content: "— "; }
    h1,h2,h3,h4,h5,h6 { text-align: center; }
    h1 { font-size: 200%; }
    h2 { font-size: 150%; }
    p { margin: 0; }
    p + p { text-indent: 1em; }
    
    .vote + .vote { display: none; }
    
    .title { font-weight: bold; text-align: center; font-size: 80%; font-family: sans-serif;}
    
    .toc { display: table; margin: auto; background: rgba(255,127,0,0.125); padding: 0ex 1ex; border-radius:1.5ex; }
    #TOC, #TOC a, #TOC a:visited {
        color: #fdb;
        text-decoration: none;
    }
    </style>
    <script type="text/javascript">
        function fillTOC() {
            var toc = document.querySelector('#TOC');
            var stack = [toc];
            document.querySelectorAll('h1,h2,h3').forEach(x => {
                x.id = 'h'+toc.querySelectorAll('li').length;
                if (x.tagName[1] > stack.length) {
                    let u = document.createElement('ul');
                    stack[stack.length-1].lastElementChild.appendChild(u);
                    stack.push(u);
                }
                while (x.tagName[1] < stack.length) stack.pop()
                var d = document.createElement('li');
                d.innerHTML = '<a href="#'+x.id+'">'+x.innerHTML+'</a>';
                stack[stack.length-1].appendChild(d);
            });
            <?php if (!isset($_GET['vote'])) { ?>
            var d = document.createElement('a');
            d.href="?vote";
            d.innerHTML = 'Click to adjust advice ranking';
            document.querySelector(".toc").appendChild(d);
            <?php } ?>
        }
        function keyVote(event) {
            if (event.altKey || event.ctrlKey || event.metaKey || event.shiftKey || event.repeat) return;
            var obj = document.querySelector('.advice.vote');
            if (!obj) return;
            if (event.key == "ArrowRight") {
                fetch("getvote.php?pro="+obj.getAttribute('advindex'));
                obj.remove();
                event.preventDefault();
            } else if (event.key == "ArrowLeft") {
                fetch("getvote.php?con="+obj.getAttribute('advindex'));
                obj.remove();
                event.preventDefault();
            }
        }
        function swipeStart(event) {
            window._startX = event.pageX;
            window._startY = event.pageY;
            event.preventDefault();
        }
        function swipeEnd(event) {
            var obj = document.querySelector('.advice.vote');
            if (!obj) return;
            let dx = event.pageX - window._startX;
            let dy = event.pageY - window._startY;
            if (Math.abs(dx) > Math.abs(dy) && Math.abs(dx) > 10) {
                fetch("getvote.php?"+(dx>0?"pro":"con")+"="+obj.getAttribute('advindex'));
                obj.remove();
            }
            event.preventDefault();
        }
    </script>
</head>
<body onload="fillTOC()">
    <div class="toc">
    <ul id="TOC">
    </ul>
    </div>
<?php

$user = 'lat7h' ;// $_SERVER['PHP_AUTH_USER'];

$fp = fopen('advice.json', 'r');
if (flock($fp, LOCK_SH)) {
    $txt = fread($fp, filesize('advice.json'));
    //error_log("=========== ".strlen($txt));
    $dat = json_decode($txt, true);
    //error_log("=========== ".count($dat));
    flock($fp, LOCK_UN);
    fclose($fp);
} else {
    error_log('Failed to open advice.json');
    $dat = array();
}

$fn = 'votes/'.$user.'.json';
$fp = fopen($fn, 'r+');
if (!$fp) { $own = array('pro'=>array(), 'con'=>array()); }
else if (flock($fp, LOCK_SH)) {
    $own = json_decode(fread($fp, filesize('votes/'.$user.'.json')), true);
    flock($fp, LOCK_UN);
    fclose($fp);
}

// shuffles indices [i, i+1, ..., j-1]
function shuffleRange($arr, $i, $j) {
    for(; $i < $j; $i+=1) {
        $k = rand($i,$j-1);
        if ($k != $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$k];
            $arr[$k] = $tmp;
        }
    }
}

// radix sorts by votes, most first, indices [i, i+1, ..., j-1]
function radixRange(&$arr, $i, $j) {
    $buckets = array();
    for($k=$i; $k<$j; $k+=1) {
        $v = 0;
        if (isset($arr[$k]['votes'])) $v=$arr[$k]['votes'];
        if (!isset($buckets[$v])) $buckets[$v] = array($arr[$k]);
        else $buckets[$v][] = $arr[$k];
    }
    krsort($buckets);
    foreach($buckets as $set)
        foreach($set as $obj)
            $arr[$i++] = $obj;
}

function sortWithinTopics() {
    global $dat;
    $sidx = 0;
    foreach($dat as $i=>$obj) {
        foreach($obj['topic'] as $j=>$name)
            if (!isset($old[$j]) || $old[$j] != $name) {
                radixRange($dat, $sidx, $i);
                $sidx = $i;
            }
        $old = $obj['topic'];
    }
    radixRange($dat, $sidx, $i);
}

function showAll() {
    global $dat, $own;
    
    sortWithinTopics();

    $old=array();
    foreach($dat as $i=>$obj) {
        foreach($obj['topic'] as $j=>$name)
            if (!isset($old[$j]) || $old[$j] != $name)
                echo "<h".($j+1).">$name</h".($j+1).">\n";
        $old = $obj['topic'];
        echo "<div class='advice'>";
        echo $obj['text'];
        echo "<div class='author'>$obj[author]";
        if ($obj['votes']) {
            echo " <span class='votes'>";
            echo $obj['votes'] > 0 ? '+' : '−';
            echo abs($obj['votes']);
            echo "</span>";
        }
        echo "</div></div>";
    }
}

function showVotes() {
    global $dat, $own;
    //error_log('======================='.json_encode($dat));
    $outof = count($dat);
    $counts = array_fill(0, $outof, 0);
    foreach($own['pro'] as $i) { $counts[$i] += 1; $dat[$i]['me'] += 1; }
    foreach($own['con'] as $i) { $counts[$i] += 1; $dat[$i]['me'] -= 1; }
    $addto = min($counts);
    $opts = array();
    foreach($counts as $i=>$n) if ($n == $addto) { $dat[$i]['i'] = $i; $opts[] = $dat[$i]; }
    shuffle($opts);
    
    foreach($opts as $obj) {
        echo "<div class='advice vote' advindex='$obj[i]'>";
        echo "<div class='title'>".implode(' – ', $obj['topic'])."</div>";
        if ($addto > 0) {
            echo "<div class='votes'>";
            echo $obj['me'] > 0 ? '👍' : ($obj['me'] < 0 ? '👎' : '');
            echo "</div>";
        }
        echo $obj['text'];
        echo "<div class='author'>$obj[author]</div>";
        echo "</div>";
    }
    ?>
    <center class="vote">You’ve voted on all the advice!</center>
    <script>document.querySelector(".toc").innerHTML = `
        <ul style="display:none;" id="TOC"></ul>
        Type <kbd>→</kbd> or swipe right to increase ranking<br/>
        type <kbd>←</kbd> or swipe left to decrease ranking<br/>
        <a href="index.php">Click to return to the full listing</a>`;
        document.addEventListener("keydown", keyVote)
        document.addEventListener("mousedown", swipeStart)
        document.addEventListener("mouseup", swipeEnd)
    </script><?php
}

if (isset($_GET['vote']))
    showVotes();
else
    showAll();
?>
</body></html>
