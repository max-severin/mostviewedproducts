<?php

/*
 * @author Max Severin <makc.severin@gmail.com>
 */

return array(
    'name' => ('Favorite products'),
    'description' => ('Backend favorite products filtering'),
    'version'=>'1.0.0',
    'img'=>'img/mostviewedproducts.png',
    'handlers' => array(
        'frontend_product' => 'frontendProduct',
        'product_delete' => 'productDelete',
    ),
);