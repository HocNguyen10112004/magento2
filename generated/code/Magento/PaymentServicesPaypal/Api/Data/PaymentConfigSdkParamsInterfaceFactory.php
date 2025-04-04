<?php
namespace Magento\PaymentServicesPaypal\Api\Data;

/**
 * Factory class for @see \Magento\PaymentServicesPaypal\Api\Data\PaymentConfigSdkParamsInterface
 */
class PaymentConfigSdkParamsInterfaceFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\PaymentServicesPaypal\\Api\\Data\\PaymentConfigSdkParamsInterface')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\PaymentServicesPaypal\Api\Data\PaymentConfigSdkParamsInterface
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
