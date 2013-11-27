<?php
/**
 * Created by PhpStorm.
 * User: kanni
 * Date: 11/27/13
 * Time: 10:07 PM
 */

namespace Butenko\HomeBundle\Service;

use Symfony\Component\Filesystem\Filesystem;

class MyService
{
    private $name;

    private $filesystem;

    public function __construct($name, Filesystem $filesystem)
    {
        $this->name = $name;
        $this->filesystem = $filesystem;
    }

    public function simpleTask()
    {
        return 'Simple result of my fisrt service, '.$this->name;
    }

    public function returnFilesystem()
    {
        return $this->filesystem;
    }
} 