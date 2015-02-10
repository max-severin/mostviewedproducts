<?php

/*
 * @author Max Severin <makc.severin@gmail.com>
 */

class shopMostviewedproductsPlugin extends shopPlugin {

    /** Handler for frontend_product event: save information about product views. */
    public function frontendProduct($product) { 

        $mvp_model = new shopMostviewedproductsPluginModel();

        $mvp_model->save($product);

    }

    /** Handler for product_delete event: clean up our data when products are removed. */
    public function productDelete($params) {

        $mvp_model = new shopMostviewedproductsPluginModel();

        $mvp_model->deleteByField('product_id', $params['ids']);

    }

    /** Get array of most viewed products. */
    static function getMostViewedProducts($count) {

        // ;

    }

}