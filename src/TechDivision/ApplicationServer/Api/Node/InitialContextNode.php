<?php
/**
 * TechDivision\ApplicationServer\Api\Node\InitialContextNode
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace TechDivision\ApplicationServer\Api\Node;

/**
 * DTO to transfer initial context information.
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
class InitialContextNode extends AbstractNode
{

    /**
     * The initial context's class name.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $type;

    /**
     * Description for the initial context configuration.
     *
     * @var  \TechDivision\ApplicationServer\Api\Node\DescriptionNode
     * @AS\Mapping(nodeName="description", nodeType="TechDivision\ApplicationServer\Api\Node\DescriptionNode")
     */
    protected $description;

    /**
     * Node containing information about the class loader used by the initial context.
     *
     * @var \TechDivision\ApplicationServer\Api\Node\ClassLoaderNode
     * @AS\Mapping(nodeName="classLoader", nodeType="TechDivision\ApplicationServer\Api\Node\ClassLoaderNode")
     */
    protected $classLoader;

    /**
     * Node containing information about the storage implementation used by the inital context.
     *
     * @var \TechDivision\ApplicationServer\Api\Node\StorageNode
     * @AS\Mapping(nodeName="storage", nodeType="TechDivision\ApplicationServer\Api\Node\StorageNode")
     */
    protected $storage;

    /**
     * Returns information about the initial context's class name.
     *
     * @return string The initial context's class name
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the initial context description.
     *
     * @return \TechDivision\ApplicationServer\Api\Node\DescriptionNode The initial context description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the class loader configuration information.
     *
     * @return \TechDivision\ApplicationServer\Api\Node\ClassLoaderNode The node with the class loader information
     */
    public function getClassLoader()
    {
        return $this->classLoader;
    }

    /**
     * Returns the storage configuration information.
     *
     * @return \TechDivision\ApplicationServer\Api\Node\StorageNode The node with the storage information
     */
    public function getStorage()
    {
        return $this->storage;
    }
}
