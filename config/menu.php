<?php

use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Html;
use Spatie\Menu\Laravel\Link;

//Menu::macro('fullsubmenuexample', function () {
//    return Menu::new()->prepend('<a href="#"><span> Multilevel PROVA </span> <i class="fa fa-angle-left pull-right"></i></a>')
//        ->addParentClass('treeview')
//        ->add(Link::to('/link1prova', 'Link1 prova'))->addClass('treeview-menu')
//        ->add(Link::to('/link2prova', 'Link2 prova'))->addClass('treeview-menu')
//        ->url('http://www.google.com', 'Google');
//});

Menu::macro('adminlteSubmenu', function ($submenuName) {
    return Menu::new()->prepend('<a href="#"><span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')->addClass('treeview-menu');
});
Menu::macro('adminlteMenu', function () {
    return Menu::new()
        ->addClass('sidebar-menu')->setAttribute('data-widget','tree');
});
Menu::macro('adminlteSeparator', function ($title) {
    return Html::raw($title)->addParentClass('header');
});

Menu::macro('adminlteDefaultMenu', function ($content) {
    return Html::raw('<i class="fa fa-link"></i><span>' . $content . '</span>')->html();
});

Menu::macro('menu_admin', function () {
    return Menu::adminlteMenu()
        ->action('HomeController@index', '<i class="fa fa-home"></i><span>Inicio</span>')
        ->add(Menu::adminlteSeparator('Mantenimiento'))
        ->action('HomeController@index','<i class="fa fa-file-zip-o"></i><span>ETL</span>')
        // Usuarios
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-users"></i><span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->route('usuario.index','<i class="fa fa-list"></i><span>Lista</span>')->addClass('treeview-menu')
            ->route('usuario.create','<i class="fa fa-plus"></i><span>Nuevo</span>')
        )
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-floppy-o"></i><span>Backup</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->route('usuario.index','<i class="fa fa-arrow-circle-up"></i><span>Importar</span>')->addClass('treeview-menu')
            ->route('usuario.create','<i class="fa fa-arrow-circle-down"></i><span>Exportar</span>')
        )
//        ->add(Menu::adminlteSeparator('Facturacion'))
//        ->link('http://www.acacha.org', Menu::adminlteDefaultMenu('Another link'))
//        ->link('http://www.acacha.org', Menu::adminlteDefaultMenu('Another link'))
//        ->add(Menu::adminlteSeparator('Reportes'))
//        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-share"></i><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>')
//            ->addParentClass('treeview')
//            ->add(Link::to('/link1', 'Link1'))->addClass('treeview-menu')
//            ->add(Link::to('/link2', 'Link2'))
//            ->url('http://www.google.com', 'Google')
//            ->add(Menu::new()->prepend('<a href="#"><span>Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i></a>')
//                ->addParentClass('treeview')
//                ->add(Link::to('/link21', 'Link21'))->addClass('treeview-menu')
//                ->add(Link::to('/link22', 'Link22'))
//                ->url('http://www.google.com', 'Google')
//            )
//        )
        ->setActiveFromRequest();
});

Menu::macro('menu_estrategico', function () {
    return Menu::adminlteMenu()
        ->action('HomeController@index', '<i class="fa fa-home"></i><span>Inicio</span>')
        ->add(Menu::adminlteSeparator('Reportes'))
//        ->action('HomeController@index','<i class="fa fa-file-zip-o"></i><span>ETL</span>')
        // Usuarios
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-cube"></i><span>Estratégicos</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->route('estrategico.1.parametros','<i class="fa fa-file-text-o"></i><span>Cuentas por Cobrar</span>')->addClass('treeview-menu')
            ->route('estrategico.2.parametros','<i class="fa fa-file-text-o"></i><span>Productos mas vendidos</span>')
            ->route('estrategico.3.parametros','<i class="fa fa-file-text-o"></i><span>Margen de ganancia</span>')
            ->route('estrategico.4.parametros','<i class="fa fa-file-text-o"></i><span>Compras dos meses</span>')
            ->route('estrategico.5.parametros','<i class="fa fa-file-text-o"></i><span>Ventas dos meses</span>')
        )
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-cubes"></i><span>Tácticos</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->route('tactico.1.parametros','<i class="fa fa-file-text-o"></i><span>Ventas por categoria</span>')->addClass('treeview-menu')
            ->route('tactico.2.parametros','<i class="fa fa-file-text-o"></i><span>Ventas por cliente</span>')
            ->route('tactico.3.parametros','<i class="fa fa-file-text-o"></i><span>Ventas por vendedor</span>')
            ->route('tactico.4.parametros','<i class="fa fa-file-text-o"></i><span>Compras por proveedor</span>')
            ->route('tactico.5.parametros','<i class="fa fa-file-text-o"></i><span>Cuentas por Cobrar por cliente</span>')
            ->route('tactico.6.parametros','<i class="fa fa-file-text-o"></i><span>Ganancia por categoría</span>')
        )
        ->setActiveFromRequest();
});

Menu::macro('menu_tactico', function () {
    return Menu::adminlteMenu()
        ->action('HomeController@index', '<i class="fa fa-home"></i><span>Inicio</span>')
        ->add(Menu::adminlteSeparator('Reportes'))
//        ->action('HomeController@index','<i class="fa fa-file-zip-o"></i><span>ETL</span>')
        // Reportes
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-floppy-o"></i><span>Tácticos</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->route('usuario.index','<i class="fa fa-file-text-o"></i><span>Ventas por categoria</span>')->addClass('treeview-menu')
            ->route('usuario.create','<i class="fa fa-file-text-o"></i><span>Ventas por cliente</span>')
            ->route('usuario.create','<i class="fa fa-file-text-o"></i><span>Ventas por vendedor</span>')
            ->route('usuario.create','<i class="fa fa-file-text-o"></i><span>Compras por proveedor</span>')
            ->route('usuario.create','<i class="fa fa-file-text-o"></i><span>Cuentas por Cobrar por cliente</span>')
            ->route('usuario.create','<i class="fa fa-file-text-o"></i><span>Ganancia por categoría</span>')
        )
        ->setActiveFromRequest();
});

