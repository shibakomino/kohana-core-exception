<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception_Redirect as HTTP_Exception_Redirect;

class Code307 extends HTTP_Exception_Redirect {

	/**
	 * @var   integer    HTTP 307 Temporary Redirect
	 */
	protected $_code = 307;

}
