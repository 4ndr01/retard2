<?php

namespace App;



// src/Validator/Constraints/OnlyOneNotBlank.php

namespace App\Validator\Constraints;

    use Symfony\Component\Validator\Constraint;

    /**
     * @Annotation
     */
class OnlyOneNotBlank extends Constraint
{
    public string $message = 'Only one of the fields should be filled.';
}


