<?php

namespace Nesk\Puphpeteer\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method string url()
 * @method mixed continueRequestOverrides()
 * @method mixed|null responseForRequest()
 * @method mixed|null abortErrorReason()
 * @method mixed interceptResolutionState()
 * @method bool isInterceptResolutionHandled()
 * @method void enqueueInterceptAction(callable(): null|mixed $pendingHandler)
 * @method void finalizeInterceptions()
 * @method mixed resourceType()
 * @method string method()
 * @method string|null postData()
 * @method array<string, string> headers()
 * @method \Nesk\Puphpeteer\Resources\HTTPResponse|null response()
 * @method \Nesk\Puphpeteer\Resources\Frame|null frame()
 * @method bool isNavigationRequest()
 * @method mixed initiator()
 * @method \Nesk\Puphpeteer\Resources\HTTPRequest[] redirectChain()
 * @method array{ errorText: string }|null failure()
 * @method void continue(mixed $overrides = null, float $priority = null)
 * @method void respond(mixed $response, float $priority = null)
 * @method void abort(mixed $errorCode = null, float $priority = null)
 */
class HTTPRequest extends BasicResource
{
    //
}
