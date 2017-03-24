<?php


namespace Despark\Cms\Media\Fields;

use Despark\Cms\Contracts\AssetsContract;
use Despark\Cms\Fields\Field;
use Despark\Cms\Javascript\Contracts\RegistryContract;

/**
 * Class Media.
 */
class Media extends Field
{

    /**
     * @var AssetsContract
     */
    protected $assetManager;

    /**
     * @var string
     */
    protected $mediaId;

    /**
     * @var RegistryContract
     */
    protected $jsRegistry;

    /**
     * Media constructor.
     * @param AssetsContract $assetManager
     */
    function __construct(AssetsContract $assetManager, RegistryContract $jsRegistry)
    {
        $this->assetManager = $assetManager;
        $this->assetManager->addCss('colorbox/colorbox.css');
        $this->assetManager->addJs('colorbox/jquery.colorbox-min.js');
        $this->assetManager->addJs('igni-media/igni-media.js');

        $this->jsRegistry = $jsRegistry;
    }

    /**
     * @return string
     */
    public function getModalRoute()
    {
        return route('media.modal.load', ['id' => $this->getMediaId()]);
    }

    /**
     * @return string
     */
    public function getMediaId()
    {
        if (! isset($this->mediaId)) {
            $this->mediaId = uniqid('media-');
        }

        return $this->mediaId;
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