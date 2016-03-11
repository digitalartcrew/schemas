<?php

namespace Gdbots\Schemas\Ncr;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

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
          
            /**
             * The "_id" value:
             * - MUST never change for the life of the node.
             * - SHOULD be globally unique
             * - SHOULD be generated by the app (ideally in default value closure... e.g. uuid generation)
             */
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return \Gdbots\Identifiers\UuidIdentifier::generate(); })
                ->className('Gdbots\Identifiers\UuidIdentifier')
                ->overridable(true)
                ->build(),
          
            /**
             * The "slug" value:
             * - MUST be url friendly
             * - SHOULD not be case sensitive
             * - SHOULD be unique within the message curie namespace
             */
            Fb::create('slug', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
          
            /**
             * Status is intentionally not an enum to allow for customizations.
             * There is however a gdbots:ncr:node-status enum.
             */
            Fb::create('status', T\StringType::create())
                ->pattern('^[A-Za-z0-9_\-]+$')
                ->withDefault("draft")
                ->overridable(true)
                ->build(),
            Fb::create('etag', T\StringType::create())
                ->maxLength(100)
                ->pattern('^[A-Za-z0-9_\-]+$')
                ->build(),
            Fb::create('created_at', T\MicrotimeType::create())
                ->required()
                ->build(),
            Fb::create('updated_at', T\MicrotimeType::create())
                ->useTypeDefault(false)
                ->build(),
            Fb::create('published_at', T\MicrotimeType::create())
                ->useTypeDefault(false)
                ->build()
        ];
    }
}
