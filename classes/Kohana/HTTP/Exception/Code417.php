<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code417 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 417 Expectation Failed
	 */
	protected $_code = 417;

}
