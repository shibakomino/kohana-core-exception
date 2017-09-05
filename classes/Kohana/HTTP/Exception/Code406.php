<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;

class Code406 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 406 Not Acceptable
	 */
	protected $_code = 406;

}
