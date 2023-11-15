<?php

namespace App\Exceptions;

use Throwable;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof HttpException) {
            $statusCode = $exception->getStatusCode();
            if(!Auth()){
                //front-end
                return response()->view("front-end.errors.{$statusCode}", ['title' =>$statusCode], $statusCode);
            }else{
                //back-end
                return response()->view("back-end.errors.{$statusCode}", ['title' =>$statusCode], $statusCode);
            }
        }
        return parent::render($request, $exception);
    }

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
