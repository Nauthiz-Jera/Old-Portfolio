<?php
header("Pragma: public");
header("Expires: 0"); 
header("Pragma: no-cache"); 
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");  
header("Content-Type: application/force-download"); 
header("Content-Type: application/octet-stream");
header("Content-Type: application/pdf");
header('Content-Disposition: attachment; filename="Resume.pdf"');

// The PDF source is in original.pdf
readfile("Resume.pdf");
    
    
?>