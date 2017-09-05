<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception_Redirect as HTTP_Exception_Redirect;

class Code302 extends HTTP_Exception_Redirect {

	/**
	 * @var   integer    HTTP 302 Found
	 */
	protected $_code = 302;

}
