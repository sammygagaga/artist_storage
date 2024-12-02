<?php

use \Symfony\Component\HttpFoundation\JsonResponse;

function responseOk():JsonResponse
{
    return response()->json([
        'status' => 'success',
    ],200);
}

function responseCreated():JsonResponse
{
    return response()->json([
        'status' => 'create',
    ],201);
}

function responseDestroy():JsonResponse
{
    return response()->json([
        'status' => 'delete',
    ],200);
}
function responseFailed(string $message, int $code = 400):JsonResponse
{
    return response()->json([
        'status' => 'failed',
        'message' => $message,

    ],$code);
}

