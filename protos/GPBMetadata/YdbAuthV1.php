<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ydb_auth_v1.proto

namespace GPBMetadata;

class YdbAuthV1
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Protos\YdbAuth::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
ydb_auth_v1.protoYdb.Auth.V12G
AuthService8
Login.Ydb.Auth.LoginRequest.Ydb.Auth.LoginResponseBG
tech.ydb.auth.v1Z3github.com/ydb-platform/ydb-go-genproto/Ydb_Auth_V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
