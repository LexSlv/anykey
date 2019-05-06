<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<aside class="main-sidebar">
    <section class="sidebar"><i class="fas fa-star"></i>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Settings:', 'options' => ['class' => 'header']],
                    ['label' => 'Text blocks', 'icon' => 'fas fa-file-alt"', 'url' => ['/admin/text-blocks']],
                    ['label' => 'Content:', 'options' => ['class' => 'header']],
                    ['label' => 'Menu', 'icon' => 'fas fa-bars', 'url' => ['/admin/menu']],
                    ['label' => 'Meta tags', 'icon' => 'fas fa-code', 'url' => ['/admin/meta']],
                    ['label' => 'Pages:', 'options' => ['class' => 'header']],
                    ['label' => 'Start page', 'icon' => 'fas fa-star', 'url' => ['/admin/start-pages']],
                    ['label' => 'About', 'icon' => 'fas fa-address-card', 'url' => ['/admin/team']],
                    ['label' => 'Locations', 'icon' => 'fas fa-compass', 'url' => ['/admin/locations']],
                    ['label' => 'Works', 'icon' => 'fas fa-fire-alt', 'url' => ['/admin/works/']],
                    ['label' => 'Images:', 'options' => ['class' => 'header']],
                    ['label' => 'Load works prev. image', 'icon' => 'fas fa-images', 'url' => ['/admin/works-imgs/']],
                    /*
                    ['label' => 'News', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/news']],
                    ['label' => 'About', 'icon' => 'fas fa-feather', 'url' => ['/admin/news']],
                    ['label' => 'Contacts', 'icon' => 'fas fa-address-card', 'url' => ['/admin/news']],
                    ['label' => 'Settings', 'icon' => 'far fa-cogs', 'url' => ['/admin/news']],
                    */
                    /*
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>
