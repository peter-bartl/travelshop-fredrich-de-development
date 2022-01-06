<?php
$config = [
    'development' => [
        'server' => [
            'document_root' => 'BASE_PATH',
            'webserver_http' => 'https://development-fredrich-de.pressmind.dev',
            'php_cli_binary' => '/usr/bin/php7.4',
            'timezone' => 'Europe/Berlin',
        ],
        'database' => [
            'username' => 'wc_143_development',
            'password' => '60h1iVKKJw8t',
            'host' => '127.0.0.1',
            'port' => '3306',
            'dbname' => 'wc_143_development',
            'engine' => 'MySQL',
        ],
        'rest' => [
            'client' => [
                'api_endpoint' => 'https://webcore.pressmind.net/v2-1/rest/',
                'api_key' => '09f3b68171c765c2a0f6fdd642ba6a19',
                'api_user' => 'fredrich.de@pressmind-travelshop',
                'api_password' => '71601e3084b472be573536ecdec58237',
            ],
            'server' => [
                'api_endpoint' => '/wp-content/themes/travelshop/rest',
                'api_key' => '',
                'api_user' => '',
                'api_password' => '',
            ],
        ],
        'tmp_dir' => 'APPLICATION_PATH/tmp',
        'docs_dir' => 'APPLICATION_PATH/docs',
        'logging' => [
            'mode' => [
                0 => 'ERROR',
            ],
            'categories' => [
                0 => 'ALL',
            ],
            'storage' => 'database',
            'log_file_path' => 'APPLICATION_PATH/logs',
            'error_email_address' => 'john.doe@local',
            'lifetime' => 86400,
            'keep_log_types' => [
                0 => 'ERROR',
            ],
            'enable_advanced_object_log' => false,
            'enable_database_query_logging' => false,
            'database_query_log_file' => 'APPLICATION_PATH/logs/db_query_log.txt',
        ],
        'debug' => [
            'mode' => 'on',
            'ip_addresses' => [
                0 => '127.0.0.1',
            ],
        ],
        'data' => [
            'touristic' => [
                'origins' => [
                    0 => '0',
                ],
                'my_content_class_map' => [
                ],
                'disable_touristic_data_import' => [
                ],
            ],
            'media_type_custom_import_hooks' => [
            ],
            'primary_media_type_ids' => [
                0 => 746,
                1 => 748,
            ],
            'media_types' => [
                745 => 'Unterkunft',
                746 => 'Reise',
                747 => 'Textbaustein',
                748 => 'Tagesfahrt',
                828 => 'Ort',
            ],
            'media_types_pretty_url' => [
                745 => [
                    'prefix' => '/unterkunft/',
                    'field' => [
                        'name' => 'name',
                    ],
                    'strategy' => 'none',
                    'suffix' => '/',
                ],
                746 => [
                    'prefix' => '/reise/',
                    'field' => [
                        'name' => 'name',
                    ],
                    'strategy' => 'none',
                    'suffix' => '/',
                ],
                747 => [
                    'prefix' => '/textbaustein/',
                    'field' => [
                        'name' => 'name',
                    ],
                    'strategy' => 'none',
                    'suffix' => '/',
                ],
                748 => [
                    'prefix' => '/tagesfahrt/',
                    'field' => [
                        'name' => 'name',
                    ],
                    'strategy' => 'none',
                    'suffix' => '/',
                ],
                828 => [
                    'prefix' => '/ort/',
                    'field' => [
                        'name' => 'name',
                    ],
                    'strategy' => 'none',
                    'suffix' => '/',
                ],
            ],
            'media_types_fulltext_index_fields' => [
                745 => [
                    'name' => 'name',
                    'code' => 'code',
                    'tags' => 'tags',
                    'zielgebiet_default' => 'zielgebiet_default',
                    'pdf_download_default' => 'pdf_download_default',
                    'video_default' => 'video_default',
                    'bilder_default' => 'bilder_default',
                    'title_default' => 'title_default',
                    'headline_default' => 'headline_default',
                    'leistungen_default' => 'leistungen_default',
                    'newsletter_preline_default' => 'newsletter_preline_default',
                    'meta_description_default' => 'meta_description_default',
                    'einleitung_default' => 'einleitung_default',
                    'newsletter_headline_default' => 'newsletter_headline_default',
                    'reisekategorie_default' => 'reisekategorie_default',
                    'beschreibung_text_default' => 'beschreibung_text_default',
                    'newsletter_subline_default' => 'newsletter_subline_default',
                    'geodaten_default' => 'geodaten_default',
                    'vorteile_default' => 'vorteile_default',
                    'newsletter_termin_default' => 'newsletter_termin_default',
                    'kategorie_hotel_default' => 'kategorie_hotel_default',
                    'dauer_default' => 'dauer_default',
                    'newsletter_beschreibung_default' => 'newsletter_beschreibung_default',
                    'ab_preis_default' => 'ab_preis_default',
                    'newsletter_preis_default' => 'newsletter_preis_default',
                    'website_default' => 'website_default',
                ],
                746 => [
                    'name' => 'name',
                    'code' => 'code',
                    'tags' => 'tags',
                    'optionen_default' => 'optionen_default',
                    'video_default' => 'video_default',
                    'textbaustein_default' => 'textbaustein_default',
                    'unterkunft_default' => 'unterkunft_default',
                    'bilder_default' => 'bilder_default',
                    'title_default' => 'title_default',
                    'headline_default' => 'headline_default',
                    'leistungen_headline_default' => 'leistungen_headline_default',
                    'preline_default' => 'preline_default',
                    'website_ausgabe_default' => 'website_ausgabe_default',
                    'reiseart_default' => 'reiseart_default',
                    'googlemaps_default' => 'googlemaps_default',
                    'karte_default' => 'karte_default',
                    'meta_description_default' => 'meta_description_default',
                    'subline_default' => 'subline_default',
                    'leistungen_default' => 'leistungen_default',
                    'saison_default' => 'saison_default',
                    'meta_keywords_default' => 'meta_keywords_default',
                    'headline_aufpreise_default' => 'headline_aufpreise_default',
                    'einleitung_default' => 'einleitung_default',
                    'zielgebiet_default' => 'zielgebiet_default',
                    'meta_robots_default' => 'meta_robots_default',
                    'beschreibung_headline_default' => 'beschreibung_headline_default',
                    'newsletter_termin_default' => 'newsletter_termin_default',
                    'aufpreise_default' => 'aufpreise_default',
                    'meta_revisit_default' => 'meta_revisit_default',
                    'taxi_ja' => 'taxi_ja',
                    'beschreibung_text_default' => 'beschreibung_text_default',
                    'newsletter_beschreibung_default' => 'newsletter_beschreibung_default',
                    'header_source_code_default' => 'header_source_code_default',
                    'fruehzahlerrabatt_default' => 'fruehzahlerrabatt_default',
                    'newsletter_preis_default' => 'newsletter_preis_default',
                    'footer_source_code_default' => 'footer_source_code_default',
                    'url_default' => 'url_default',
                ],
                747 => [
                    'name' => 'name',
                    'code' => 'code',
                    'tags' => 'tags',
                    'text_default' => 'text_default',
                ],
                748 => [
                    'name' => 'name',
                    'code' => 'code',
                    'tags' => 'tags',
                    'saison_default' => 'saison_default',
                    'video_default' => 'video_default',
                    'bilder_default' => 'bilder_default',
                    'meta_description_default' => 'meta_description_default',
                    'headline_default' => 'headline_default',
                    'zielgebiet_default' => 'zielgebiet_default',
                    'title_default' => 'title_default',
                    'subline_default' => 'subline_default',
                    'reiseart_default' => 'reiseart_default',
                    'beschreibung_headline_default' => 'beschreibung_headline_default',
                    'beschreibung_text_default' => 'beschreibung_text_default',
                ],
                828 => [
                    'name' => 'name',
                    'code' => 'code',
                    'tags' => 'tags',
                    'zielgebiet_default' => 'zielgebiet_default',
                    'bilder_default' => 'bilder_default',
                    'headline_default' => 'headline_default',
                    'newsletter_preline_default' => 'newsletter_preline_default',
                    'beschreibung_default' => 'beschreibung_default',
                    'newsletter_headline_default' => 'newsletter_headline_default',
                    'newsletter_subline_default' => 'newsletter_subline_default',
                    'newsletter_termin_default' => 'newsletter_termin_default',
                    'newsletter_beschreibung_default' => 'newsletter_beschreibung_default',
                    'newsletter_preis_default' => 'newsletter_preis_default',
                ],
            ],
            'sections' => [
                'allowed' => [
                    0 => 'Default',
                ],
                'default' => 'Default',
                'fallback' => 'Default',
                'fallback_on_empty_values' => true,
                'replace' => [
                    'regular_expression' => NULL,
                    'replacement' => NULL,
                ],
            ],
            'languages' => [
                'allowed' => [
                    0 => 'de',
                ],
                'default' => 'de',
            ],
            'preview_url' => '/examples/detail.php?id={{id_media_object}}&preview={{preview}}',
            'search_mongodb' => [
                'enabled' => true,
                'database' => [
                    'uri' => 'mongodb://wc_ws_11_development:HlN5J7z56iaC@127.0.0.1:27017/wc_ws_11_development?authSource=admin&readPreference=primary&ssl=false',
                    'db' => 'wc_ws_11_development',
                ],
                'search' => [
                    'build_for' => [
                        746 => [
                            0 => [
                                'language' => NULL,
                                'origin' => 0,
                            ],
                        ],
                        748 => [
                            0 => [
                                'language' => NULL,
                                'origin' => 0,
                            ],
                        ],
                    ],
                    'code_delimiter' => ',',
                    'categories' => [
                        746 => [
                            'optionen_default' => NULL,
                            'website_ausgabe_default' => NULL,
                            'reiseart_default' => NULL,
                            'saison_default' => NULL,
                            'zielgebiet_default' => NULL,
                        ],
                        748 => [
                            'saison_default' => NULL,
                            'zielgebiet_default' => NULL,
                            'reiseart_default' => NULL,
                        ],
                    ],
                    'descriptions' => [
                        746 => [
                            'headline' => [
                                'field' => 'name',
                                'from' => NULL,
                                'filter' => NULL,
                            ],
                            'image' => [
                                'field' => 'bilder_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::firstPicture',
                                'params' => [
                                    'derivative' => 'teaser',
                                ],
                            ],
                            'bigslide' => [
                                'field' => 'bilder_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::firstPicture',
                                'params' => [
                                    'derivative' => 'bigslide',
                                ],
                            ],
                            'travel_type' => [
                                'field' => 'reiseart_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::lastTreeItemAsString',
                            ],
                            'subline' => [
                                'field' => 'subline_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::strip',
                            ],
                            'intro' => [
                                'field' => 'einleitung_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::strip',
                            ],
                            'destination' => [
                                'field' => 'zielgebiet_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::lastTreeItemAsString',
                            ],
                        ],
                        748 => [
                            'headline' => [
                                'field' => 'name',
                                'from' => NULL,
                                'filter' => NULL,
                            ],
                            'image' => [
                                'field' => 'bilder_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::firstPicture',
                                'params' => [
                                    'derivative' => 'teaser',
                                ],
                            ],
                            'bigslide' => [
                                'field' => 'bilder_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::firstPicture',
                                'params' => [
                                    'derivative' => 'bigslide',
                                ],
                            ],
                            'destination' => [
                                'field' => 'zielgebiet_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::lastTreeItemAsString',
                            ],
                            'subline' => [
                                'field' => 'subline_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::strip',
                            ],
                            'travel_type' => [
                                'field' => 'reiseart_default',
                                'from' => NULL,
                                'filter' => '\\Custom\\Filter::lastTreeItemAsString',
                            ],
                        ],
                    ],
                    'five_dates_per_month_list' => false,
                    'possible_duration_list' => false,
                    'touristic' => [
                        'departure_offset_from' => 14,
                        'departure_offset_to' => 365,
                        'match_valid_from_to' => false,
                        'occupancies' => [
                            0 => 1,
                            1 => 2,
                            2 => 3,
                            3 => 4,
                            4 => 5,
                            5 => 6,
                        ],
                        'occupancy_additional' => [
                            0 => 1,
                            1 => 2,
                        ],
                        'duration_ranges' => [
                            0 => [
                                0 => 1,
                                1 => 3,
                            ],
                            1 => [
                                0 => 4,
                                1 => 7,
                            ],
                            2 => [
                                0 => 8,
                                1 => 99,
                            ],
                        ],
                    ],
                ],
            ],
            'media_types_allowed_visibilities' => [
                745 => [
                    0 => 30,
                ],
                746 => [
                    0 => 30,
                ],
                747 => [
                    0 => 30,
                ],
                748 => [
                    0 => 30,
                ],
                828 => [
                    0 => 30,
                ],
            ],
        ],
        'cache' => [
            'enabled' => false,
            'adapter' => [
                'name' => 'Redis',
                'config' => [
                    'host' => '127.0.0.1',
                    'port' => 6379,
                    'connection_string' => NULL,
                ],
            ],
            'key_prefix' => 'DATABASE_NAME',
            'disable_parameter' => [
                'key' => 'no_cache',
                'value' => 1,
            ],
            'update_parameter' => [
                'key' => 'update_cache',
                'value' => 1,
            ],
            'types' => [
                0 => 'REST',
                1 => 'SEARCH',
                2 => 'SEARCH_FILTER',
                3 => 'OBJECT',
            ],
            'update_frequency' => 3600,
            'max_idle_time' => 86400,
        ],
        'view_scripts' => [
            'base_path' => 'APPLICATION_PATH/template-parts/pm-views',
        ],
        'scaffolder_templates' => [
            'overwrite_existing_templates' => false,
            'base_path' => 'APPLICATION_PATH/template-parts/pm-views/scaffolder',
        ],
        'file_handling' => [
            'processor' => [
            ],
            'storage' => [
                'provider' => 'filesystem',
                'bucket' => 'WEBSERVER_DOCUMENT_ROOT/wp-content/uploads/pressmind/downloads',
                'credentials' => [
                ],
            ],
            'http_src' => 'WEBSERVER_HTTP/wp-content/uploads/pressmind/downloads',
        ],
        'image_handling' => [
            'processor' => [
                'adapter' => 'ImageMagick',
                'webp_support' => true,
                'derivatives' => [
                    'thumbnail' => [
                        'max_width' => 125,
                        'max_height' => 83,
                        'preserve_aspect_ratio' => true,
                        'crop' => true,
                        'horizontal_crop' => 'center',
                        'vertical_crop' => 'center',
                        'webp_create' => true,
                        'webp_quality' => 80,
                    ],
                    'teaser' => [
                        'max_width' => 250,
                        'max_height' => 170,
                        'preserve_aspect_ratio' => true,
                        'crop' => true,
                        'horizontal_crop' => 'center',
                        'vertical_crop' => 'center',
                        'webp_create' => true,
                        'webp_quality' => 80,
                    ],
                    'detail_thumb' => [
                        'max_width' => 180,
                        'max_height' => 180,
                        'preserve_aspect_ratio' => true,
                        'crop' => true,
                        'horizontal_crop' => 'center',
                        'vertical_crop' => 'center',
                        'webp_create' => true,
                        'webp_quality' => 80,
                    ],
                    'detail' => [
                        'max_width' => 610,
                        'max_height' => 385,
                        'preserve_aspect_ratio' => true,
                        'crop' => true,
                        'horizontal_crop' => 'center',
                        'vertical_crop' => 'center',
                        'webp_create' => true,
                        'webp_quality' => 80,
                    ],
                    'detail_gallery' => [
                        'max_width' => 1200,
                        'max_height' => 750,
                        'preserve_aspect_ratio' => true,
                        'crop' => true,
                        'horizontal_crop' => 'center',
                        'vertical_crop' => 'center',
                        'webp_create' => true,
                        'webp_quality' => 80,
                    ],
                    'bigslide' => [
                        'max_width' => 1980,
                        'max_height' => 600,
                        'preserve_aspect_ratio' => true,
                        'crop' => true,
                        'horizontal_crop' => 'center',
                        'vertical_crop' => 'center',
                        'webp_create' => true,
                        'webp_quality' => 80,
                    ],
                ],
            ],
            'storage' => [
                'provider' => 'filesystem',
                'bucket' => 'WEBSERVER_DOCUMENT_ROOT/wp-content/uploads/pressmind/images',
                'credentials' => [
                ],
            ],
            'http_src' => 'WEBSERVER_HTTP/wp-content/uploads/pressmind/images',
        ],
        'scheduled_tasks' => [
            0 => [
                'name' => 'Log Clean Up',
                'class_name' => '\\Pressmind\\Log\\Service',
                'schedule' => [
                    'type' => 'Daily',
                    'time' => 'Fixed',
                    'value' => '23:30',
                    'max_running_time_in_minutes' => 1440,
                ],
                'methods' => [
                    0 => [
                        'method' => 'cleanUp',
                        'parameters' => NULL,
                        'position' => 1,
                    ],
                ],
            ],
            1 => [
                'name' => 'Cache Clean Up',
                'class_name' => '\\Pressmind\\Cache\\Service',
                'schedule' => [
                    'type' => 'Minutely',
                    'time' => 'Period',
                    'value' => '5',
                    'max_running_time_in_minutes' => 1440,
                ],
                'methods' => [
                    0 => [
                        'method' => 'cleanUp',
                        'parameters' => NULL,
                        'position' => 1,
                    ],
                ],
            ],
        ],
    ],
    'testing' => [
    ],
    'production' => [
    ],
];