<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code412 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 412 Precondition Failed
	 */
	protected $_code = 412;

}
