<?php
namespace App\Validator\Constraints\User;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class FriendCodeValidator
 * @package WikiBundle\Validator\Constraints
 */
class FriendCodeValidator extends ConstraintValidator
{

    /**
     * @param mixed $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {
        $regexp = '/(\d{12})/';
        if (!is_null($value) && !preg_match($regexp, $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value)
                ->addViolation();
        }
    }

}