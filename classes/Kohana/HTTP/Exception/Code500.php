<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code500 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 500 Internal Server Error
	 */
	protected $_code = 500;

}
