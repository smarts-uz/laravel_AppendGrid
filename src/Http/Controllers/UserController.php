<?php

namespace App\Http\Controllers;

use App\Services\MadelineProto\Database\HRMProjectsService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUsers(HRMProjectsService $service, Request $request, $project, $role) {
        $service->addUsers($request->input('user_id'), $role);
        return response()->json(['success' => 1]);
    }
}
