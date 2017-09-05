<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;

class Code403 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 403 Forbidden
	 */
	protected $_code = 403;

}
