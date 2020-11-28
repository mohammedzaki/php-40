<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/20/20
 * Time: 6:17 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-40/ecommerce/helpers/cookies_handler.php";


function get_cart_content() {
    if (get_from_cookies(CART_DATA) != null) {
        return unserialize(get_from_cookies(CART_DATA));
    } else {
        return [];
    }
}

function add_to_cart($product_id, $product_name, $product_price, $quantity = 1) {

    $cart_data = get_cart_content();

    $product = [
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $quantity,
        'total' => $product_price * 1
    ];

    if (isset($cart_data['products'][$product_id])) {
        $p = $cart_data['products'][$product_id];
        $p['quantity'] += $product['quantity'];
        $p['total'] = $p['price'] * $p['quantity'];
        $cart_data['products'][$product_id] = $p;
    } else {
        $cart_data['products'][$product_id] = $product;
    }

    save_into_cookies(CART_DATA, serialize($cart_data), time() + 100000);
}

function remove_from_cart($product_id) {

    $cart_data = get_cart_content();

    unset($cart_data['products'][$product_id]);

    save_into_cookies(CART_DATA, serialize($cart_data), time() + 100000);
}

function get_current_cart_products() {

    $cart_data = get_cart_content();

    if (isset($cart_data['products'])) {
        return $cart_data['products'];
    } else {
        return null;
    }
}