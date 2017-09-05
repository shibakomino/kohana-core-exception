<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code415 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 415 Unsupported Media Type
	 */
	protected $_code = 415;

}
