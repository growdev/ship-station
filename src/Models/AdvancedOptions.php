<?php

namespace MichaelB\ShipStation\Models;


class AdvancedOptions extends BaseModel
{
    /**
     * @var int
     */
    public $warehouseId;

    /**
     * @var boolean
     */
    public $nonMachinable;

    /**
     * @var boolean
     */
    public $saturdayDelivery;

    /**
     * @var boolean
     */
    public $containsAlcohol;

    /**
     * @var int
     */
    public $storeId;

    /**
     * @var string
     */
    public $customField1;

    /**
     * @var string
     */
    public $customField2;

    /**
     * @var string
     */
    public $customField3;

    /**
     * @var string
     */
    public $source;

    /**
     * @var boolean
     */
    public $mergedOrSplit;

    /**
     * @values int
     * @var array
     */
    public $mergedIds;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $billToParty;

    /**
     * @var string
     */
    public $billToAccount;

    /**
     * @var string
     */
    public $billToPostalCode;

    /**
     * @var string
     */
    public $billToCountryCode;

	protected function setNonMachinableAttribute($value)
	{
		if ($value) {
			$this->nonMachinable = 'true';
		} else {
			$this->nonMachinable = 'false';
		}
	}

	protected function setSaturdayDeliveryAttribute($value)
	{
		if ($value) {
			$this->saturdayDelivery = 'true';
		} else {
			$this->saturdayDelivery = 'false';
		}
	}

	protected function setContainsAlcoholAttribute($value)
	{
		if ($value) {
			$this->containsAlcohol = 'true';
		} else {
			$this->containsAlcohol = 'false';
		}
	}

	protected function setMergedOrSplitAttribute($value)
	{
		if ($value) {
			$this->mergedOrSplit = 'true';
		} else {
			$this->mergedOrSplit = 'false';
		}
	}
}
