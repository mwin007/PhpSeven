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

class MageMechanic_PhpSeven_Model_Layout extends Mage_Core_Model_Layout
{

    /**
     * Get all blocks marked for output
     *
     * @return string
     */
    public function getOutput()
    {
        $out = '';
        if (!empty($this->_output)) {
            foreach ($this->_output as $callback) {
                $out .= $this->getBlock($callback[0])->{$callback[1]}(); // all this for a one line mod :|
            }
        }

        return $out;
    }
}

