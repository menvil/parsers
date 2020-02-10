<?php

/**
 * Interface Hotel
 * https://www.booking.com/hotel/us/edison-triumph-group.html
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
	 * Method return header of description. (Stay in the heart of New York)
	 * @return string
	 */
	public function getHeaderDescription();

	/**
	 * Method return description.
	 * @return string
	 */
	public function getDescription();

	/**
	 * Method property highlights (Guests love etc...)
	 * @return array
	 */
	public function getPropertyHightlights();

	/**
	 * Method return array of the room object for property
	 * @return Room[]
	 */
	public function getRooms();

	/**
	 * Method return hotelier info. (An Inside Look at Hotel Edison Times Square)
	 * @return string
	 */
	public function getHotelierInfo();

	/**
	 * Method return surroundings of the hotel. Multi nested level array with section name and surrounding name with distance
	 * ['What's nearby' => ['Richard Rodgers Theatre'=>'0.1 km', 'Minskoff Theatre' => '0.2 km']]
	 *
	 * @return array
	 */
	public function getSurroundings();

	/**
	 * Method return attractions of the hotel.
	 * @return Attraction[]
	 */
	public function getAttractions();

	/**
	 * Method return array of restaurants of the hotel
	 * @return array
	 */
	public function getRestaurants();

	/**
	 * Method return facilities of the hotel. Multi nested level array with section name and facility name with options
	 * ['Cleaning Services' =>
	 * 		[
	 * 			['name'=>'Dry cleaning', 'option'=>'paid'],
	 * 			['name'=>'Ironing service', 'option'=>'free']
	 * 		]
	 * ]
	 *
	 * @return array
	 */
	public function getFacilities();


	/**
	 * Method return array of rules of the hotel
	 * @return array
	 */
	public function getRules();

	/**
	 * Method return final notes of the hotel (The fine print);
	 * @return string
	 */
	public function getNotes();

	/**
	 * Method return FAQs. Return array of FAQs of the hotel
	 * @return Faq[]
	 */
	public function getFaqs();
}
