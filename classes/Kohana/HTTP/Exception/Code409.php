<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code409 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 409 Conflict
	 */
	protected $_code = 409;

}
