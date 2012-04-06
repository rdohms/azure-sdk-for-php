<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   PEAR2\Tests\Unit\WindowsAzure\Services\Table\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */

namespace PEAR2\Tests\Unit\WindowsAzure\Services\Table\Models;
use PEAR2\WindowsAzure\Services\Table\Models\TableServiceOptions;

/**
 * Unit tests for class TableServiceOptions
 *
 * @category  Microsoft
 * @package   PEAR2\Tests\Unit\WindowsAzure\Services\Table\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class TableServiceOptionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers PEAR2\WindowsAzure\Services\Table\Models\TableServiceOptions::setTimeout
     */
    public function testSetTimeout()
    {
        // Setup
        $options = new TableServiceOptions();
        $value = 10;
        
        // Test
        $options->setTimeout($value);
        
        // Assert
        $this->assertEquals($value, $options->getTimeout());
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Table\Models\TableServiceOptions::getTimeout
     */
    public function testGetTimeout()
    {
        // Setup
        $options = new TableServiceOptions();
        $value = 10;
        $options->setTimeout($value);
        
        // Test
        $actualValue = $options->getTimeout();
        
        // Assert
        $this->assertEquals($value, $actualValue);
    }
}

?>