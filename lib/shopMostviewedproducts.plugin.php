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

        $products = array();

        $mvp_model = new shopMostviewedproductsPluginModel();

        $items = $mvp_model->query( "SELECT product_id FROM shop_mvp_product_views ORDER BY view DESC LIMIT " . (int)$count )->fetchAll();

        if ($items) {
            foreach ($items as $product) {
                $p = new shopProduct($product['product_id']);  
                $route_params = array('product_url' => $p['url']);
                if (isset($p['category_url'])) {
                    $route_params['category_url'] = $p['category_url'];
                }

                $p['frontend_url'] = wa()->getRouteUrl('shop/frontend/product', $route_params);                 
                $products[] = $p;
            }
        }

        return $products;

    }

}