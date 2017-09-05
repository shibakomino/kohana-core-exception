<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception as HTTP_Exception;

class Code404 extends HTTP_Exception {

  /**
   * @var   integer    HTTP 404 Not Found
   */
  protected $_code = 404;

}
