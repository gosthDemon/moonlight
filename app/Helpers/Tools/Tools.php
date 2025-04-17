<?php

namespace App\Helpers\Tools;


class Tools
{
    /**
     * Generates a slug by keeping only letters, numbers, and hyphens, 
     * converting to lowercase, replacing "ñ" with "n", and replacing spaces with hyphens.
     *
     * @param string $text Input text.
     * @return string Slug-formatted string.
     */
    public static function BuildSlug(string $text): string
    {
        $text = mb_strtolower($text, 'UTF-8');
        $text = str_replace('ñ', 'n', $text);
        $text = preg_replace('/[^a-z0-9 -]/', '', $text);
        $text = str_replace(' ', '-', trim($text));
        return preg_replace('/-+/', '-', $text);
    }
    
    public static function getExceptionType(array|\Exception $exception = []): string
    {
        if ($exception instanceof \Exception) {
            $class = get_class($exception);
            if ($class === \Exception::class) {
                return 'GenericException';
            }

            return class_basename($class);
        } elseif (is_array($exception) && isset($exception['type'])) {
            return $exception['type'];
        }

        return 'UnknownType';
    }
}
