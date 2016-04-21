<?php
/**
 * MageMechanic PhpSeven Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   MageMechanic
 * @package    MageMechanic_PhpSeven
 * @author     Charles Hilditch
 * @copyright  Copyright (c) 2015 MageMechanic.com (http://www.magemechanic.com/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class MageMechanic_PhpSeven_Model_File_Uploader extends Mage_Core_Model_File_Uploader
{

    /**
     * Validate file before save
     *
     * @access public
     */
    protected function _validateFile()
    {
        if ($this->_fileExists === false) {
            return;
        }

        //is file extension allowed
        if (!$this->checkAllowedExtension($this->getFileExtension())) {
            throw new Exception('Disallowed file type.');
        }

        /*
         * Validate MIME-Types.
         */
        if (!$this->checkMimeType($this->_validMimeTypes)) {
            throw new Exception('Invalid MIME type.');
        }

        //run validate callbacks
        foreach ($this->_validateCallbacks as $params) {
            if (is_object($params['object']) && method_exists($params['object'], $params['method'])) {
                $params['object']->{$params['method']}($this->_file['tmp_name']);
            }
        }
    }

}

