<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_BackendReindex
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\BackendReindex\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Framework\Indexer\IndexerRegistry;

/**
 * Class Indexer
 * @package Mageplaza\BackendReindex\Controller\Adminhtml
 */
abstract class Indexer extends Action
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'Mageplaza_BackendReindex::reindex';

    /**
     * @var IndexerRegistry
     */
    protected $indexerRegistry;

    /**
     * Reindex constructor.
     *
     * @param Action\Context $context
     * @param IndexerRegistry $indexerRegistry
     */
    public function __construct(
        Action\Context $context,
        IndexerRegistry $indexerRegistry
    ) {
        $this->indexerRegistry = $indexerRegistry;

        parent::__construct($context);
    }
}
