<?php

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
 }

 class WC_Gateway_Faspay_CreditCard_10 extends Faspay_Payment_Gateway {
    var $sub_id = 'faspay_creditcard_mid_10';
        public function __construct() {
	    parent::__construct();
        $this->method_title = 'Faspay - CreditCard 10';
	    $this->payment_method = '500';
	    $this->cc_type = 'mid_10';
	    $this->pay_type = '1';
	    $this->reserve2 = '30_days';
	    //payment gateway logo
	    //$this->icon = plugins_url('/assets/credit.png', dirname(__FILE__) );
	}
 }

?>
