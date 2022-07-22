<?php


namespace MichaelB\ShipStation\Models;


class OrderItem extends BaseModel
{
    protected $attributes = [
        'orderItemId',
        'lineItemKey',
        'sku',
        'name',
        'imageUrl',
        'weight',
        'quantity',
        'unitPrice',
        'taxAmount',
        'shippingAmount',
        'warehouseLocation',
        'options',
        'productId',
        'fulfillmentSku',
        'adjustment',
        'upc',
        'createDate',
        'modifyDate'
    ];

    protected function setWeightAttribute($value)
    {
        if ($value instanceof Weight) {
            $this->weight = $value;
        } else {
            $this->weight = new Weight($value);
        }
    }

	protected function setAdjustmentAttribute($value)
	{
		if ( 'true' === $value ) {
			$this->adjustment = 'true';
		} else {
			$this->adjustment = 'false';
		}
	}
}