<?php
namespace FIXTURE\TestExtension\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 John Doe <mail@typo3.com>, TYPO3
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Child3
 */
class Child3 extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * password
	 *
	 * @var string
	 */
	protected $password = '';

	/**
	 * imageProperty
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $imageProperty = NULL;

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the password
	 *
	 * @return string $password
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Sets the password
	 *
	 * @param string $password
	 * @return void
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * Returns the imageProperty
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageProperty
	 */
	public function getImageProperty() {
		return $this->imageProperty;
	}

	/**
	 * Sets the imageProperty
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageProperty
	 * @return void
	 */
	public function setImageProperty(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageProperty) {
		$this->imageProperty = $imageProperty;
	}

}