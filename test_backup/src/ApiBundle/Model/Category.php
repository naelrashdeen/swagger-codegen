<?php
/*
* Category
*/
namespace Model;

use Symfony\Component\Validator\Constraints as Assert;

class Category
{

	/**
	* @Assert\Type("long")
	 * @var int
	 */
	protected $id;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $name;





	/**
	 * @return int $id
	 */

	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param @var int
	 */

	public function setId($id)
	{
		$this->id = $id
	}


	/**
	 * @return string $name
	 */

	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param @var string
	 */

	public function setName($name)
	{
		$this->name = $name
	}

}

	
