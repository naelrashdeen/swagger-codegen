<?php
/*
* Order
*/
namespace Model;

use Symfony\Component\Validator\Constraints as Assert;

class Order
{

	/**
	* @Assert\Type("long")
	 * @var int
	 */
	protected $id;

	/**
	* @Assert\Type("long")
	 * @var int
	 */
	protected $pet_id;

	/**
	* @Assert\Type("integer")
	 * @var int
	 */
	protected $quantity;

	/**
	* @Assert\DateTime()
	 * @var \DateTime
	 */
	protected $ship_date;

	/**
	 * Order Status
	* @Assert\Type("string")
	 * @var string
	 */
	protected $status;

	/**
	* @Assert\Type("boolean")
	 * @var bool
	 */
	protected $complete;





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
	 * @return int $pet_id
	 */

	public function getPetId()
	{
		return $this->pet_id;
	}

	/**
	 * @param @var int
	 */

	public function setPetId($pet_id)
	{
		$this->pet_id = $pet_id
	}


	/**
	 * @return int $quantity
	 */

	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * @param @var int
	 */

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity
	}


	/**
	 * @return \DateTime $ship_date
	 */

	public function getShipDate()
	{
		return $this->ship_date;
	}

	/**
	 * @param @var \DateTime
	 */

	public function setShipDate($ship_date)
	{
		$this->ship_date = $ship_date
	}


	/**
	 * @return string $status
	 */

	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param @var string
	 */

	public function setStatus($status)
	{
		$this->status = $status
	}


	/**
	 * @return bool $complete
	 */

	public function getComplete()
	{
		return $this->complete;
	}

	/**
	 * @param @var bool
	 */

	public function setComplete($complete)
	{
		$this->complete = $complete
	}

}

	
