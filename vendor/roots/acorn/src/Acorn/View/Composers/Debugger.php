<?php

namespace Roots\Acorn\View\Composers;

use Roots\Acorn\Application;
use Roots\Acorn\View\Composer;

class Debugger
{
    /**
     * Create a new Debugger instance.
     *
     * @param \Roots\Acorn\Application $app
     */
    public function __construct(Application $app)
    {
        $this->debugLevel = $app['config']['view.debug'];
    }

    /**
     * Compose the view before rendering.
     *
     * @param  \Illuminate\View\View $view
     * @return void
     */
    public function compose($view)
    {
        $name = $view->getName();

        if ($this->debugLevel === 'view') {
            var_dump($name);
            return;
        }

        $data = array_map(function ($value) {
            if (is_object($value)) {
                return get_class($value);
            }

            return $value;
        }, $view->getData());

        if ($this->debugLevel === 'data') {
            var_dump($data);
            return;
        }

        var_dump(['view' => $name, 'data' => $data]);
    }
}
