<?php

namespace Pronamic\WordPress\Pay\Extensions\RestrictContentPro;

use Pronamic\WordPress\Pay\Core\PaymentMethods;

/**
 * Title: Restrict Content Pro iDEAL gateway
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author  Reüel van der Steege
 * @version 1.0.0
 * @since   1.0.0
 */
class IDealGateway extends Gateway {
	/**
	 * Gateway id.
	 */
	protected $id = 'pronamic_pay_ideal';

	/**
	 * Payment method.
	 *
	 * @var string $payment_method
	 */
	protected $payment_method = PaymentMethods::IDEAL;
}
