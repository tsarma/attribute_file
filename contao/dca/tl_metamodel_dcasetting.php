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
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_file/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['attr_id']['file'] = array
(
    'presentation' => array(
        'tl_class',
    ),
    'functions'  => array(
        'mandatory',
        'file_widgetMode'
    )
);

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['fields']['file_widgetMode'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_metamodel_dcasetting']['file_widgetMode'],
    'exclude'                 => true,
    'inputType'               => 'radio',
    'options'                 => array('normal', 'downloads', 'gallery'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_metamodel_dcasetting']['file_widgetModes'],
    'eval'                    => array(
        'default'             => 'normal',
        'chosen'              => true,
    )
);
