// @link http://schemas.gdbots.io/json-schema/gdbots/pbjx/command/check-health/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class CheckHealthV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create(this.COMMAND_ID_FIELD, T.TimeUuidType.create())
          .required()
          .build(),
        Fb.create(this.OCCURRED_AT_FIELD, T.MicrotimeType.create())
          .build(),
        /*
         * Used to perform optimistic concurrency control.
         * @link https://en.wikipedia.org/wiki/HTTP_ETag
         */
        Fb.create(this.EXPECTED_ETAG_FIELD, T.StringType.create())
          .maxLength(100)
          .pattern('^[\\w\\.:-]+$')
          .build(),
        /*
         * Multi-tenant apps can use this field to track the tenant id.
         */
        Fb.create(this.CTX_TENANT_ID_FIELD, T.StringType.create())
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        /*
         * The "ctx_retries" field is used to keep track of how many attempts were
         * made to process this command. In some cases, the service or transport
         * that handles the command may be down or an optimistic check has failed
         * and is being retried.
         */
        Fb.create(this.CTX_RETRIES_FIELD, T.TinyIntType.create())
          .build(),
        /*
         * The "ctx_causator" is the actual causator object that "ctx_causator_ref"
         * refers to. In some cases it's useful for command handlers to copy the
         * causator into the command. For example, when a node is being updated we
         * may want to know what the node will be after the update. We can derive
         * this via the causator instead of requesting the node and engaging a race
         * condition.
         */
        Fb.create(this.CTX_CAUSATOR_FIELD, T.MessageType.create())
          .build(),
        Fb.create(this.CTX_CAUSATOR_REF_FIELD, T.MessageRefType.create())
          .build(),
        Fb.create(this.CTX_CORRELATOR_REF_FIELD, T.MessageRefType.create())
          .build(),
        Fb.create(this.CTX_USER_REF_FIELD, T.MessageRefType.create())
          .build(),
        /*
         * The "ctx_app" refers to the application used to send the command. This is
         * different from ctx_ua (user_agent) because the agent used (Safari, Firefox)
         * is not necessarily the app used (cms, iOS app, website)
         */
        Fb.create(this.CTX_APP_FIELD, T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::app',
          ])
          .build(),
        /*
         * The "ctx_cloud" is set by the server receiving the command and is generally
         * only used internally for tracking and performance monitoring.
         */
        Fb.create(this.CTX_CLOUD_FIELD, T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::cloud',
          ])
          .build(),
        Fb.create(this.CTX_IP_FIELD, T.StringType.create())
          .format(Format.IPV4)
          .overridable(true)
          .build(),
        Fb.create(this.CTX_IPV6_FIELD, T.StringType.create())
          .format(Format.IPV6)
          .overridable(true)
          .build(),
        Fb.create(this.CTX_UA_FIELD, T.TextType.create())
          .overridable(true)
          .build(),
        /*
         * An optional message/reason for the command being sent.
         * Consider this like a git commit message.
         */
        Fb.create(this.CTX_MSG_FIELD, T.TextType.create())
          .build(),
        /*
         * A random string that will be validated to match after
         * the event "health-checked" is triggered. (ping-pong)
         */
        Fb.create(this.MSG_FIELD, T.StringType.create())
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = CheckHealthV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:gdbots:pbjx:command:check-health:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'gdbots:pbjx:command:check-health';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'gdbots:pbjx:command:check-health:v1';

M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:command:v1',
  'gdbots:pbjx:mixin:command',
];

M.prototype.COMMAND_ID_FIELD = M.COMMAND_ID_FIELD = 'command_id';
M.prototype.OCCURRED_AT_FIELD = M.OCCURRED_AT_FIELD = 'occurred_at';
M.prototype.EXPECTED_ETAG_FIELD = M.EXPECTED_ETAG_FIELD = 'expected_etag';
M.prototype.CTX_TENANT_ID_FIELD = M.CTX_TENANT_ID_FIELD = 'ctx_tenant_id';
M.prototype.CTX_RETRIES_FIELD = M.CTX_RETRIES_FIELD = 'ctx_retries';
M.prototype.CTX_CAUSATOR_FIELD = M.CTX_CAUSATOR_FIELD = 'ctx_causator';
M.prototype.CTX_CAUSATOR_REF_FIELD = M.CTX_CAUSATOR_REF_FIELD = 'ctx_causator_ref';
M.prototype.CTX_CORRELATOR_REF_FIELD = M.CTX_CORRELATOR_REF_FIELD = 'ctx_correlator_ref';
M.prototype.CTX_USER_REF_FIELD = M.CTX_USER_REF_FIELD = 'ctx_user_ref';
M.prototype.CTX_APP_FIELD = M.CTX_APP_FIELD = 'ctx_app';
M.prototype.CTX_CLOUD_FIELD = M.CTX_CLOUD_FIELD = 'ctx_cloud';
M.prototype.CTX_IP_FIELD = M.CTX_IP_FIELD = 'ctx_ip';
M.prototype.CTX_IPV6_FIELD = M.CTX_IPV6_FIELD = 'ctx_ipv6';
M.prototype.CTX_UA_FIELD = M.CTX_UA_FIELD = 'ctx_ua';
M.prototype.CTX_MSG_FIELD = M.CTX_MSG_FIELD = 'ctx_msg';
M.prototype.MSG_FIELD = M.MSG_FIELD = 'msg';

M.prototype.FIELDS = M.FIELDS = [
  M.COMMAND_ID_FIELD,
  M.OCCURRED_AT_FIELD,
  M.EXPECTED_ETAG_FIELD,
  M.CTX_TENANT_ID_FIELD,
  M.CTX_RETRIES_FIELD,
  M.CTX_CAUSATOR_FIELD,
  M.CTX_CAUSATOR_REF_FIELD,
  M.CTX_CORRELATOR_REF_FIELD,
  M.CTX_USER_REF_FIELD,
  M.CTX_APP_FIELD,
  M.CTX_CLOUD_FIELD,
  M.CTX_IP_FIELD,
  M.CTX_IPV6_FIELD,
  M.CTX_UA_FIELD,
  M.CTX_MSG_FIELD,
  M.MSG_FIELD,
];

GdbotsPbjxCommandV1Trait(M);

Object.freeze(M);
Object.freeze(M.prototype);
