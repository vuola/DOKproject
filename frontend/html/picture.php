<?php
  
$url = 'https://picsum.photos/1200'; 
$img = '/tmp/kube/image.gif'; 

if (file_exists($img)) {
    $date1 = date("d/m/Y", filemtime($img)); // date of file
    $date2 = date("d/m/Y"); // today
    if ($date1 < $date2) {
        // Function to write image into file
        file_put_contents($img, file_get_contents($url));
    }    
}
else {
    // No file, retrieve one
    $context = stream_context_create(
        array(
            "http" => array(
                "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
            )
        )
    );    
    $content = file_get_contents($url, false, $context);
    file_put_contents($img, $content);
}
 
$content = file_get_contents($img);
header('Content-Type: image/gif');
echo $content;
?>