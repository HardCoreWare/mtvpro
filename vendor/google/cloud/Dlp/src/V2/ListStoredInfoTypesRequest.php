<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListStoredInfoTypes.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListStoredInfoTypesRequest</code>
 */
class ListStoredInfoTypesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Optional page token to continue retrieval. Comes from previous call
     * to `ListStoredInfoTypes`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Optional size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent resource name, for example projects/my-project-id or
     *           organizations/my-org-id.
     *     @type string $page_token
     *           Optional page token to continue retrieval. Comes from previous call
     *           to `ListStoredInfoTypes`.
     *     @type int $page_size
     *           Optional size of the page, can be limited by server. If zero server returns
     *           a page of max size 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional page token to continue retrieval. Comes from previous call
     * to `ListStoredInfoTypes`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional page token to continue retrieval. Comes from previous call
     * to `ListStoredInfoTypes`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

