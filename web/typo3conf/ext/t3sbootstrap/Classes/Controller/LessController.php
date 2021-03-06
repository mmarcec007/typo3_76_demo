<?php
namespace T3SBS\T3sbootstrap\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use \TYPO3\CMS\Core\Messaging\AbstractMessage;


/**
 * Plugin class - Less controller
 *
 */
class LessController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Extension key.
	 *
	 */
	public $extKey = 't3sbootstrap';


	/**
	 * Bootswatch array
	 *
	 */
	public $bootswatch = [
		'cerulean' => 'Cerulean',
		'cosmo' => 'Cosmo',
		'cyborg' => 'Cyborg',
		'darkly' => 'Darkly',
		'flatly' => 'Flatly',
		'journal' => 'Journal',
		'lumen' => 'Lumen',
		'paper' => 'Paper',
		'readable' => 'Readable',
		'sandstone' => 'Sandstone',
		'simplex' => 'Simplex',
		'slate' => 'Slate',
		'spacelab' => 'Spacelab',
		'superhero' => 'Superhero',
		'united' => 'United',
		'yeti' => 'Yeti',
	];


	/**
	 * Shows the form
	 * @param array $args
	 *
	 * @return string
	 */
	public function indexAction($args = NULL) {

		$this->view->assignMultiple([
			'args' => $this->request->getArguments(),
			'copyExist' => self::copy_exist(),
			'bootswatch' => $this->bootswatch,
		]);
	}


	/**
	 * Create/write the less-file
	 *
	 * @return void
	 */
	public function createAction() {

		$extDir = ExtensionManagementUtility::extPath($this->extKey);
		$filename = $extDir.'Resources/Public/Contrib/Bootstrap/less/variables.less';
		$args = $this->request->getArguments();
		$jumbotronHeadingFontSize = array_key_exists('@jumbotron-heading-font-size' , $args);

		foreach ( $args as $key=>$arg ) {
			if ($key == 'fontimport') $less .= $arg.';';
			if (substr($key, 0, 1) == '@') {
				if ( $key == '@jumbotron-font-size' && $jumbotronHeadingFontSize == FALSE ) {
					$less .= $key.':'.$arg.';';
					$less .= '@jumbotron-heading-font-size:ceil((@font-size-base * 4.5));';
				} else {
					$less .= $key.':'.$arg.';';
				}
			}
		}
		
		$bsFile = $extDir.'Resources/Public/Contrib/Bootstrap/less/bootstrap.less';
		$bsFileArr = file($bsFile);
		
		foreach ($bsFileArr as $key=>$bsf) {
			if (substr($bsf, 0, 16) == '@import "../../B') {
				unset($bsFileArr[$key]);
			} else {
				$content[] = $bsf;
			}	
		}
		if ($args['bwatch'])
		$content[] = '@import "../../Bootswatch/'.$args['bwatch'].'/bootswatch.less";';

		if (is_writable($bsFile))
		file_put_contents($bsFile, $content);
		
		if (is_writable($filename)) {
			if ( GeneralUtility::writeFile($filename,trim($less)) ) {
				$this->addFlashMessage('Success! New style is created - reload your frontend to view the result!', '', AbstractMessage::OK);
			} else {
				$this->addFlashMessage('Parsing failed!', '', AbstractMessage::ERROR);
			}
		} else {
		    $this->addFlashMessage('This file is not writable', '', AbstractMessage::ERROR);
		}

		$this->redirect('index');

	}

	/**
	 * Reset to defaults
	 *
	 * @return void
	 */
	public function resetAction() {
		$args = $this->request->getArguments();

		if ( $args['myReset'] ) {
			$this->addFlashMessage('The form is reset to your saved file - you have to save the form!', '', AbstractMessage::INFO);
		} elseif ( $args['reset'] ) {
			$this->addFlashMessage('The form is reset to default - you have to save the form!', '', AbstractMessage::INFO);
		} else {
			$bootswatchTheme = $args['bootswatch'] ? $args['bootswatch'] : 'cerulean as default Bootswatch theme';
			$this->addFlashMessage('The form is set to Bootswatch free Theme <strong>"'.ucfirst($bootswatchTheme).'"</strong> - you have to save the form!', '', AbstractMessage::INFO);
		}

		$this->view->assignMultiple([
			'args' => $args,
			'copyExist' => self::copy_exist(),
			'bootswatch' => $this->bootswatch,
		]);

	}


	/**
	 * Copy/save the less-file to fileadmin/..
	 *
	 * @return void
	 */
	public function copyAction() {
		$extDir = ExtensionManagementUtility::extPath($this->extKey);
		$filename = $extDir.'Resources/Public/Contrib/Bootstrap/less/variables.less';
		if (file_exists($filename)) {
			$copyPath = GeneralUtility::getFileAbsFileName('fileadmin/BootstrapLessConfig/');
			if (!is_dir($copyPath)) GeneralUtility::mkdir($copyPath);
			if ( copy($filename,$copyPath.'variables_copy.less') && copy($filename,$copyPath.'variables_'.time().'.less') ) {
				$this->addFlashMessage('Success! Your configuration has been saved to fileadmin/BootstrapLessConfig/variables_copy.less & variables_'.time().'.less', '', AbstractMessage::OK);
			} else {
				$this->addFlashMessage('Copy failed', '', AbstractMessage::ERROR);
			}
		} else {
		    $this->addFlashMessage('This file is not writable', '', AbstractMessage::ERROR);
		}

		$this->redirect('index');
	}


	/**
	 * check if a copy exist
	 *
	 * @return boolean
	 */
	public function copy_exist() {
		$copyPath = GeneralUtility::getFileAbsFileName('fileadmin/BootstrapLessConfig/');
		$file = $copyPath.'variables_copy.less';
		$copyExist = FALSE;
		if (@file_exists($file) && GeneralUtility::isAllowedAbsPath($file)) {
			$copyExist = TRUE;
		}

		return $copyExist;
	}



}