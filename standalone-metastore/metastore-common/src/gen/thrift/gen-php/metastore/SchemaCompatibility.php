<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

final class SchemaCompatibility
{
    const NONE = 1;

    const BACKWARD = 2;

    const FORWARD = 3;

    const BOTH = 4;

    static public $__names = array(
        1 => 'NONE',
        2 => 'BACKWARD',
        3 => 'FORWARD',
        4 => 'BOTH',
    );
}
