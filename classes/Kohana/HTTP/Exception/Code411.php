<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code411 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 411 Length Required
	 */
	protected $_code = 411;

}
