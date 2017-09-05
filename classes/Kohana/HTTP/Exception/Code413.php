<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code413 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 413 Request Entity Too Large
	 */
	protected $_code = 413;

}
