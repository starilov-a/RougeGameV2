<?php


namespace App\Http\Controllers;


use App\Services\Telegram;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function index(Request $request, Telegram $telegram, ButtonController $buttonController) {
        $json = json_decode($request->getContent());

        $message = $userId = '';
        if (isset($json->message)) {
            $userId = $json->message->from->id;
            $message = $json->message->text;
        }

        list($message, $messageBtn) = $buttonController->index($message, $userId);

        $telegram->sendMessage($userId, $message, $messageBtn);
    }
}
