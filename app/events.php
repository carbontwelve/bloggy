<?php

/** @var \Carbontwelve\Admin\Libraries\Menu\Menu $menuProvider */
Event::listen('menu.register', function($menuProvider)
{
    $dashboardMenuItem          = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardMenuItem->text    = 'Configuration';
    $dashboardMenuItem->href    = '#';
    $dashboardMenuItem->icon    = 'glyphicon-wrench';
    $dashboardMenuItem->importance = 99;

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Taxonomy Units';
    $dashboardChildItem->href   = route('administration.taxonomy.units.index');
    $dashboardMenuItem->addChild($dashboardChildItem);

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Taxons';
    $dashboardChildItem->href   = route('administration.taxonomy.taxons.index');
    $dashboardMenuItem->addChild($dashboardChildItem);

    $menuProvider->register($dashboardMenuItem, 'configuration');

    $dashboardMenuItem          = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardMenuItem->text    = 'Dashboard';
    $dashboardMenuItem->href    = route('administration.dashboard');
    $dashboardMenuItem->icon    = 'glyphicon-th';
    $dashboardMenuItem->importance = 0;

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Network';
    $dashboardChildItem->href   = route('administration.network.index');
    $dashboardChildItem->importance = 2;
    $dashboardMenuItem->addChild($dashboardChildItem);

    $menuProvider->register($dashboardMenuItem, 'dashboard');

    $dashboardMenuItem          = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardMenuItem->text    = 'Articles';
    $dashboardMenuItem->href    = '#';
    $dashboardMenuItem->icon    = 'glyphicon-book';
    $dashboardMenuItem->importance = 10;

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Author new article';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'List articles';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Comments';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $menuProvider->register($dashboardMenuItem, 'articles');

    $dashboardMenuItem          = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardMenuItem->text    = 'Pages';
    $dashboardMenuItem->href    = '#';
    $dashboardMenuItem->icon    = 'glyphicon-file';
    $dashboardMenuItem->importance = 15;

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Author new page';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'List pages';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $menuProvider->register($dashboardMenuItem, 'pages');

    $dashboardMenuItem          = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardMenuItem->text    = 'Comments';
    $dashboardMenuItem->href    = '#';
    $dashboardMenuItem->icon    = 'glyphicon-comment';
    $dashboardMenuItem->importance = 20;

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'List Comments';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Statistics';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $menuProvider->register($dashboardMenuItem, 'comments');

    $dashboardMenuItem          = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardMenuItem->text    = 'Media';
    $dashboardMenuItem->href    = '#';
    $dashboardMenuItem->icon    = 'glyphicon-film';
    $dashboardMenuItem->importance = 25;

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Browse media';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Upload';
    $dashboardChildItem->href   = '#';
    $dashboardMenuItem->addChild($dashboardChildItem);

    $menuProvider->register($dashboardMenuItem, 'media');

    $dashboardMenuItem          = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardMenuItem->text    = 'Appearance';
    $dashboardMenuItem->href    = '#';
    $dashboardMenuItem->icon    = 'glyphicon-eye-open';
    $dashboardMenuItem->importance = 30;

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Theme';
    $dashboardChildItem->href   = '#';
    $dashboardChildItem->importance = 0;
    $dashboardMenuItem->addChild($dashboardChildItem);

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Theme Settings';
    $dashboardChildItem->href   = '#';
    $dashboardChildItem->importance = 5;
    $dashboardMenuItem->addChild($dashboardChildItem);

    $dashboardChildItem         = new \Carbontwelve\Admin\Libraries\Menu\MenuItem();
    $dashboardChildItem->text   = 'Widgets';
    $dashboardChildItem->href   = '#';
    $dashboardChildItem->importance = 10;
    $dashboardMenuItem->addChild($dashboardChildItem);

    $menuProvider->register($dashboardMenuItem, 'appearance');

});
