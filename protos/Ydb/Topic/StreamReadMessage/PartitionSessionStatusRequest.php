<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamReadMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Topic.StreamReadMessage.PartitionSessionStatusRequest</code>
 */
class PartitionSessionStatusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     */
    protected $partition_session_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition_session_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     * @return int|string
     */
    public function getPartitionSessionId()
    {
        return $this->partition_session_id;
    }

    /**
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionSessionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition_session_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionSessionStatusRequest::class, \Ydb\Topic\StreamReadMessage_PartitionSessionStatusRequest::class);
