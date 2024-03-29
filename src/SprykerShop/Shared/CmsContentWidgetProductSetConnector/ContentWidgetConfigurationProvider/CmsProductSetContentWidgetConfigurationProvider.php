<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Shared\CmsContentWidgetProductSetConnector\ContentWidgetConfigurationProvider;

use Spryker\Shared\CmsContentWidget\Dependency\CmsContentWidgetConfigurationProviderInterface;

class CmsProductSetContentWidgetConfigurationProvider implements CmsContentWidgetConfigurationProviderInterface
{
    /**
     * @var string
     */
    public const FUNCTION_NAME = 'product_set';

    /**
     * @return string
     */
    public function getFunctionName()
    {
        return static::FUNCTION_NAME;
    }

    /**
     * @return array<string>
     */
    public function getAvailableTemplates()
    {
        return [
            CmsContentWidgetConfigurationProviderInterface::DEFAULT_TEMPLATE_IDENTIFIER => '@CmsContentWidgetProductSetConnector/_product-set/product-set-cms-content-widget.twig',
        ];
    }

    /**
     * @return string
     */
    public function getUsageInformation()
    {
        return "{{ product_set(['set_key1', 'set_key2']) }}, to use different template {{ product_set(['set_key1', 'set_key2'], 'default') }}";
    }
}
