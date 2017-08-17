<?php
/*
* Pet
*/
namespace Model;

use Symfony\Component\Validator\Constraints as Assert;

class Pet
{

	/**
	* @Assert\Type("long")
	 * @var int
	 */
	protected $id;

	/**
	* @Assert\Type("\Model\Category")
	 * @var \Model\Category
	 */
	protected $category;

	/**
	* @Assert\Type("string")
	 * @var string
	 */
	protected $name;

	/**
	* @Assert\All({
	* 	@Assert\Type("string")
	* })
	 * @var string[]
	 */
	protected $photo_urls;

	/**
	* @Assert\All({
	* 	@Assert\Type("\Model\Tag")
	* })
	 * @var \Model\Tag[]
	 */
	protected $tags;

	/**
	 * pet status in the store
	* @Assert\Type("string")
	 * @var string
	 */
	protected $status;





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
	 * @return \Model\Category $category
	 */

	public function getCategory()
	{
		return $this->category;
	}

	/**
	 * @param @var \Model\Category
	 */

	public function setCategory($category)
	{
		$this->category = $category
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


	/**
	 * @return string[] $photo_urls
	 */

	public function getPhotoUrls()
	{
		return $this->photo_urls;
	}

	/**
	 * @param @var string[]
	 */

	public function setPhotoUrls($photo_urls)
	{
		$this->photo_urls = $photo_urls
	}


	/**
	 * @return \Model\Tag[] $tags
	 */

	public function getTags()
	{
		return $this->tags;
	}

	/**
	 * @param @var \Model\Tag[]
	 */

	public function setTags($tags)
	{
		$this->tags = $tags
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

}

	
