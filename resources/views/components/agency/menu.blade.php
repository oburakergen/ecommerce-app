<menu>
    @foreach($menu as $menus)
        <li class="{{ (request()->is(trim($menus->slug))) ? 'active' : '' }} menu-parent-item">
            <a href="{{ route(trim($menus->name)) }}"> {{ __($menus->lang) }}</a>
        </li>
    @endforeach
</menu>
