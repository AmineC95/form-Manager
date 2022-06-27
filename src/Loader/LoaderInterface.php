<?php
namespace App\Loader;


interface LoaderInterface
{
    public static function load(string $path): object;
    public static function getExtension(): string;
}