<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Twofour.SimpleBlog',
            'List',
            [
                'Blog' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Blog' => 'create, update, delete'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					list {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_list.svg
						title = LLL:EXT:simple_blog/Resources/Private/Language/locallang_db.xlf:tx_simple_blog_domain_model_list
						description = LLL:EXT:simple_blog/Resources/Private/Language/locallang_db.xlf:tx_simple_blog_domain_model_list.description
						tt_content_defValues {
							CType = list
							list_type = simpleblog_list
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
