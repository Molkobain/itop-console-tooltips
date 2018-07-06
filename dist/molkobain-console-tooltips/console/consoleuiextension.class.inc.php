<?php
/**
 * Copyright (c) 2015 - 2018 Molkobain.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Molkobain\iTop\Console\Tooltips\Extension;

use utils;
use MetaModel;
use DBObjectSet;
use WebPage;
use iApplicationUIExtension;

/**
 * Class ConsoleUIExtension
 *
 * @package Molkobain\iTop\Console\Tooltips\Extension
 */
class ConsoleUIExtension implements iApplicationUIExtension
{
    const DEFAULT_ENABLED = true;
    const DEFAULT_DECORATION_CLASS = 'mct-decoration-question';

    /**
     * @inheritdoc
     */
    public function OnDisplayProperties($oObject, WebPage $oPage, $bEditMode = false)
    {
        // Check if enabled
        if(MetaModel::GetConfig()->GetModuleSetting('molkobain-console-tooltips', 'enabled', static::DEFAULT_ENABLED) === false)
        {
            return void;
        }

        // Get decoration class
        $sDecorationClass = MetaModel::GetConfig()->GetModuleSetting('molkobain-console-tooltips', 'decoration_class', static::DEFAULT_DECORATION_CLASS);

        // Add default decoration style
        $oPage->add_linked_stylesheet(utils::GetAbsoluteUrlModulesRoot().'molkobain-console-tooltips/web/css/default-theme.css');
        $oPage->add_linked_stylesheet(utils::GetAbsoluteUrlModulesRoot().'molkobain-console-tooltips/web/lib/fontawesome-5.0.6/css/fontawesome-all.min.css');

        // Add decoration to labels
        $oPage->add_ready_script(
<<<EOF
    $('.ui-tabs-panel .label > span[title!=""]').each(function(){
        // Create decoration
        var oDecorationElem = $('<span></span>')
            .addClass('mct-decoration')
            .addClass('$sDecorationClass');
        
        // Create tooltip
        oDecorationElem.qtip( { content: $(this).attr('title'), show: 'mouseover', hide: 'mouseout', style: { name: 'dark', tip: 'bottomCenter' }, position: { corner: { target: 'topCenter', tooltip: 'bottomCenter' }, adjust: { y: -15}} } );
        
        // Remove native title
        $(this).attr('title', '');
								
        
        // Attach to label
        oDecorationElem.appendTo($(this));
    });
EOF
        );

        return void;
    }

    /**
     * @inheritdoc
     */
    public function OnDisplayRelations($oObject, WebPage $oPage, $bEditMode = false)
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function OnFormSubmit($oObject, $sFormPrefix = '')
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function OnFormCancel($sTempId)
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function EnumUsedAttributes($oObject)
    {
        return array();
    }

    /**
     * @inheritdoc
     */
    public function GetIcon($oObject)
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function GetHilightClass($oObject)
    {
        // Possible return values are:
        // HILIGHT_CLASS_CRITICAL, HILIGHT_CLASS_WARNING, HILIGHT_CLASS_OK, HILIGHT_CLASS_NONE
        return HILIGHT_CLASS_NONE;
    }

    /**
     * @inheritdoc
     */
    public function EnumAllowedActions(DBObjectSet $oSet)
    {
        // No action
        return array();
    }
}
