<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Exception;

/**
 * Is thrown when carrier is invalid
 */
class CarrierConstraintException extends CarrierException
{
    /**
     * Thrown when provided carrier id is not valid
     */
    public const INVALID_ID = 10;

    /**
     * Thrown when carrier reference id is not valid
     */
    public const INVALID_REFERENCE_ID = 20;

    /**
     * Thrown when carrier name is not valid
     */
    public const INVALID_NAME = 30;

    /**
     * Thrown when carrier grade is not valid
     */
    public const INVALID_GRADE = 40;

    /**
     * Thrown when carrier tracking url is not valid
     */
    public const INVALID_TRACKING_URL = 50;

    /**
     * Thrown when carrier position is not valid
     */
    public const INVALID_POSITION = 60;

    /**
     * Thrown when carrier delay is not valid
     */
    public const INVALID_DELAY = 70;
}
