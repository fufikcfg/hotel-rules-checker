<?php

namespace App\Tasks\Rules;

class ConditionsMatchTask
{
    public function run($conditions, $hotel): bool
    {
        foreach ($conditions as $condition) {
            if (!$this->matchCondition($condition, $hotel)) {
                return false;
            }
        }
        return true;
    }

    private function matchCondition($condition, $hotel): bool
    {
        $fieldValue = $this->getFieldValue($condition['field'], $hotel);
        $operator = $condition['operator'];
        $value = $condition['value'];

        return match ($operator) {
            '=' => $fieldValue == $value,
            '!=' => $fieldValue != $value,
            '>' => $fieldValue > $value,
            '<' => $fieldValue < $value,
            default => false,
        };
    }

    private function getFieldValue($field, $hotel)
    {
        $parts = explode('.', $field);

        $value = $hotel;
        foreach ($parts as $part) {
            if (!isset($value->$part)) {
                return null;
            }
            $value = $value->$part;
        }

        return $value;
    }
}
