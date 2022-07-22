<?php


namespace MichaelB\ShipStation\Models;


class Address extends BaseModel
{
        /**
         * @var string
         */
        protected $name;

        /**
         * @var string
         */
        protected $company;

        /**
         * @var string
         */
        protected $street1;

        /**
         * @var string
         */
        protected $street2;

        /**
         * @var string
         */
        protected $street3;

        /**
         * @var string
         */
        protected $city;

        /**
         * @var string
         */
        protected $state;

        /**
         * @var string
         */
        protected $postalCode;

        /**
         * @var string
         */
        protected $country;

        /**
         * @var string
         */
        protected $phone;

        /**
         * @var boolean
         */
        protected $residential;

        /**
         * @var boolean
         */
        protected $addressVerified;

	/**
	 * @param $value
	 */
	protected function setResidentialAttribute($value)
	{
		if ($value) {
			$this->residential = 'true';
		} else {
			$this->residential = 'false';
		}
	}

	/**
	 * @param $value
	 */
	protected function setAddressVerifiedAttribute($value)
	{
		if ( 1 < strlen( $value ) ) {
			$this->addressVerified = $value;
		} elseif ( $value ) {
			$this->addressVerified = 'true';
		} else {
			$this->addressVerified = 'false';
		}
	}

}
