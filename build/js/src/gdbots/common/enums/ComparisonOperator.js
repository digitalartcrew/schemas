import Enum from '@gdbots/pbj/Enum';

export default class ComparisonOperator extends Enum {
}

ComparisonOperator.configure({
  UNKNOWN: 'unknown',
  EQUAL_TO: 'eq',
  NOT_EQUAL_TO: 'ne',
  GREATER_THAN: 'gt',
  GREATER_THAN_OR_EQUAL_TO: 'gte',
  LESS_THAN: 'lt',
  LESS_THAN_OR_EQUAL_TO: 'lte',
  EXISTS: 'exists',
  IN: 'in',
  CONTAINS: 'contains',
  NOT_CONTAINS: 'not_contains',
}, 'gdbots:common:comparison-operator');
