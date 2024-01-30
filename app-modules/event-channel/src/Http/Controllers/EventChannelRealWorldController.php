<?php

namespace Modules\EventChannel\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\EventChannel\RealWorld\EventChannel;
use Modules\EventChannel\RealWorld\Publisher;
use Modules\EventChannel\RealWorld\Subscriber;

class EventChannelRealWorldController extends Controller
{
    public function __invoke(EventChannel $newsChannel)
    {
        $highgardenGroup = new Publisher('highgarden', $newsChannel);

        $winterfellNews = new Publisher('winterfell-news', $newsChannel);
        $winterfellDaily = new Publisher('winterfell-news', $newsChannel);

        $sansa = new Subscriber('Sansa Stark');
        $arya = new Subscriber('Arya Stark');
        $cersei = new Subscriber('Cersei Lannister');
        $snow = new Subscriber('Jon Snow');

        $newsChannel->subscribe('highgarden', $cersei);
        $newsChannel->subscribe('winterfell-news', $sansa);

        $newsChannel->subscribe('highgarden', $arya);
        $newsChannel->subscribe('winterfell-news', $arya);

        $newsChannel->subscribe('winterfell-news', $snow);

        $highgardenGroup->publish('highgarden', 'New highgarden post');
        $winterfellNews->publish('winterfell-news', 'Winter is coming!');
        $winterfellDaily->publish('winterfell-news', 'Winter is coming again!');
    }
}
