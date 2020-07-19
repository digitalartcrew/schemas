<?php
declare(strict_types=1);

// @link http://schemas.gdbots.io/json-schema/gdbots/iam/mixin/sms-app/1-0-0.json#
namespace Gdbots\Schemas\Iam\Mixin\SmsApp;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait SmsAppV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
        ];
    }
}
