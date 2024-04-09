<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestIndexRequest;
use Illuminate\Http\JsonResponse;

/**
 * @group Test
 * 
 * APIs for test.
 */
class TestController extends Controller
{
    /**
     * Test index
     * 
     * @queryParam name string required Name description. Example: Jason
     * @queryParam age int required Age description. Example: 17
     * 
     * @response 204
     * @response scenario=success {
     *  "id": 4,
     *  "name": "Jessica Jones"
     * }
     * @response status=404 scenario="user not found" {"message": "User not found"}
     */
    public function index(TestIndexRequest $request): JsonResponse
    {
        return response()->json([
            'name' => 'Abigail in controller',
            'state' => 'CA in controller',
        ]);
    }
}
