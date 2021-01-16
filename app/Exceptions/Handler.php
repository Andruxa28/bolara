<?php

namespace Orange\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
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
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {


        $this->check_redirect($request->path());
        if($this->isHttpException($exception)){

            switch ($exception->getStatusCode()) {

                case 404:

                    return redirect()->route('404');

                    break;

                case 405:

                    return redirect()->route('405');

                    break;

            }

        }


        return parent::render($request, $exception);
    }
    public function check_redirect($path){

        $redirects[1] = array(
            'old'=>'asd',
            'new'=>'online-credit',
            'code'=>301
        );

        foreach($redirects as $key=>$item){
            if($path == $item['old']){
                return redirect(route($item['new']), $item['code']);
            }
        }
    }
}
