<?php

/**
 * Interface Hotel
 */
interface Hotel
{

	/**
	 * Method return name of the Hotel
	 * @return string
	 */
	public function getTitle();

	/**
	 * Method return type of the Hotel. Possible values hotel or appartment
	 * @return string
	 */
	public function getType();

	/**
	 * Method return amount of stars for the Hotel. If no stars return null
	 * @return int
	 */
	public function getStars();

	/**
	 * Method return amount of stars for the Hotel. If no stars return null
	 * @return int
	 */
	public function getStars();

	/**
	 * Method return boolean value is this hotel preferred
	 * @return bool
	 */
	public function isPreferred();

	/**
	 * Method return top facilities. Located near title of the hotel
	 * @return array
	 */
	public function getTopFacilities();

	/**
	 * Method return Address object. This is address of the hotel (228 West 47th Street, New York, NY 10036, United States of America)
	 * @return Address
	 */
	public function getAddress();

	/**
	 * Method return closets attraction place. For example (250 m from subway station)
	 * @return string
	 */
	public function getClosestAttraction();

	/**
	 * Method return array of picture objects. Should return link and picture encoded to base64
	 * @return Picture[]
	 */
	public function getPictures();

	/**
	 * Method return array of rating object. When user hover on overall rating it shows splitting by types
	 * @return Rating
	 */
	public function getRating();

	/**
	 * Method return array of rating object.
	 * @return Rating
	 */
	public function getLocation();
}
