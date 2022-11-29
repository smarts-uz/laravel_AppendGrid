<?php

namespace App\View\Components;

use App\Models\TgUser;
use Illuminate\Http\Client\Request;
use Illuminate\View\Component;
use ReflectionClass;
namespace App\View\Components;


class laravelAppendGrid extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $users = collect(TgUser::pluck('first_name', 'id')->all())->all();
        return view('components.AppendGrid', ['users' => $users]);
    }
}
