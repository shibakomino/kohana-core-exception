<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception_Redirect as HTTP_Exception_Redirect;

class Code300 extends HTTP_Exception_Redirect {

	/**
	 * @var   integer    HTTP 300 Multiple Choices
	 */
	protected $_code = 300;

}
