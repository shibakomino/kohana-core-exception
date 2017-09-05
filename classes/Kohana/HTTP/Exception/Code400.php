<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;

class Code400 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 400 Bad Request
	 */
	protected $_code = 400;

}
