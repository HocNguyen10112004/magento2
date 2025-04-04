<?php
namespace Magento\Integration\Controller\Adminhtml\Integration\NewAction;

/**
 * Interceptor class for @see \Magento\Integration\Controller\Adminhtml\Integration\NewAction
 */
class Interceptor extends \Magento\Integration\Controller\Adminhtml\Integration\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Psr\Log\LoggerInterface $logger, \Magento\Integration\Api\IntegrationServiceInterface $integrationService, \Magento\Integration\Api\OauthServiceInterface $oauthService, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Integration\Helper\Data $integrationData, \Magento\Framework\Escaper $escaper, \Magento\Integration\Model\ResourceModel\Integration\Collection $integrationCollection, ?\Magento\Framework\Url\Validator $urlValidator = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $logger, $integrationService, $oauthService, $jsonHelper, $integrationData, $escaper, $integrationCollection, $urlValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
