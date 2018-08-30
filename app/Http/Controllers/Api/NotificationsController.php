<?php

namespace App\Http\Controllers\Api;


use App\Transformers\NotificationTransformer;

class NotificationsController extends Controller
{
    public function index()
    {
        $notifications = $this->user->notifications()->paginate(3);

        return $this->response->paginator($notifications, new NotificationTransformer());
    }
}
