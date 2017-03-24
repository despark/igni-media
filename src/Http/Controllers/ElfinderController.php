<?php


namespace Despark\Cms\Media\Http\Controllers;


use Despark\Cms\Contracts\AssetsContract;
use Despark\Cms\Http\Controllers\Controller;

/**
 * Class ElfinderController.
 */
class ElfinderController extends Controller
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
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function load($id)
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
            $this->assetManager->addJs('elfinder/js/i18n/elfinder'.$locale.'.js');
        }

        $data = compact('locale', 'id');

        return view('ignicms-media::elfinder.view', $data);
    }

}