<?php
require 'bootstrap.php';

/**
 * StudipgamePlugin.class.php
 *
 * ...
 *
 * @author  tgloeggl@uos.de
 * @version 0.1a
 */

class StudipGame extends StudIPPlugin implements SystemPlugin {

    public function __construct() {
        parent::__construct();

        $navigation = new AutoNavigation(_('StudipGame'));
        $navigation->setURL(PluginEngine::getURL($this, array(), 'index'));
        Navigation::addItem('/studipgame', $navigation);

        PageLayout::addScript($this->getPluginURL() . '/assets/skills.js');
        PageLayout::addScript($this->getPluginURL() . '/assets/skills_layout.js');
        PageLayout::addScript($this->getPluginURL() . '/assets/skills_fromJSON.js');
        $this->addStylesheet('/assets/style.less');
    }

    public function initialize () {

    }

    public function perform($unconsumed_path)
    {
        $this->setupAutoload();
        $dispatcher = new Trails_Dispatcher(
            $this->getPluginPath() . '/app',
            rtrim(PluginEngine::getLink($this, array(), null), '/'),
            'index'
        );
        $dispatcher->plugin = $this;
        $dispatcher->dispatch($unconsumed_path);
    }

    private function setupAutoload()
    {
        if (class_exists('StudipAutoloader')) {
            StudipAutoloader::addAutoloadPath(__DIR__ . '/app/models');
        } else {
            spl_autoload_register(function ($class) {
                include_once __DIR__ . $class . '.php';
            });
        }
    }
}
