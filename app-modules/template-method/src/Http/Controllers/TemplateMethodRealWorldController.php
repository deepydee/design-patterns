<?php

namespace Modules\TemplateMethod\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\TemplateMethod\RealWorld\Facebook;
use Modules\TemplateMethod\RealWorld\Twitter;

class TemplateMethodRealWorldController extends Controller
{
    public function __invoke()
    {
        $username = 'Mike Zimmermann';
        $password = '12345';
        $message = 'Hello, I\'m Mike.';

        $choice = 2;

        // Теперь давайте создадим правильный объект социальной сети и отправим
        // сообщение.
        if ($choice == 1) {
            $network = new Facebook($username, $password);
        } elseif ($choice == 2) {
            $network = new Twitter($username, $password);
        } else {
            exit("Sorry, I'm not sure what you mean by that.<br>");
        }

        $network->post($message);
    }
}
