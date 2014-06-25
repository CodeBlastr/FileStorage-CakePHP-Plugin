<?php
App::uses('FileStorageAppController', 'Controller');
/**
 * FileStorage
 *
 * @author Florian Kr�mer
 * @copyright 2012 Florian Kr�mer
 * @license MIT
 */
class FileStorageAppController extends AppController {
	
	
	/**
	 * Simple Method for detecting what model to save to
	 * by file mime_type
	 */
	
	protected function _detectModelByFileType ($mime_type) {
		return FileStorageUtils::detectModelByFileType($mime_type);
	}
	
}