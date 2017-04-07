<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Twofour.Inventory',
            'Inventory',
            [
                'Product' => 'list, show, new, create, edit, update, delete',
                'Category' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Product' => 'create, update, delete',
                'Category' => 'create, update, delete'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					inventory {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_inventory.svg
						title = LLL:EXT:inventory/Resources/Private/Language/locallang_db.xlf:tx_inventory_domain_model_inventory
						description = LLL:EXT:inventory/Resources/Private/Language/locallang_db.xlf:tx_inventory_domain_model_inventory.description
						tt_content_defValues {
							CType = list
							list_type = inventory_inventory
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
