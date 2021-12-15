<?php

namespace App\Exception;

use Interop\Container\Exception\ContainerException as InteropContainerException;

class ContainerException extends \Exception implements InteropContainerException {}