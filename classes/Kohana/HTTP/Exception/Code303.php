<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception_Redirect as HTTP_Exception_Redirect;

class Code303 extends HTTP_Exception_Redirect {

	/**
	 * @var   integer    HTTP 303 See Other
	 */
	protected $_code = 303;

}
