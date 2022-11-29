<?php

namespace App\View\Components;

use Illuminate\Http\Client\Request;
use Illuminate\View\Component;
use ReflectionClass;


class laravelAppendGrid extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $url;
    public $ctrlOptions;
    public string $name;
    public string $display;
    public string $element;
    public function __construct(string $url,$ctrlOptions,$element, string $name, string $display)
    {
        $this->url = $url;
        $this->name = $name;
        $this->display = $display;
        $this->ctrlOptions = $ctrlOptions;
        $this->element = $element;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.AppendGrid');
    }
}
