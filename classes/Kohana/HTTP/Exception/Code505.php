<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;


class Code505 extends HTTP_Exception {

	/**
	 * @var   integer    HTTP 505 HTTP Version Not Supported
	 */
	protected $_code = 505;

}
