<?php

namespace Pronamic\WordPress\Pay\Extensions\RestrictContentPro;

use Pronamic\WordPress\Pay\Core\PaymentMethods;
use Pronamic\WordPress\Pay\Plugin;

/**
 * Title: Restrict Content Pro Credit Card gateway
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author  Reüel van der Steege
 * @version 1.0.0
 * @since   1.0.0
 */
class CreditCardGateway extends Gateway {
	/**
	 * Gateway id.
	 */
	protected $id = 'pronamic_pay_credit_card';

	/**
	 * Payment method.
	 *
	 * @var string $payment_method
	 */
	protected $payment_method = PaymentMethods::CREDIT_CARD;

	/**
	 * Construct and initialize Credit Card gateway
	 */
	public function init() {
		global $rcp_options;

		parent::init();

		// Recurring subscription payments
		$config_option = $this->id . '_config_id';

		if ( ! isset( $rcp_options[ $config_option ] ) ) {
			return;
		}

		$gateway = Plugin::get_gateway( $rcp_options[ $config_option ] );

		if ( $gateway && $gateway->supports( 'recurring_credit_card' ) ) {
			$this->supports = array(
				'recurring',
			);
		}
	}
}
