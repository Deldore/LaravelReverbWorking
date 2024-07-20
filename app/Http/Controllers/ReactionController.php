<?php

namespace App\Http\Controllers;

use App\Events\ReactedEvent;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function reaction()
    {
        event(
            new ReactedEvent(
                buttonId: \request()->input('buttonId'),
                emoji: \request()->input('emoji'),
            )
        );
        dd(\request()->input('buttonId'));
    }
}
