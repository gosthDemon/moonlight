<?php

namespace App\Helpers\Logs;

use \Illuminate\Support\Facades\Log as DefaultLog;

class Log
{
    /**
     * Logs an error message along with exception details if provided.
     *
     * @param string $message The custom error message to be logged.
     * @param array|\Exception $exception An optional exception object or an array to provide additional exception details.
     *                                    If an exception is provided, it will log information such as the file, line, stack trace, 
     *                                    and the message of the exception.
     * @return void
     * 
     * This method logs the following details:
     * - File where the error occurred.
     * - Function where the error was triggered.
     * - Line number where the error occurred.
     * - Stack trace of the exception (excluding vendor files).
     * - Message of the exception.
     * - Inner exception message (if available).
     */
    public static function error(string $message, array|\Exception $exception = [])
    {
        // Initialize variables to hold exception data
        $exception_type =

        $archivo = "";
        $funcion = "";
        $stackTrace = "";
        $line = "";
        $messageException = "";

        // Check if the provided argument is an exception
        if ($exception instanceof \Exception) {
            $archivo = $exception->getFile();
            $funcion = $exception->getTrace()[0]['function'] ?? '';  // Retrieve function name from trace
            $line = $exception->getLine();
            $trace = explode("\n", $exception->getTraceAsString());
            // Filter out the 'vendor' stack trace lines to avoid unnecessary noise
            $stackTrace = array_filter($trace, function ($line) {
                return !str_contains($line, 'vendor');
            });
            $messageException = $exception->getMessage();
        } else {
            $archivo = $exception['file'] ?? 'unknown file';
            $funcion = $exception['function'] ?? 'unknown function';
            $line = $exception['line'] ?? 'unknown line';
            $messageException = $exception['message'] ?? '';
            $stackTrace = isset($exception['stackTrace']) ? $exception['stackTrace'] : ['No stack trace available'];
        }

        // Prepare the data array to log detailed information
        $data = [
            "Message" => $message,
            "MessageException" => $messageException,
            "InnerException" => $exception instanceof \Exception && $exception->getPrevious() ? $exception->getPrevious()->getMessage() : "",
            "StackTrace" => $stackTrace,
            "Source" => $archivo
        ];

        // Format the log entry with details
        $logEntry = sprintf(
            "in %s | %s | %s | %s",
            basename($archivo),
            $funcion,
            $line,
            json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );

        // Log the error message using Laravel's default logging system
        DefaultLog::error($logEntry);
    }
    private static function getExceptionType(array|\Exception $exception = []): string
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
