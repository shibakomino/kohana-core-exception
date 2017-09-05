<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code410 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 410 Gone
	 */
	protected $_code = 410;

}
