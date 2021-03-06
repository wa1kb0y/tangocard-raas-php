<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents the response from the get orders call
 */
class GetOrdersResponseModel implements JsonSerializable
{
    /**
     * Pagination information
     * @required
     * @var \RaasLib\Models\PageModel $page public property
     */
    public $page;

    /**
     * An array of orders
     * @var \RaasLib\Models\OrderSummaryModel[]|null $orders public property
     */
    public $orders;

    /**
     * Constructor to set initial or default values of member properties
     * @param PageModel $page   Initialization value for $this->page
     * @param array     $orders Initialization value for $this->orders
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->page   = func_get_arg(0);
            $this->orders = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['page']   = $this->page;
        $json['orders'] = $this->orders;

        return $json;
    }
}
