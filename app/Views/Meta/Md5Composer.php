<?php

namespace App\Views\Meta;

use Illuminate\View\View;

class Md5Composer
{

    protected $meta = [];

    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->meta['seo'] = [];
        $this->meta['seo']['name'] = 'Pete Houston Md5';
        $this->meta['seo']['description'] = 'Personal homepage of Pete Houston, a full-stack software engineer';
        $this->meta['seo']['image_url'] = 'https://petehouston.com/img/bg.jpg';

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('meta', $this->meta);
    }
}
