<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/seance' => [[['_route' => 'app_seance_index', '_controller' => 'App\\Controller\\SeanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/seance/list' => [[['_route' => 'app_seance_list', '_controller' => 'App\\Controller\\SeanceController::list'], null, ['GET' => 0], null, false, false, null]],
        '/seance/new' => [[['_route' => 'app_seance_new', '_controller' => 'App\\Controller\\SeanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/seance/All/seances/json' => [[['_route' => 'app_seance_getlist', '_controller' => 'App\\Controller\\SeanceController::getList'], null, null, null, false, false, null]],
        '/seance/Add/seance/json' => [[['_route' => 'AddSeance', '_controller' => 'App\\Controller\\SeanceController::AddSeanceJSON'], null, null, null, false, false, null]],
        '/seance/delete/seance/json' => [[['_route' => 'supprimer_seance', '_controller' => 'App\\Controller\\SeanceController::supprimerSeance'], null, null, null, false, false, null]],
        '/skill' => [[['_route' => 'app_skill_index', '_controller' => 'App\\Controller\\SkillController::index'], null, ['GET' => 0], null, true, false, null]],
        '/skill/tri' => [[['_route' => 'app_skill_tri', '_controller' => 'App\\Controller\\SkillController::tri'], null, ['GET' => 0], null, false, false, null]],
        '/skill/new' => [[['_route' => 'app_skill_new', '_controller' => 'App\\Controller\\SkillController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/skill/All/skills/json' => [[['_route' => 'app_skill_getlist', '_controller' => 'App\\Controller\\SkillController::getList'], null, null, null, false, false, null]],
        '/skill/Add/skill/json' => [[['_route' => 'AddSkills', '_controller' => 'App\\Controller\\SkillController::AddSkillsJSON'], null, null, null, false, false, null]],
        '/skill/delete/skill/json' => [[['_route' => 'supprimer_skill', '_controller' => 'App\\Controller\\SkillController::supprimerSkill'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/s(?'
                    .'|eance/(?'
                        .'|([^/]++)(?'
                            .'|(*:32)'
                            .'|/edit(*:44)'
                            .'|(*:51)'
                        .')'
                        .'|edit/seance/json/(\\d+)(*:81)'
                    .')'
                    .'|kill/(?'
                        .'|list/seance/([^/]++)(*:117)'
                        .'|([^/]++)(?'
                            .'|(*:136)'
                            .'|/edit(*:149)'
                            .'|(*:157)'
                        .')'
                        .'|edit/skill/json/([^/]++)(*:190)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:231)'
                    .'|wdt/([^/]++)(*:251)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:297)'
                            .'|router(*:311)'
                            .'|exception(?'
                                .'|(*:331)'
                                .'|\\.css(*:344)'
                            .')'
                        .')'
                        .'|(*:354)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_seance_show', '_controller' => 'App\\Controller\\SeanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_seance_edit', '_controller' => 'App\\Controller\\SeanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_seance_delete', '_controller' => 'App\\Controller\\SeanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        81 => [[['_route' => 'seance_modifier', '_controller' => 'App\\Controller\\SeanceController::editSeance'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        117 => [[['_route' => 'app_skill_seance', '_controller' => 'App\\Controller\\SkillController::listbyseance'], ['id'], ['GET' => 0], null, false, true, null]],
        136 => [[['_route' => 'app_skill_show', '_controller' => 'App\\Controller\\SkillController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        149 => [[['_route' => 'app_skill_edit', '_controller' => 'App\\Controller\\SkillController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        157 => [[['_route' => 'app_skill_delete', '_controller' => 'App\\Controller\\SkillController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        190 => [[['_route' => 'editSkills', '_controller' => 'App\\Controller\\SkillController::EditSkillsJSON'], ['id'], null, null, false, true, null]],
        231 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        251 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        297 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        311 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        331 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        344 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        354 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
