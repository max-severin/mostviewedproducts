<?php

/*
 * @author Max Severin <makc.severin@gmail.com>
 */
return array(
    'shop_mvp_product_views' => array(
        'product_id' => array('int', 11, 'null' => 0),
        'view' => array('int', 11, 'null' => 0),
        ':keys' => array(
            'PRIMARY' => 'product_id',
        ),
    ),
);
