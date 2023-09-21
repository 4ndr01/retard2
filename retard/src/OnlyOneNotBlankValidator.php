<?php

namespace App;

use App\Validator\Constraints\OnlyOneNotBlank;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class OnlyOneNotBlankValidator extends ConstraintValidator
{


    public function validate(mixed $value, Constraint $constraint)
    {
        if (!$constraint instanceof OnlyOneNotBlank) {
            throw new UnexpectedTypeException($constraint, OnlyOneNotBlank::class);
        }

        if (!is_array($value) || count($value) !== 2) {
            throw new UnexpectedValueException($value, 'array');
        }

        $firstField = $value[0];
        $secondField = $value[1];

        if (empty($firstField) && empty($secondField)) {
            return; // Les deux champs sont vides, pas d'erreur de validation.
        }

        if (!empty($firstField) && !empty($secondField)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}