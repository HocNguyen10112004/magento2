<?php
namespace Magento\QuoteGraphQl\Model\Resolver\CreateGuestCart;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\CreateGuestCart
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\CreateGuestCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\CreateEmptyCartForGuest $createEmptyCartForGuest, \Magento\Quote\Model\MaskedQuoteIdToQuoteIdInterface $maskedQuoteIdToQuoteId, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\QuoteGraphQl\Model\Cart\ValidateMaskedQuoteId $validateMaskedQuoteId)
    {
        $this->___init();
        parent::__construct($createEmptyCartForGuest, $maskedQuoteIdToQuoteId, $cartRepository, $validateMaskedQuoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
