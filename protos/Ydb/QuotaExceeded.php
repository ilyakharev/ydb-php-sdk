<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_common.proto

namespace Ydb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.QuotaExceeded</code>
 */
class QuotaExceeded extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool disk = 1;</code>
     */
    protected $disk = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool disk = 1;</code>
     * @return bool
     */
    public function getDisk()
    {
        return $this->disk;
    }

    /**
     * Generated from protobuf field <code>bool disk = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisk($var)
    {
        GPBUtil::checkBool($var);
        $this->disk = $var;

        return $this;
    }

}
