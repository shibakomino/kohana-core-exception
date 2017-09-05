<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception_Redirect as HTTP_Exception_Redirect;

class Code301 extends HTTP_Exception_Redirect {

	/**
	 * @var   integer    HTTP 301 Moved Permanently
	 */
	protected $_code = 301;

}
