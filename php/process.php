<?php
    $keys = array('amount','strength');
    $csv_line = array();
    foreach($keys as $key){
        array_push($csv_line,'' . $_GET[$key]);
    }
    $fname = 'survey_data.csv';
    $csv_line = implode(',',$csv_line);
    if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
    $fcon = fopen($fname,'a');
    $fcontent = $csv_line;
    fwrite($fcon,$csv_line);
    fclose($fcon);
?>
