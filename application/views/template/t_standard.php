<?php
$this->load->view('commons/header', $header);
echo "\n";
if (isset($menu) && $menu['visible'])
    $this->load->view('commons/menu', $menu);
echo "\n";
    
$this->load->view($page.'-view', $data);
echo "\n";

if (isset($footer) && $footer)
    $this->load->view('commons/footer');
echo "\n";

if (isset($jQuery) && $jQuery)
    echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
echo "\n";

foreach ($header['libsjs'] as $file)
    echo "<script src='".base_url("assets/js/libs/" . $file . ".js" ) . "'></script> \n";
foreach ($header['js'] as $file)
    echo "<script src='".base_url("assets/js/" . $file . ".js" ) . "'></script> \n";

$this->load->view('commons/eof');
