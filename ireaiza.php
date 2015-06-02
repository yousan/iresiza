<?php
/*
Plugin Name: IReSiZa
Description: Image Resizer
Author: Yousan
Author URI:
Text Domain: ireaiza
Domain Path: /
Version: 4.1.2
*/

iresiza();

function iresiza() {
    if (isset($_GET['resize']) && isset($_GET['id'])){
        list($x, $y) = explode('x', $_GET['resize']);
        if (is_numeric($x) && is_numeric($y)) {
            wp_get_attachment_image_src( $id, array($x, $y), false);
        }
    }
}
