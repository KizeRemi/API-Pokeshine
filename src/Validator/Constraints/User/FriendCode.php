<?php
namespace App\Validator\Constraints\User;

use Symfony\Component\Validator\Constraint;

/**
 * Class FriendCode
 * @package WikiBundle\Validator\Constraints
 * @Annotation
 */
class FriendCode extends Constraint
{
    public $message = '"%string%" is not a valid friend Code';
}