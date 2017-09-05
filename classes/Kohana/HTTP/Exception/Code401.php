<?php

namespace Kohana\HTTP\Exception;

use \HTTP_Exception_Expected as HTTP_Exception_Expected;
use \Kohana_Exception as Kohana_Exception;

class Code401 extends HTTP_Exception_Expected {

	/**
	 * @var   integer    HTTP 401 Unauthorized
	 */
	protected $_code = 401;

	/**
	 * Specifies the WWW-Authenticate challenge.
	 *
	 * @param  string  $challenge  WWW-Authenticate challenge (eg `Basic realm="Control Panel"`)
	 */
	public function authenticate($challenge = NULL)
	{
		if ($challenge === NULL)
			return $this->headers('www-authenticate');

		$this->headers('www-authenticate', $challenge);

		return $this;
	}

	/**
	 * Validate this exception contains everything needed to continue.
	 *
	 * @throws Kohana_Exception
	 * @return bool
	 */
	public function check()
	{
		if ($this->headers('www-authenticate') === NULL)
			throw new Kohana_Exception('A \'www-authenticate\' header must be specified for a HTTP 401 Unauthorized');

		return TRUE;
	}

}
