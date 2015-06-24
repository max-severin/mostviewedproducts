<?php

/*
 * @author Max Severin <makc.severin@gmail.com>
 */
return array(
    'name' => /*_wp*/('Most viewed products'),
    'description' => /*_wp*/('Accounting views of products and the ability to output the list of the most popular'),
    'version'=>'1.0.0',
    'img'=>'img/mostviewedproducts.png',
    'handlers' => array(
        'frontend_product' => 'frontendProduct',
        'product_delete'   => 'productDelete',
    ),
);