<?php
namespace V4U\DetectDevice\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
* Class DetectDevice
*/
class DetectDevice implements OptionSourceInterface
{
    /**
     * Array
     *
     * @var array
     */
    protected $options;
    /**
     * Array
     *
     * @return array
     */
    public function toOptionArray()
    {
        $typesOfStatus = [
            "Web"    => "Web",
            "iPod"   => "iPod",
            "iPhone" => "iPhone",
            "iPad"   => "iPad",
            "Android"=> "Android"
        ];
        $options = [];

        foreach($typesOfStatus as $key => $typeOfStatus){
            $options[] = [
                'label' => $typeOfStatus,
                'value' => $key
            ];
        }
    
        return $options;
    }
}