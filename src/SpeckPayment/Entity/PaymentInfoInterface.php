<?php

namespace SpeckPayment\Entity;

interface PaymentInfoInterface
{
    /**
     * Set the status of payment, these are states such as
     * Pending, Settled, Void, Cleared, NSF, Canceled
     * 
     * @param String $status
     * @return PaymentInfoInterface
     */
    public function setPaymentStatus($status);

    /**
     * Get the status of payment
     * 
     * @return String 
     */
    public function getPaymentStatus();

    /**
     * Set the amount tendered
     * 
     * @param Float $amount
     * @return PaymentInfoInterface
     */
    public function setAmount($amount);
    
    /**
     * Get the amount collected
     * 
     * @return Float
     */
    public function getAmount();
    
    /**
     * Set the currency of payment
     *     
     * @param String $currency
     * @return PaymentInfoInterface
     */
    public function setCurrency($currency);

    /**
     * Get the currency of payment
     * @return String
     */
    public function getCurrency();

}
