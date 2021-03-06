<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents the request to create a customer
 */
class CreateCustomerRequestModel implements JsonSerializable
{
    /**
     * The customer identifier
     * @required
     * @var string $customerIdentifier public property
     */
    public $customerIdentifier;

    /**
     * The display name
     * @required
     * @var string $displayName public property
     */
    public $displayName;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string $displayName        Initialization value for $this->displayName
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->customerIdentifier = func_get_arg(0);
            $this->displayName        = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['customerIdentifier'] = $this->customerIdentifier;
        $json['displayName']        = $this->displayName;

        return $json;
    }
}
