<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code501 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 501 Not Implemented
	 */
	protected $_code = 501;

}
