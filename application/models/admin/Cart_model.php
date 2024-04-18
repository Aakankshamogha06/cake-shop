<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_cart_items() {
        return $this->cart->contents();
    }

    public function add_to_cart($product_id) {
        $product = $this->db->get_where('products', array('id' => $product_id))->row();
        $data = array(
            'id'      => $product->id,
            'qty'     => 1,
            'price'   => $product->price,
            'name'    => $product->name,
        );
        $this->cart->insert($data);
    }

    public function remove_from_cart($item_id) {
        $data = array(
            'rowid'   => $item_id,
            'qty'     => 0
        );
        $this->cart->update($data);
    }

    public function update_cart() {
        $cart = $this->input->post('cart');
        foreach ($cart as $item) {
            $data = array(
                'rowid'   => $item['rowid'],
                'qty'     => $item['qty']
            );
            $this->cart->update($data);
        }
    }

}
