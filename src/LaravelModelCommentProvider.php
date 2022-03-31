<?php

namespace TheJaneWorld\LaravelModelComment;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class LaravelModelCommentProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        Blueprint::macro('comment', function ($comment) {
            $this->charset =  DB::connection()->getConfig('charset') . " COMMENT='{$comment}'";
        });
    }

}
