<?php

/*
 * @author Max Severin <makc.severin@gmail.com>
 */

return array(
    'name' => ('Самые просматриваемые товары'),
    'description' => ('Плагин ведет учет просмотров товара и дает возможность выводить список самых популярных товаров'),
    'version'=>'1.0.0',
    'img'=>'img/mostviewedproducts.png',
    'handlers' => array(
        'frontend_product' => 'frontendProduct',
        'product_delete' => 'productDelete',
    ),
);