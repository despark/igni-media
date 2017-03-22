<?php


namespace Despark\Cms\Media\Fields;

use Despark\Cms\Contracts\AssetsContract;
use Despark\Cms\Fields\Field;

class Media extends Field
{

    /**
     * @var AssetsContract
     */
    protected $assetManager;

    /**
     * Media constructor.
     * @param AssetsContract $assetManager
     */
    function __construct(AssetsContract $assetManager)
    {
        $this->assetManager = $assetManager;
        $this->assetManager->addCss('colorbox/colorbox.css');
        $this->assetManager->addJs('colorbox/jquery.colorbox-min.js');
        $this->assetManager->addJs('packages/barryvdh/elfinder/js/standalonepopup.min.js');
    }

    /**
     * @return AssetsContract
     */
    public function getAssetManager(): AssetsContract
    {
        return $this->assetManager;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        if (! isset($this->template)) {
            $this->template = $this->getOptions('template', 'ignicms-media::media');
        }

        return $this->template;
    }

}