<?php namespace ErnestWisniewski\LaravelSofort;

use Sofort\SofortLib\Billcode;

class Sofort {

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
        $this->private_key = $config_key;
    }

    public function billcode($config_key = null)
    {
        if (!$config_key) {
            $config_key = $this->private_key;
        }

        return new Billcode($config_key);
    }
}