<?php

/*
 * @author Max Severin <makc.severin@gmail.com>
 */

class shopMostviewedproductsPluginModel extends waModel {

    protected $table = 'shop_mvp_product_views';

    public function save($product) {

    	if ($old_data = $this->getByField('product_id', $product['id'])) {

    		$fields = array(
			    'product_id' => $product['id'],
			);

			$data = array(
			    'view' => (int)$old_data['view'] + 1,
			);
			
			$this->updateByField($fields, $data);

    	} else {

    		$data = array(
			    'product_id' => $product['id'],
			    'view' => 1,
			);

			$this->insert($data, 1);

    	}

    }

}