<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code503 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 503 Service Unavailable
	 */
	protected $_code = 503;

}
