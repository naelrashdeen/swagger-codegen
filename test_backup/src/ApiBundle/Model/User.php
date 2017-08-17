<?php
/*
* User
*/
namespace Model;

use Symfony\Component\Validator\Constraints as Assert;

class User
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
	protected $username;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $first_name;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $last_name;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $email;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $password;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $phone;

	/**
	 * User Status
	* @Assert\Type("integer")
	 * @var int
	 */
	protected $user_status;





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
	 * @return string $username
	 */

	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * @param @var string
	 */

	public function setUsername($username)
	{
		$this->username = $username
	}


	/**
	 * @return string $first_name
	 */

	public function getFirstName()
	{
		return $this->first_name;
	}

	/**
	 * @param @var string
	 */

	public function setFirstName($first_name)
	{
		$this->first_name = $first_name
	}


	/**
	 * @return string $last_name
	 */

	public function getLastName()
	{
		return $this->last_name;
	}

	/**
	 * @param @var string
	 */

	public function setLastName($last_name)
	{
		$this->last_name = $last_name
	}


	/**
	 * @return string $email
	 */

	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param @var string
	 */

	public function setEmail($email)
	{
		$this->email = $email
	}


	/**
	 * @return string $password
	 */

	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * @param @var string
	 */

	public function setPassword($password)
	{
		$this->password = $password
	}


	/**
	 * @return string $phone
	 */

	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param @var string
	 */

	public function setPhone($phone)
	{
		$this->phone = $phone
	}


	/**
	 * @return int $user_status
	 */

	public function getUserStatus()
	{
		return $this->user_status;
	}

	/**
	 * @param @var int
	 */

	public function setUserStatus($user_status)
	{
		$this->user_status = $user_status
	}

}

	
