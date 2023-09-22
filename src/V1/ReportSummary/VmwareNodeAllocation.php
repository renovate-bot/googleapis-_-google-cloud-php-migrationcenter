<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\ReportSummary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents assets allocated to a specific VMWare Node type.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ReportSummary.VmwareNodeAllocation</code>
 */
class VmwareNodeAllocation extends \Google\Protobuf\Internal\Message
{
    /**
     * VMWare node type, e.g. "ve1-standard-72"
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ReportSummary.VmwareNode vmware_node = 1;</code>
     */
    protected $vmware_node = null;
    /**
     * Count of this node type to be provisioned
     *
     * Generated from protobuf field <code>int64 node_count = 2;</code>
     */
    protected $node_count = 0;
    /**
     * Count of assets allocated to these nodes
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 3;</code>
     */
    protected $allocated_asset_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\MigrationCenter\V1\ReportSummary\VmwareNode $vmware_node
     *           VMWare node type, e.g. "ve1-standard-72"
     *     @type int|string $node_count
     *           Count of this node type to be provisioned
     *     @type int|string $allocated_asset_count
     *           Count of assets allocated to these nodes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * VMWare node type, e.g. "ve1-standard-72"
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ReportSummary.VmwareNode vmware_node = 1;</code>
     * @return \Google\Cloud\MigrationCenter\V1\ReportSummary\VmwareNode|null
     */
    public function getVmwareNode()
    {
        return $this->vmware_node;
    }

    public function hasVmwareNode()
    {
        return isset($this->vmware_node);
    }

    public function clearVmwareNode()
    {
        unset($this->vmware_node);
    }

    /**
     * VMWare node type, e.g. "ve1-standard-72"
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ReportSummary.VmwareNode vmware_node = 1;</code>
     * @param \Google\Cloud\MigrationCenter\V1\ReportSummary\VmwareNode $var
     * @return $this
     */
    public function setVmwareNode($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\ReportSummary\VmwareNode::class);
        $this->vmware_node = $var;

        return $this;
    }

    /**
     * Count of this node type to be provisioned
     *
     * Generated from protobuf field <code>int64 node_count = 2;</code>
     * @return int|string
     */
    public function getNodeCount()
    {
        return $this->node_count;
    }

    /**
     * Count of this node type to be provisioned
     *
     * Generated from protobuf field <code>int64 node_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNodeCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->node_count = $var;

        return $this;
    }

    /**
     * Count of assets allocated to these nodes
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 3;</code>
     * @return int|string
     */
    public function getAllocatedAssetCount()
    {
        return $this->allocated_asset_count;
    }

    /**
     * Count of assets allocated to these nodes
     *
     * Generated from protobuf field <code>int64 allocated_asset_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAllocatedAssetCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->allocated_asset_count = $var;

        return $this;
    }

}

