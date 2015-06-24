<?php

/*
 * @author Max Severin <makc.severin@gmail.com>
 */
return array(
    'name' => ('Самые просматриваемые товары'),
    'description' => ('Учет просмотров товаров и возможность вывода списка самых популярных'),
    'version'=>'1.0.0',
    'img'=>'img/mostviewedproducts.png',
    'handlers' => array(
        'frontend_product' => 'frontendProduct',
        'product_delete'   => 'productDelete',
    ),
);