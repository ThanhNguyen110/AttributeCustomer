<?php

namespace AHT\AttributeCustomer\Model\Source;

class CompanyTypeDropdown extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['label' => __('-- Please select your Company Type --'), 'value' => 'default'],
                ['label' => __('CBD Manufacturer'), 'value' => 'manufacturer'],
                ['label' => __('CBD Brand and Marketing Company'), 'value' => 'brand-and-marketing'],
                ['label' => __('CBD Extractor'), 'value' => 'extractor'],
                ['label' => __('Other'), 'value' => 'other']
            ];
        }
        return $this->_options;
    }
}
