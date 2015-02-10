<?php

/*
 * @author Max Severin <makc.severin@gmail.com>
 */

class shopMostviewedproductsPlugin extends shopPlugin
{

    /** Handler for frontend_product event: save information about product views. */
    public function frontendProduct($product) { 
        
        // ;

    }

    /** Handler for product_delete event: clean up our data when products are removed. */
    public function productDelete($params) {
        print_r($params); exit(); // 4test!
        $mvp_model = new shopFavoriteproductsPluginModel();
        $mvp_model->deleteByField('product_id', $params['ids']);
    }

    /** Get array of most viewed products. */
    static function getMostViewedProducts($count) {

        // ;

    }

}