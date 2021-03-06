<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents the request to place an order
 */
class CreateOrderRequestModel implements JsonSerializable
{
    /**
     * The account identifier
     * @required
     * @var string $accountIdentifier public property
     */
    public $accountIdentifier;

    /**
     * The order amount
     * @required
     * @var double $amount public property
     */
    public $amount;

    /**
     * An optional campaign identifier
     * @var string|null $campaign public property
     */
    public $campaign;

    /**
     * The customer identifier
     * @required
     * @var string $customerIdentifier public property
     */
    public $customerIdentifier;

    /**
     * The subject of the gift email
     * @var string|null $emailSubject public property
     */
    public $emailSubject;

    /**
     * An optional external reference id
     * @var string|null $externalRefID public property
     */
    public $externalRefID;

    /**
     * The gift message in the email
     * @var string|null $message public property
     */
    public $message;

    /**
     * The recipient's information
     * @var \RaasLib\Models\NameEmailModel|null $recipient public property
     */
    public $recipient;

    /**
     * Indicates whether we should deliver this reward via email
     * @required
     * @var bool $sendEmail public property
     */
    public $sendEmail;

    /**
     * Optional sender information
     * @var \RaasLib\Models\NameEmailModel|null $sender public property
     */
    public $sender;

    /**
     * The UTID
     * @required
     * @var string $utid public property
     */
    public $utid;

    /**
     * Optional notes (not displayed to customer)
     * @var string|null $notes public property
     */
    public $notes;

    /**
     * The email template identifier
     * @var string|null $etid public property
     */
    public $etid;

    /**
     * Constructor to set initial or default values of member properties
     * @param string         $accountIdentifier  Initialization value for $this->accountIdentifier
     * @param double         $amount             Initialization value for $this->amount
     * @param string         $campaign           Initialization value for $this->campaign
     * @param string         $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string         $emailSubject       Initialization value for $this->emailSubject
     * @param string         $externalRefID      Initialization value for $this->externalRefID
     * @param string         $message            Initialization value for $this->message
     * @param NameEmailModel $recipient          Initialization value for $this->recipient
     * @param bool           $sendEmail          Initialization value for $this->sendEmail
     * @param NameEmailModel $sender             Initialization value for $this->sender
     * @param string         $utid               Initialization value for $this->utid
     * @param string         $notes              Initialization value for $this->notes
     * @param string         $etid               Initialization value for $this->etid
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->accountIdentifier  = func_get_arg(0);
            $this->amount             = func_get_arg(1);
            $this->campaign           = func_get_arg(2);
            $this->customerIdentifier = func_get_arg(3);
            $this->emailSubject       = func_get_arg(4);
            $this->externalRefID      = func_get_arg(5);
            $this->message            = func_get_arg(6);
            $this->recipient          = func_get_arg(7);
            $this->sendEmail          = func_get_arg(8);
            $this->sender             = func_get_arg(9);
            $this->utid               = func_get_arg(10);
            $this->notes              = func_get_arg(11);
            $this->etid               = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['accountIdentifier']  = $this->accountIdentifier;
        $json['amount']             = $this->amount;
        $json['campaign']           = $this->campaign;
        $json['customerIdentifier'] = $this->customerIdentifier;
        $json['emailSubject']       = $this->emailSubject;
        $json['externalRefID']      = $this->externalRefID;
        $json['message']            = $this->message;
        $json['recipient']          = $this->recipient;
        $json['sendEmail']          = $this->sendEmail;
        $json['sender']             = $this->sender;
        $json['utid']               = $this->utid;
        $json['notes']              = $this->notes;
        $json['etid']               = $this->etid;

        return $json;
    }
}
