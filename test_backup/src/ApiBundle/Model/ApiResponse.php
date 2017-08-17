<?php
/*
* ApiResponse
*/
namespace Model;

use Symfony\Component\Validator\Constraints as Assert;

class ApiResponse
{

	/**
	* @Assert\Type("integer")
	 * @var int
	 */
	protected $code;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $type;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $message;





	/**
	 * @return int $code
	 */

	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @param @var int
	 */

	public function setCode($code)
	{
		$this->code = $code
	}


	/**
	 * @return string $type
	 */

	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param @var string
	 */

	public function setType($type)
	{
		$this->type = $type
	}


	/**
	 * @return string $message
	 */

	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * @param @var string
	 */

	public function setMessage($message)
	{
		$this->message = $message
	}

}

	
