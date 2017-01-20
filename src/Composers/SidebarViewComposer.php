<?php

namespace TypiCMS\Modules\Objects\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Sidebar\SidebarGroup;
use Maatwebsite\Sidebar\SidebarItem;

class SidebarViewComposer
{
    public function compose(View $view)
    {
        $view->sidebar->group(__('global.menus.content'), function (SidebarGroup $group) {
            $group->addItem(__('objects::global.name'), function (SidebarItem $item) {
                $item->id = 'objects';
                $item->icon = config('typicms.objects.sidebar.icon');
                $item->weight = config('typicms.objects.sidebar.weight');
                $item->route('admin::index-objects');
                $item->append('admin::create-object');
                $item->authorize(
                    Gate::allows('index-objects')
                );
            });
        });
    }
}
