<?php
//tao ra cac link trong admin
function admin_url($url = '')
{
    return base_url('index.php/admin/'.$url);
}