<?php
/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_SizeChart
 * @copyright   Copyright (c) 2023 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace M2Commerce\SizeChart\Setup\Patch\Data;

use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
 * Class SizeChartAttribute
 */
class SizeChartAttribute implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory          $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $isExist = $this->eavSetupFactory->create()->getAttribute(
            Product::ENTITY,
            "size_chart_html"
        );
        if (!$isExist) {
            $eavSetup->addAttribute(Product::ENTITY, 'size_chart_html', [
                'type' => 'text',
                'label' => 'Size Chart',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
                'input' => 'textarea',
                'visible' => true,
                'note' => 'Add size chart content to show on PDP',
                'used_in_product_listing' => true,
                'user_defined' => true,
                'required' => false,
                'group' => 'General',
                'is_visible_on_front' => 1
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}
