<?php
    echo "Welcome to the PHP digger\n";
    $url = "https://pear.php.net/feeds/latest.rss";
    //echo "$url\n";
    $handle = fopen($url, "rb");
    $contents = '';
    while (!feof($handle)) {
      $contents .= fread($handle, 8192);
    }
    fclose($handle);
    echo $contents;

    // parse RSS

?>
