<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamReadMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for status request.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamReadMessage.PartitionSessionStatusResponse</code>
 */
class PartitionSessionStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier of partition session whose status was requested.
     *
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     */
    protected $partition_session_id = 0;
    /**
     * Partition contains messages with offsets in range [start, end).
     *
     * Generated from protobuf field <code>.Ydb.Topic.OffsetsRange partition_offsets = 2;</code>
     */
    protected $partition_offsets = null;
    /**
     * Each offset up to and including (committed_offset - 1) was fully processed.
     *
     * Generated from protobuf field <code>int64 committed_offset = 3;</code>
     */
    protected $committed_offset = 0;
    /**
     * Write timestamp of next message written to this partition will be no less than write_time_high_watermark.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp write_time_high_watermark = 4;</code>
     */
    protected $write_time_high_watermark = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition_session_id
     *           Identifier of partition session whose status was requested.
     *     @type \Ydb\Topic\OffsetsRange $partition_offsets
     *           Partition contains messages with offsets in range [start, end).
     *     @type int|string $committed_offset
     *           Each offset up to and including (committed_offset - 1) was fully processed.
     *     @type \Google\Protobuf\Timestamp $write_time_high_watermark
     *           Write timestamp of next message written to this partition will be no less than write_time_high_watermark.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier of partition session whose status was requested.
     *
     * Generated from protobuf field <code>int64 partition_session_id = 1;</code>
     * @return int|string
     */
    public function getPartitionSessionId()
    {
        return $this->partition_session_id;
    }

    /**
     * Identifier of partition session whose status was requested.
     *
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

    /**
     * Partition contains messages with offsets in range [start, end).
     *
     * Generated from protobuf field <code>.Ydb.Topic.OffsetsRange partition_offsets = 2;</code>
     * @return \Ydb\Topic\OffsetsRange|null
     */
    public function getPartitionOffsets()
    {
        return $this->partition_offsets;
    }

    public function hasPartitionOffsets()
    {
        return isset($this->partition_offsets);
    }

    public function clearPartitionOffsets()
    {
        unset($this->partition_offsets);
    }

    /**
     * Partition contains messages with offsets in range [start, end).
     *
     * Generated from protobuf field <code>.Ydb.Topic.OffsetsRange partition_offsets = 2;</code>
     * @param \Ydb\Topic\OffsetsRange $var
     * @return $this
     */
    public function setPartitionOffsets($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\OffsetsRange::class);
        $this->partition_offsets = $var;

        return $this;
    }

    /**
     * Each offset up to and including (committed_offset - 1) was fully processed.
     *
     * Generated from protobuf field <code>int64 committed_offset = 3;</code>
     * @return int|string
     */
    public function getCommittedOffset()
    {
        return $this->committed_offset;
    }

    /**
     * Each offset up to and including (committed_offset - 1) was fully processed.
     *
     * Generated from protobuf field <code>int64 committed_offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommittedOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->committed_offset = $var;

        return $this;
    }

    /**
     * Write timestamp of next message written to this partition will be no less than write_time_high_watermark.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp write_time_high_watermark = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getWriteTimeHighWatermark()
    {
        return $this->write_time_high_watermark;
    }

    public function hasWriteTimeHighWatermark()
    {
        return isset($this->write_time_high_watermark);
    }

    public function clearWriteTimeHighWatermark()
    {
        unset($this->write_time_high_watermark);
    }

    /**
     * Write timestamp of next message written to this partition will be no less than write_time_high_watermark.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp write_time_high_watermark = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setWriteTimeHighWatermark($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->write_time_high_watermark = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionSessionStatusResponse::class, \Ydb\Topic\StreamReadMessage_PartitionSessionStatusResponse::class);
