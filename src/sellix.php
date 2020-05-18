<?php

namespace Sellix;

class Sellix {
    function __construct($api_key) {
        $this->sellix_api_key = $api_key;
    }

    function request($url) {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://dev.sellix.io/v1/'.$url,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$this->sellix_api_key
            )
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    function getOrders() {
        return $this->request('orders');
    }

    function getOrder($id) {
        return $this->request("order/$id");
    }

    function getProducts() {
        return $this->request('products');
    }

    function getProduct($id) {
        return $this->request("products/$id");
    }

    function getFeedbacks() {
        return $this->request('feedback');
    }

    function getFeedback($id) {
        return $this->request("feedback/$id");
    }

    function getCoupons() {
        return $this->request('coupons');
    }

    function getCoupon($id) {
        return $this->request("coupons/$id");
    }

    function getCategories() {
        return $this->request('categories');
    }

    function getCategory($id) {
        return $this->request("categories/$id");
    }

    function getBlacklist() {
        return $this->request('blacklist');
    }

    function getBlacklistId($id) {
        return $this->request("blacklist/$id");
    }

    function getQueries() {
        return $this->request('queries');
    }

    function getQuery($id) {
        return $this->request("queries/$id");
    }
}

?>
