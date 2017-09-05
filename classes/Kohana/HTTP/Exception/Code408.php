<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;

class Code408 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 408 Request Timeout
	 */
	protected $_code = 408;

}
