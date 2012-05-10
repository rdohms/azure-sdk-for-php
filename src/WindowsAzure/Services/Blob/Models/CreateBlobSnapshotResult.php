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
 * @package   WindowsAzure\Services\Blob\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com> 
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
 
namespace WindowsAzure\Services\Blob\Models;
use WindowsAzure\Resources;
use WindowsAzure\Validate;
use WindowsAzure\Utilities;
use WindowsAzure\Core\WindowsAzureUtilities;

/**
 * The result of creating Blob snapshot. 
 *
 * @category  Microsoft
 * @package   WindowsAzure\Services\Blob\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class CreateBlobSnapshotResult
{
    /**
     * A DateTime value which uniquely identifies the snapshot. 
     * @var \DateTime
     */
    private $_snapshot;
            
    /**
     * The ETag for the destination blob. 
     * @var string
     */
    private $_etag;
    
    /**
     * The date/time that the copy operation to the destination blob completed. 
     * @var \DateTime
     */
    private $_lastModified;
    
    /**
     * Creates CreateBlobSnapshotResult object from the response of the 
     * create Blob snapshot request.
     * 
     * @param array $headers The HTTP response headers in array representation.
     * 
     * @return CreateBlobSnapshotResult
     */
    public static function create($headers)
    {
        $result                 = new CreateBlobSnapshotResult();
        $headerWithLowerCaseKey = array_change_key_case($headers);
        
        $result->setEtag($headerWithLowerCaseKey[Resources::ETAG]);
        
        $result->setLastModified(
            WindowsAzureUtilities::rfc1123ToDateTime(
                $headerWithLowerCaseKey[Resources::LAST_MODIFIED]
            )
        );
        
        $result->setSnapshot(
            Utilities::convertToDateTime(
                $headerWithLowerCaseKey[Resources::X_MS_SNAPSHOT]
            )
        );
        
        return $result;
    }
    
    /**
     * Gets snapshot. 
     *
     * @return \DateTime. 
     */
    public function getSnapshot()
    {
        return $this->_snapshot;
    }
    
    /**
     * Sets snapshot.
     * 
     * @param \DateTime $snapshot value.
     *
     * @return none.
     */
    public function setSnapshot($snapshot)
    {
        $this->_snapshot = $snapshot;
    }
    
    /**
     * Gets ETag.
     * 
     * @return string. 
     */
    public function getETag()
    {
        return $this->_etag;
    }

    /**
     * Sets ETag.
     *
     * @param string $etag value.
     *
     * @return none.
     */
    public function setETag($etag)
    {
        $this->_etag = $etag;
    }
    
    /**
     * Gets blob lastModified.
     *
     * @return \DateTime.
     */
    public function getLastModified()
    {
        return $this->_lastModified;
    }

    /**
     * Sets blob lastModified.
     *
     * @param \DateTime $lastModified value.
     *
     * @return none.
     */
    public function setLastModified($lastModified)
    {
        Validate::isDate($lastModified);
        $this->_lastModified = $lastModified;
    }
}

?>