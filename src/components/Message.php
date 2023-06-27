<?php

namespace App\components;

use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;

#[AsLiveComponent('_message')]
final class Message{
    use DefaultActionTrait;
}