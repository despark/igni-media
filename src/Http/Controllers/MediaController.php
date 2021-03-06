<?php


namespace Despark\Cms\Media\Http\Controllers;


use Despark\Cms\Contracts\AssetsContract;
use Despark\Cms\Http\Controllers\Controller;
use Illuminate\Http\Request;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;

class MediaController extends Controller
{
    /**
     * @var AssetsContract
     */
    private $assetManager;

    /**
     * ElfinderController constructor.
     * @param AssetsContract $assetManager
     */
    function __construct(AssetsContract $assetManager)
    {
        $this->assetManager = $assetManager;
    }

    /**
     * @param Request $request
     * @param         $path
     * @return mixed
     */
    public function get(Request $request, $path)
    {
        $server = ServerFactory::create([
            'source' => app('filesystem')->disk('private')->getDriver(),
            'cache' => storage_path('glide'),
            'response' => new LaravelResponseFactory(app('request')),
            'source_path_prefix' => 'elfinder',
        ]);

        return $server->getImageResponse($path, $request->all());
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loadModal($id)
    {
        if (env('APP_DEBUG', false)) {
            $this->assetManager->addCss('elfinder/css/elfinder.full.css');
            $this->assetManager->addCss('elfinder/themes/Material/theme-gray.css');
            $this->assetManager->addJs('elfinder/js/elfinder.full.js');
        } else {
            $this->assetManager->addCss('elfinder/css/elfinder.min.css');
            $this->assetManager->addCss('elfinder/themes/Material/theme-gray.css');
            $this->assetManager->addJs('elfinder/js/elfinder.min.js');
        }
        $locale = \App::getLocale();

        if ($locale) {
            $this->assetManager->addJs('elfinder/js/i18n/elfinder.'.$locale.'.js');
        }

        $data = compact('locale', 'id');

        return view('ignicms-media::modal', $data);
    }

}