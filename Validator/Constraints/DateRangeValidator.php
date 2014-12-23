<?php

namespace ScoutEvent\DataBundle\Validator\Constraints;

use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Constraint;

class DateRangeValidator extends ConstraintValidator
{

    public function validate($entity, Constraint $constraint)
    {
        $valid = false;

        if ($entity->getStartTime() !== null) {
            if ($entity->getEndTime() !== null) {
                if ($entity->getStartTime() <= $entity->getEndTime()) {
                    $valid = true;
                }
            }
        }
        
        if ($valid == false)
        {
            $this->context->buildViolation($constraint->message)
                ->atPath('startTime')
                ->addViolation();
        }
    }

}
