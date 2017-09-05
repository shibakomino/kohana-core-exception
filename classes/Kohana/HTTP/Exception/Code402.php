<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;

class Code402 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 402 Payment Required
	 */
	protected $_code = 402;

}
