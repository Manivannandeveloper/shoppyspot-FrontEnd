<?php
namespace App\Application\Output;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Output
 *
 * @package App\Application\Output
 */
final class Output
{
    /**
     * Success
     *
     * @param array $response
     *
     * @return JsonResponse
     */
    static public function throwSuccess(array $response = []): JsonResponse
    {
        return JsonResponse::create($response, 200);
    }

    /**
     * @param  array  $response
     * @return JsonResponse
     */
    static public function throwCreated(array $response = []): JsonResponse
    {
        return JsonResponse::create($response, 201);
    }

    /**
     * No Content
     *
     * @param array $response
     *
     * @return JsonResponse
     */
    static public function throwNoContent(array $response = []): JsonResponse
    {
         return JsonResponse::create($response, 204);
    }

    /**
     * Http method not allowed
     *
     * @param string $msg
     *
     * @return JsonResponse
     */
    static public function methodNotAllowed(string $msg = ''): JsonResponse
    {
         return JsonResponse::create(array(
            "error" => [
                "code" => 405,
                "message" => $msg,
            ],
        ), 405);
    }

    /**
     * Bad Request
     *
     * @param string $msg
     *
     * @return JsonResponse
     */
    static public function throwErrorBadRequest(string $msg = ''): JsonResponse
    {
        return JsonResponse::create(array(
            "error" => [
                "code" => 400,
                "message" => $msg,
            ],
        ), 400);
    }

    /**
     * Unauthorized
     *
     * @param string $msg
     *
     * @return JsonResponse
     */
    static public function throwErrorUnauthorized(string $msg = ''): JsonResponse
    {
         return JsonResponse::create(array(
            "error" => [
                "code" => 401,
                "message" => $msg,
            ],
        ), 401);
    }

    /**
     * Not Acceptable
     *
     * @param string $msg
     *
     * @return JsonResponse
     */
    static public function throwErrorNotAcceptable(string $msg = ''): JsonResponse
    {
        return JsonResponse::create(array(
            "error" => [
                "code" => 406,
                "message" => $msg,
            ],
        ), 406);
    }

    /**
     * @param  string  $msg
     * @return JsonResponse
     */
    static public function unprocessableEntity(string $msg = ''): JsonResponse
    {
        return new JsonResponse([
            'error' => [
                "code" => 422,
                "message" => $msg
            ]
        ]);
    }


    public static function throwInternalServerError(array $responseMsg = []): JsonResponse
    {
        return JsonResponse::create($responseMsg, 500);
    }

    /**
     * General Error
     *
     * @param string $msg
     *
     * @return JsonResponse
     */
    static public function throwError(string $msg = ''): JsonResponse
    {
        return JsonResponse::create([
            "error" => [
                "code" => 501,
                "message" => $msg,
            ],
        ], 501);
    }

    /**
     * _ONLY FOR DEBUG PURPOSES
     *
     * @param  array  $param
     * @param  bool  $die
     *
     * @return JsonResponse
     */
    static public function debug(array $param = [], bool $die = true): void
    {
        echo '<pre>';
            print_r($param);
        echo '</pre>';

        if ($die) {
            die('die!');
        }
    }

    /**
     * _ONLY FOR DEBUG PURPOSES
     *
     * @param array $response
     *
     * @return JsonResponse
     */
    static public function throwDebugAsJsonResponse(string $msg = ''): JsonResponse
    {
        return JsonResponse::create(["debug" => $msg], 200);
    }
}