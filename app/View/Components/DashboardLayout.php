<?php

namespace App\View\Components;

use App\Models\{Profile,User};
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'Dashboard ' . config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $profile = Profile::where('users_id', auth()->user()->id)->with('regional')->get();
        $notif = User::where('isActive', 0)->count();

        return view('components.dashboard-page')->with(compact([
            'profile','notif'
        ]));
    }
}
