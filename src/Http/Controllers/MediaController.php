<?php


namespace Despark\Cms\Media\Http\Controllers;


use Illuminate\Http\Request;
use League\Glide\ServerFactory;

class MediaController
{

    public function get(Request $request, $path)
    {
        $server = ServerFactory::create([
            'source' => app('filesystem')->disk('public')->getDriver(),
            'cache' => storage_path('glide'),
        ]);
        return $server->getImageResponse($path, $request->all());
    }

}