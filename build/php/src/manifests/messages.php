<?php
declare(strict_types=1);

/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Returns a class map of curies to php class that can
 * be used to configure the MessageResolver.
 *
 * @link http://schemas.gdbots.io/
 */

return [
    'gdbots:analytics:tracker:keen:v1' => 'Gdbots\Schemas\Analytics\Tracker\KeenV1',
    'gdbots:contexts::app:v1' => 'Gdbots\Schemas\Contexts\AppV1',
    'gdbots:contexts::cloud:v1' => 'Gdbots\Schemas\Contexts\CloudV1',
    'gdbots:contexts::user-agent:v1' => 'Gdbots\Schemas\Contexts\UserAgentV1',
    'gdbots:forms:field:address-field:v1' => 'Gdbots\Schemas\Forms\Field\AddressFieldV1',
    'gdbots:forms:field:age-field:v1' => 'Gdbots\Schemas\Forms\Field\AgeFieldV1',
    'gdbots:forms:field:country-field:v1' => 'Gdbots\Schemas\Forms\Field\CountryFieldV1',
    'gdbots:forms:field:date-field:v1' => 'Gdbots\Schemas\Forms\Field\DateFieldV1',
    'gdbots:forms:field:dob-field:v1' => 'Gdbots\Schemas\Forms\Field\DobFieldV1',
    'gdbots:forms:field:document-field:v1' => 'Gdbots\Schemas\Forms\Field\DocumentFieldV1',
    'gdbots:forms:field:email-field:v1' => 'Gdbots\Schemas\Forms\Field\EmailFieldV1',
    'gdbots:forms:field:facebook-user-field:v1' => 'Gdbots\Schemas\Forms\Field\FacebookUserFieldV1',
    'gdbots:forms:field:gender-field:v1' => 'Gdbots\Schemas\Forms\Field\GenderFieldV1',
    'gdbots:forms:field:height-field:v1' => 'Gdbots\Schemas\Forms\Field\HeightFieldV1',
    'gdbots:forms:field:instagram-user-field:v1' => 'Gdbots\Schemas\Forms\Field\InstagramUserFieldV1',
    'gdbots:forms:field:legal-field:v1' => 'Gdbots\Schemas\Forms\Field\LegalFieldV1',
    'gdbots:forms:field:long-text-field:v1' => 'Gdbots\Schemas\Forms\Field\LongTextFieldV1',
    'gdbots:forms:field:number-field:v1' => 'Gdbots\Schemas\Forms\Field\NumberFieldV1',
    'gdbots:forms:field:phone-field:v1' => 'Gdbots\Schemas\Forms\Field\PhoneFieldV1',
    'gdbots:forms:field:photo-field:v1' => 'Gdbots\Schemas\Forms\Field\PhotoFieldV1',
    'gdbots:forms:field:pinterest-user-field:v1' => 'Gdbots\Schemas\Forms\Field\PinterestUserFieldV1',
    'gdbots:forms:field:select-field:v1' => 'Gdbots\Schemas\Forms\Field\SelectFieldV1',
    'gdbots:forms:field:sexual-orientation-field:v1' => 'Gdbots\Schemas\Forms\Field\SexualOrientationFieldV1',
    'gdbots:forms:field:short-text-field:v1' => 'Gdbots\Schemas\Forms\Field\ShortTextFieldV1',
    'gdbots:forms:field:signature-field:v1' => 'Gdbots\Schemas\Forms\Field\SignatureFieldV1',
    'gdbots:forms:field:skype-user-field:v1' => 'Gdbots\Schemas\Forms\Field\SkypeUserFieldV1',
    'gdbots:forms:field:snapchat-user-field:v1' => 'Gdbots\Schemas\Forms\Field\SnapchatUserFieldV1',
    'gdbots:forms:field:statement-field:v1' => 'Gdbots\Schemas\Forms\Field\StatementFieldV1',
    'gdbots:forms:field:twitter-user-field:v1' => 'Gdbots\Schemas\Forms\Field\TwitterUserFieldV1',
    'gdbots:forms:field:video-field:v1' => 'Gdbots\Schemas\Forms\Field\VideoFieldV1',
    'gdbots:forms:field:website-field:v1' => 'Gdbots\Schemas\Forms\Field\WebsiteFieldV1',
    'gdbots:forms:field:weight-field:v1' => 'Gdbots\Schemas\Forms\Field\WeightFieldV1',
    'gdbots:forms:field:yes-no-field:v1' => 'Gdbots\Schemas\Forms\Field\YesNoFieldV1',
    'gdbots:forms:field:youtube-user-field:v1' => 'Gdbots\Schemas\Forms\Field\YoutubeUserFieldV1',
    'gdbots:forms:field:youtube-video-field:v1' => 'Gdbots\Schemas\Forms\Field\YoutubeVideoFieldV1',
    'gdbots:geo::address:v1' => 'Gdbots\Schemas\Geo\AddressV1',
    'gdbots:iam:command:grant-roles-to-app:v1' => 'Gdbots\Schemas\Iam\Command\GrantRolesToAppV1',
    'gdbots:iam:command:grant-roles-to-user:v1' => 'Gdbots\Schemas\Iam\Command\GrantRolesToUserV1',
    'gdbots:iam:command:revoke-roles-from-app:v1' => 'Gdbots\Schemas\Iam\Command\RevokeRolesFromAppV1',
    'gdbots:iam:command:revoke-roles-from-user:v1' => 'Gdbots\Schemas\Iam\Command\RevokeRolesFromUserV1',
    'gdbots:iam:event:app-roles-granted:v1' => 'Gdbots\Schemas\Iam\Event\AppRolesGrantedV1',
    'gdbots:iam:event:app-roles-revoked:v1' => 'Gdbots\Schemas\Iam\Event\AppRolesRevokedV1',
    'gdbots:iam:event:user-roles-granted:v1' => 'Gdbots\Schemas\Iam\Event\UserRolesGrantedV1',
    'gdbots:iam:event:user-roles-revoked:v1' => 'Gdbots\Schemas\Iam\Event\UserRolesRevokedV1',
    'gdbots:iam:request:get-user-request:v1' => 'Gdbots\Schemas\Iam\Request\GetUserRequestV1',
    'gdbots:iam:request:get-user-response:v1' => 'Gdbots\Schemas\Iam\Request\GetUserResponseV1',
    'gdbots:iam:request:search-apps-request:v1' => 'Gdbots\Schemas\Iam\Request\SearchAppsRequestV1',
    'gdbots:iam:request:search-apps-response:v1' => 'Gdbots\Schemas\Iam\Request\SearchAppsResponseV1',
    'gdbots:iam:request:search-roles-request:v1' => 'Gdbots\Schemas\Iam\Request\SearchRolesRequestV1',
    'gdbots:iam:request:search-roles-response:v1' => 'Gdbots\Schemas\Iam\Request\SearchRolesResponseV1',
    'gdbots:iam:request:search-users-request:v1' => 'Gdbots\Schemas\Iam\Request\SearchUsersRequestV1',
    'gdbots:iam:request:search-users-response:v1' => 'Gdbots\Schemas\Iam\Request\SearchUsersResponseV1',
    'gdbots:ncr:command:create-edge:v1' => 'Gdbots\Schemas\Ncr\Command\CreateEdgeV1',
    'gdbots:ncr:command:create-node:v1' => 'Gdbots\Schemas\Ncr\Command\CreateNodeV1',
    'gdbots:ncr:command:delete-edge:v1' => 'Gdbots\Schemas\Ncr\Command\DeleteEdgeV1',
    'gdbots:ncr:command:delete-node:v1' => 'Gdbots\Schemas\Ncr\Command\DeleteNodeV1',
    'gdbots:ncr:command:expire-node:v1' => 'Gdbots\Schemas\Ncr\Command\ExpireNodeV1',
    'gdbots:ncr:command:lock-node:v1' => 'Gdbots\Schemas\Ncr\Command\LockNodeV1',
    'gdbots:ncr:command:mark-node-as-draft:v1' => 'Gdbots\Schemas\Ncr\Command\MarkNodeAsDraftV1',
    'gdbots:ncr:command:mark-node-as-pending:v1' => 'Gdbots\Schemas\Ncr\Command\MarkNodeAsPendingV1',
    'gdbots:ncr:command:publish-node:v1' => 'Gdbots\Schemas\Ncr\Command\PublishNodeV1',
    'gdbots:ncr:command:rename-node:v1' => 'Gdbots\Schemas\Ncr\Command\RenameNodeV1',
    'gdbots:ncr:command:unlock-node:v1' => 'Gdbots\Schemas\Ncr\Command\UnlockNodeV1',
    'gdbots:ncr:command:unpublish-node:v1' => 'Gdbots\Schemas\Ncr\Command\UnpublishNodeV1',
    'gdbots:ncr:event:edge-created:v1' => 'Gdbots\Schemas\Ncr\Event\EdgeCreatedV1',
    'gdbots:ncr:event:edge-deleted:v1' => 'Gdbots\Schemas\Ncr\Event\EdgeDeletedV1',
    'gdbots:ncr:event:node-created:v1' => 'Gdbots\Schemas\Ncr\Event\NodeCreatedV1',
    'gdbots:ncr:event:node-deleted:v1' => 'Gdbots\Schemas\Ncr\Event\NodeDeletedV1',
    'gdbots:ncr:event:node-expired:v1' => 'Gdbots\Schemas\Ncr\Event\NodeExpiredV1',
    'gdbots:ncr:event:node-locked:v1' => 'Gdbots\Schemas\Ncr\Event\NodeLockedV1',
    'gdbots:ncr:event:node-marked-as-draft:v1' => 'Gdbots\Schemas\Ncr\Event\NodeMarkedAsDraftV1',
    'gdbots:ncr:event:node-marked-as-pending:v1' => 'Gdbots\Schemas\Ncr\Event\NodeMarkedAsPendingV1',
    'gdbots:ncr:event:node-published:v1' => 'Gdbots\Schemas\Ncr\Event\NodePublishedV1',
    'gdbots:ncr:event:node-renamed:v1' => 'Gdbots\Schemas\Ncr\Event\NodeRenamedV1',
    'gdbots:ncr:event:node-scheduled:v1' => 'Gdbots\Schemas\Ncr\Event\NodeScheduledV1',
    'gdbots:ncr:event:node-unlocked:v1' => 'Gdbots\Schemas\Ncr\Event\NodeUnlockedV1',
    'gdbots:ncr:event:node-unpublished:v1' => 'Gdbots\Schemas\Ncr\Event\NodeUnpublishedV1',
    'gdbots:ncr:event:node-updated:v1' => 'Gdbots\Schemas\Ncr\Event\NodeUpdatedV1',
    'gdbots:ncr:request:get-node-batch-request:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchRequestV1',
    'gdbots:ncr:request:get-node-batch-response:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchResponseV1',
    'gdbots:ncr:request:get-node-history-request:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeHistoryRequestV1',
    'gdbots:ncr:request:get-node-history-response:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeHistoryResponseV1',
    'gdbots:ncr:request:get-node-request:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeRequestV1',
    'gdbots:ncr:request:get-node-response:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeResponseV1',
    'gdbots:pbjx::envelope:v1' => 'Gdbots\Schemas\Pbjx\EnvelopeV1',
    'gdbots:pbjx:command:check-health:v1' => 'Gdbots\Schemas\Pbjx\Command\CheckHealthV1',
    'gdbots:pbjx:event:event-execution-failed:v1' => 'Gdbots\Schemas\Pbjx\Event\EventExecutionFailedV1',
    'gdbots:pbjx:event:health-checked:v1' => 'Gdbots\Schemas\Pbjx\Event\HealthCheckedV1',
    'gdbots:pbjx:request:echo-request:v1' => 'Gdbots\Schemas\Pbjx\Request\EchoRequestV1',
    'gdbots:pbjx:request:echo-response:v1' => 'Gdbots\Schemas\Pbjx\Request\EchoResponseV1',
    'gdbots:pbjx:request:request-failed-response:v1' => 'Gdbots\Schemas\Pbjx\Request\RequestFailedResponseV1',
];
