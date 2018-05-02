<?php
namespace App\Validator\Constraints\Shiny;

use Symfony\Component\Validator\Constraint;

/**
 * Class YoutubeUrl
 * @package WikiBundle\Validator\Constraints
 * @Annotation
 */
class YoutubeUrl extends Constraint
{
    public $message = '"%string%" is not a valid youtube URL.';
}