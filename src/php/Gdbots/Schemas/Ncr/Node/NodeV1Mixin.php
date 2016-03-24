<?php

namespace Gdbots\Schemas\Ncr\Node;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;

final class NodeV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:gdbots:ncr:mixin:node:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * The "_id" value:
             * - MUST NOT change for the life of the node.
             * - SHOULD be globally unique
             * - SHOULD be generated by the app (ideally in default value closure... e.g. UuidIdentifier::generate())
             */
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return \Gdbots\Identifiers\UuidIdentifier::generate(); })
                ->className('Gdbots\Identifiers\UuidIdentifier')
                ->overridable(true)
                ->build(),
            Fb::create('status', T\StringEnumType::create())
                ->withDefault(NodeStatus::DRAFT())
                ->className('Gdbots\Schemas\Ncr\Enum\NodeStatus')
                ->build(),
            Fb::create('etag', T\StringType::create())
                ->maxLength(100)
                ->pattern('^[\w\.:-]+$')
                ->build(),
            Fb::create('created_at', T\MicrotimeType::create())
                ->required()
                ->build(),
            Fb::create('creator_ref', T\MessageRefType::create())
                ->build(),
            Fb::create('updated_at', T\MicrotimeType::create())
                ->useTypeDefault(false)
                ->build(),
            Fb::create('updater_ref', T\MessageRefType::create())
                ->build(),
            Fb::create('published_at', T\MicrotimeType::create())
                ->useTypeDefault(false)
                ->build(),
            Fb::create('expires_at', T\TimestampType::create())
                ->useTypeDefault(false)
                ->build(),
            Fb::create('title', T\StringType::create())
                ->build()
        ];
    }
}
