<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception_Expected as HTTP_Exception_Expected;

class Code304 extends HTTP_Exception_Expected {

	/**
	 * @var   integer    HTTP 304 Not Modified
	 */
	protected $_code = 304;

}
