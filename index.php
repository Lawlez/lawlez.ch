<?php
/* 2016 Dominik "Lawlez" Feger
 * Redirect to switch application k*/

write_log("visit");
define("DEFAULT_LOG","logs/Viewlog.fuckThis");

 
function write_log($message, $logfile='logs/Viewlog.fuckThis') {
  if($logfile == '') {
    if (defined(DEFAULT_LOG) == TRUE) {
        $logfile = DEFAULT_LOG;
    }
    else {
        error_log('No log file defined!',0);
        return array(status => false, message => 'No log file defined!');
    }
  }
$countVisit = 0;
if(isset($_COOKIE['countVisit'])){
$countVisit = $_COOKIE['countVisit'];
}
if(isset($_COOKIE['lastVisit'])){
$lastVisit = $_COOKIE['lastVisit'];

}
// set cookie for countVisit

setcookie('countVisit', ++$countVisit,  time()+3600);
// set cookie for last visit
setcookie('lastVisit', date("d-m-Y H:i:s"),  time()+3600);


  if( ($time = $_SERVER['REQUEST_TIME']) == '') {
    $time = time();
  }
 
  if( ($remote_addr = $_SERVER['REMOTE_ADDR']) == '') {
    $remote_addr = "REMOTE_ADDR_UNKNOWN";
  }
 
  if( ($request_uri = $_SERVER['REQUEST_URI']) == '') {
    $request_uri = "REQUEST_URI_UNKNOWN";
  }
  $date = date("Y-m-d H:i:s", $time);
  if($fd = @fopen($logfile, "a")) {
    $result = fwrite($fd,"Date: ".$date."| IP: ".$remote_addr."| Req-Script: ".$request_uri."| Msg: ".$message." | Last Visit:".$lastVisit." | Visit Count: [".$countVisit."]\n");
    fclose($fd);

}
}

header('Location: /switch');
exit;
?>