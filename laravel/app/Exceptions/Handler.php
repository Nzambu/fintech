<?php

namespace App\Exceptions;

use Throwable;
use BadMethodCallException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Response;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * Meta data to be rendered in each exception
     * 
     * @var array
     */
    protected $metadata = [
        "copyright" => "FinTech Sample",
        "authors" => [
            "name" => "Patrick Nzambu",
            "email" => "patricknzambu@gmail.com"
        ]
    ];
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {

        $this->renderable(function (MethodNotAllowedHttpException $exception){
            $request["type"] = "Not Allowed";
            $request["code"] = "MNA001";
            $reuest["title"] = "Method Not Allowed";
            $request["status"] =  502;            
            $request["detail"] = $exception->getMessage();
            $request["meta"] = $this->metadata;
            return Response::json(['error' => $request]);
        });        

        $this->renderable(function (TokenBlacklistedException $exception){
            $request["type"] = "Blacklisted";
            $request["code"] = "TBL001";
            $reuest["title"] = "Token Blacklisted";
            $request["status"] =  422;            
            $request["detail"] = $exception->getMessage();
            $request["meta"] = $this->metadata;
            return Response::json(['error' => $request]);
        });

        $this->renderable(function (ModelNotFoundException $exception) {
            $request['type'] = 'Not Found';
            $request['code'] = 'MNF001';
            $request['title'] = 'Route Not Found';
            $request['status'] = 404;
            $request['message'] = 'Route not found';
            $request['detail'] = $exception->getMessage();
            $request['meta'] = $this->metadata;
            return Response::json(['error' => $request]);
        });

        $this->renderable(function (NotFoundHttpException $exception) {
            $request['type'] = 'Not Found';
            $request['code'] = 'NFH001';
            $request['title'] = 'Record Not Found';
            $request['status'] = $exception->getStatusCode();            
            $request['message'] = 'The item was not found';
            $request['detail'] = $exception->getMessage();
            $request['meta'] = $this->metadata;
            return Response::json(['error' => $request]);
        });

        $this->renderable(function (BadMethodCallException $exception) {
            $request['title'] = 'Bad Method Call';
            $request['code'] = 'BMC001';
            $request['status'] = 400;
            $request['type'] = 'Not Allowed';
            $request['message'] = 'Method not allowed';
            $request['detail'] = $exception->getMessage();
            $request['meta'] = $this->metadata;
            return Response::json(['error' => $request]);
        });

        $this->renderable(function (TokenExpiredException $exception) {
            $request['title'] = 'Token Expired';
            $request['code'] = 'TEE001';            
            $request['status'] = 401;
            $request['type'] = 'Expired';
            $request['message'] = 'The token has expired';
            $request['detail'] = $exception->getMessage();
            $request['meta'] = $this->metadata;
            return Response::json(['error' => $request]);
        });

        $this->renderable(function (QueryException $exception) {
            $request['title'] = 'Database Error';
            $request['code'] = 'DB001';            
            $request['status'] = 500;
            $request['type'] = 'Database Error';
            $request['message'] = 'Database Error';
            $request['detail'] = $exception->getMessage();
            $request['meta'] = $this->metadata;
            return Response::json(['error' => $request]);
        });

        $this->renderable(function (TokenInvalidException $exception) {
            $request['title'] = 'Invalid Token';
            $request['code'] = 'TIE001';            
            $request['status'] = 401;
            $request['type'] = 'Invalid Token';
            $request['message'] = 'The token is invalid';
            $request['detail'] = $exception->getMessage();
            $request['meta'] = $this->metadata;
            return Response::json(['error' => $request]);
        });

    }
}
