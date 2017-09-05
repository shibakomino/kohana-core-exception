<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code414 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 414 Request-URI Too Long
	 */
	protected $_code = 414;

}
