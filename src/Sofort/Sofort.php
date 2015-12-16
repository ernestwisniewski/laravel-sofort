<?php namespace ErnestWisniewski\LaravelSofort;

use Sofort\SofortLib\Billcode;
use Sofort\SofortLib\BillcodeDetails;
use Sofort\SofortLib\Notification;
use Sofort\SofortLib\Paycode;
use Sofort\SofortLib\PaycodeDetails;
use Sofort\SofortLib\Refund;
use Sofort\SofortLib\Sofortueberweisung;
use Sofort\SofortLib\TransactionData;

class Sofort
{

    /**
     * The private Sofort key
     * @var string
     */
    protected $config_key;

    /**
     * Constructor
     * @param string $config_key
     */
    public function __construct($config_key)
    {
        $this->config_key = $config_key;
    }

    /**
     * @param null $config_key
     * @return Billcode
     */
    public function billcode($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->config_key;
        }

        return new Billcode($config_key);
    }

    /**
     * @param null $config_key
     * @return BillcodeDetails
     */
    public function billcodeDetails($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->config_key;
        }

        return new BillcodeDetails($config_key);
    }

    /**
     * @param null $config_key
     * @return Paycode
     */
    public function paycode($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->config_key;
        }

        return new Paycode($config_key);
    }

    /**
     * @param null $config_key
     * @return PaycodeDetails
     */
    public function paycodeDetails($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->config_key;
        }

        return new PaycodeDetails($config_key);
    }

    /**
     * @param null $config_key
     * @return Refund
     */
    public function refund($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->config_key;
        }

        return new Refund($config_key);
    }

    /**
     * @param null $config_key
     * @return Sofortueberweisung
     */
    public function sofortueberweisung($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->config_key;
        }

        return new Sofortueberweisung($config_key);
    }

    /**
     * @param null $config_key
     * @return Notification
     */
    public function notification($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->config_key;
        }

        return new Notification($config_key);
    }

    /**
     * @param null $config_key
     * @return TransactionData
     */
    public function transactionData($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->config_key;
        }

        return new TransactionData($config_key);
    }
}