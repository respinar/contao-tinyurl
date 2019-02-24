<?php

$GLOBALS['TL_DCA']['tl_terminal42_shortlink'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'enableVersioning'            => true,
        'onsubmit_callback' => array
        (
//            array('tl_terminal42_shortlink', 'storeDateAdded')
        ),
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('target DESC'),
            'flag'                    => 1,
            'panelLayout'             => 'filter;search,limit',
        ),
        'label' => array
        (
            'fields'                  => array('alias', 'target'),
            'showColumns'             => true,
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            ),
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_terminal42_shortlink']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.svg'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_terminal42_shortlink']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.svg'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_terminal42_shortlink']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.svg',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'toggle' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_terminal42_shortlink']['toggle'],
                'icon'                => 'visible.svg',
                'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
                'haste_ajax_operation'  => [
                    'field'     => 'published',
                    'options'    => [
                        [
                            'value'     => '',
                            'icon'      => 'invisible.gif'
                        ],
                        [
                            'value'     => '1',
                            'icon'      => 'visible.gif'
                        ]
                    ]
                ]
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_terminal42_shortlink']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.svg'
            ),
        ),
    ),

    // Palettes
    'palettes' => array
    (
        'default'                     => '{url_legend},target,alias;{publishing_legend},published',
    ),

    // Fields
    'fields' => array
    (
        'target' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_terminal42_shortlink']['target'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'dcaPicker'=>true, 'addWizardClass'=>false, 'tl_class'=>'clr'),
        ),
        'alias' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_terminal42_shortlink']['alias'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'url', 'unique'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
        ),
        'published' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_terminal42_shortlink']['published'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
        ),
    ),
);
