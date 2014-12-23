<?php

namespace ScoutEvent\DataBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class DateRange extends Constraint {

    public $message = 'The start date must be before the end date.';

    public function getTargets() {
        return self::CLASS_CONSTRAINT;
    }

    public function validatedBy() {
        return 'daterange_validator';
    }
}
