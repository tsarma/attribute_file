<?php

/**
 * This file is part of MetaModels/attribute_file.
 *
 * (c) 2012-2015 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage AttributeFile
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_file/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

use MetaModels\Attribute\File\AttributeTypeFactory;
use MetaModels\Attribute\Events\CreateAttributeFactoryEvent;
use MetaModels\Attribute\File\Subscriber;
use MetaModels\Events\MetaModelsBootEvent;
use MetaModels\MetaModelsEvents;

return array
(
    MetaModelsEvents::ATTRIBUTE_FACTORY_CREATE => array(
        function (CreateAttributeFactoryEvent $event) {
            $factory = $event->getFactory();
            $factory->addTypeFactory(new AttributeTypeFactory());
        }
    ),
    MetaModelsEvents::SUBSYSTEM_BOOT_BACKEND => array(
        function (MetaModelsBootEvent $event) {
            new Subscriber($event->getServiceContainer());
        }
    ),
);