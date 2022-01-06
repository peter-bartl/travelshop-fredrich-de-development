<?php

namespace Custom\MediaType;

use Pressmind\ORM\Object\MediaType\AbstractMediaType;
use Pressmind\ORM\Object\MediaObject\DataType;

/**
 * Class Reise
 * @property integer $id
 * @property integer $id_media_object
 * @property string $language
 * @property DataType\Categorytree[] $optionen_default
 * @property DataType\Link[] $video_default
 * @property DataType\Objectlink[] $textbaustein_default
 * @property DataType\Objectlink[] $unterkunft_default
 * @property DataType\Picture[] $bilder_default
 * @property string $title_default
 * @property string $headline_default
 * @property string $leistungen_headline_default
 * @property string $preline_default
 * @property DataType\Categorytree[] $website_ausgabe_default
 * @property DataType\Categorytree[] $reiseart_default
 * @property DataType\Location[] $googlemaps_default
 * @property DataType\Picture[] $karte_default
 * @property string $meta_description_default
 * @property string $subline_default
 * @property string $leistungen_default
 * @property DataType\Categorytree[] $saison_default
 * @property string $meta_keywords_default
 * @property string $headline_aufpreise_default
 * @property string $einleitung_default
 * @property DataType\Categorytree[] $zielgebiet_default
 * @property string $meta_robots_default
 * @property string $beschreibung_headline_default
 * @property string $newsletter_termin_default
 * @property string $aufpreise_default
 * @property string $meta_revisit_default
 * @property string $taxi_ja
 * @property string $beschreibung_text_default
 * @property string $newsletter_beschreibung_default
 * @property string $header_source_code_default
 * @property string $fruehzahlerrabatt_default
 * @property string $newsletter_preis_default
 * @property string $footer_source_code_default
 * @property string $url_default
 */
class Reise extends AbstractMediaType {
protected $_definitions = [
    'class' => [
        'name' => 'Reise',
    ],
    'database' => [
        'table_name' => 'objectdata_746',
        'primary_key' => 'id',
        'relation_key' => 'id_media_object',
    ],
    'properties' => [
        'id' => [
            'name' => 'id',
            'title' => 'id',
            'type' => 'integer',
            'required' => true,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'id_media_object' => [
            'name' => 'id_media_object',
            'title' => 'id_media_object',
            'type' => 'integer',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'index' => [
                'id_media_object' => 'index',
            ],
        ],
        'language' => [
            'name' => 'language',
            'title' => 'language',
            'type' => 'string',
            'required' => false,
            'validators' => [
                0 => [
                    'name' => 'maxlength',
                    'params' => 255,
                ],
            ],
            'filters' => NULL,
            'index' => [
                'language' => 'index',
            ],
        ],
        'optionen_default' => [
            'name' => 'optionen_default',
            'title' => 'optionen_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Categorytree',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'optionen_default',
                ],
            ],
        ],
        'video_default' => [
            'name' => 'video_default',
            'title' => 'video_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Link',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'video_default',
                ],
            ],
        ],
        'textbaustein_default' => [
            'name' => 'textbaustein_default',
            'title' => 'textbaustein_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Objectlink',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'textbaustein_default',
                ],
            ],
        ],
        'unterkunft_default' => [
            'name' => 'unterkunft_default',
            'title' => 'unterkunft_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Objectlink',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'unterkunft_default',
                ],
            ],
        ],
        'bilder_default' => [
            'name' => 'bilder_default',
            'title' => 'bilder_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Picture',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'bilder_default',
                    'section_name' => 'IS NULL',
                ],
            ],
        ],
        'title_default' => [
            'name' => 'title_default',
            'title' => 'title_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'headline_default' => [
            'name' => 'headline_default',
            'title' => 'headline_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'leistungen_headline_default' => [
            'name' => 'leistungen_headline_default',
            'title' => 'leistungen_headline_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'preline_default' => [
            'name' => 'preline_default',
            'title' => 'preline_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'website_ausgabe_default' => [
            'name' => 'website_ausgabe_default',
            'title' => 'website_ausgabe_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Categorytree',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'website_ausgabe_default',
                ],
            ],
        ],
        'reiseart_default' => [
            'name' => 'reiseart_default',
            'title' => 'reiseart_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Categorytree',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'reiseart_default',
                ],
            ],
        ],
        'googlemaps_default' => [
            'name' => 'googlemaps_default',
            'title' => 'googlemaps_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Location',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'googlemaps_default',
                ],
            ],
        ],
        'karte_default' => [
            'name' => 'karte_default',
            'title' => 'karte_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Picture',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'karte_default',
                    'section_name' => 'IS NULL',
                ],
            ],
        ],
        'meta_description_default' => [
            'name' => 'meta_description_default',
            'title' => 'meta_description_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'subline_default' => [
            'name' => 'subline_default',
            'title' => 'subline_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'leistungen_default' => [
            'name' => 'leistungen_default',
            'title' => 'leistungen_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'saison_default' => [
            'name' => 'saison_default',
            'title' => 'saison_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Categorytree',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'saison_default',
                ],
            ],
        ],
        'meta_keywords_default' => [
            'name' => 'meta_keywords_default',
            'title' => 'meta_keywords_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'headline_aufpreise_default' => [
            'name' => 'headline_aufpreise_default',
            'title' => 'headline_aufpreise_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'einleitung_default' => [
            'name' => 'einleitung_default',
            'title' => 'einleitung_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'zielgebiet_default' => [
            'name' => 'zielgebiet_default',
            'title' => 'zielgebiet_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Categorytree',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'zielgebiet_default',
                ],
            ],
        ],
        'meta_robots_default' => [
            'name' => 'meta_robots_default',
            'title' => 'meta_robots_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'beschreibung_headline_default' => [
            'name' => 'beschreibung_headline_default',
            'title' => 'beschreibung_headline_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'newsletter_termin_default' => [
            'name' => 'newsletter_termin_default',
            'title' => 'newsletter_termin_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'aufpreise_default' => [
            'name' => 'aufpreise_default',
            'title' => 'aufpreise_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'meta_revisit_default' => [
            'name' => 'meta_revisit_default',
            'title' => 'meta_revisit_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'taxi_ja' => [
            'name' => 'taxi_ja',
            'title' => 'taxi_ja',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'beschreibung_text_default' => [
            'name' => 'beschreibung_text_default',
            'title' => 'beschreibung_text_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'newsletter_beschreibung_default' => [
            'name' => 'newsletter_beschreibung_default',
            'title' => 'newsletter_beschreibung_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'header_source_code_default' => [
            'name' => 'header_source_code_default',
            'title' => 'header_source_code_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'fruehzahlerrabatt_default' => [
            'name' => 'fruehzahlerrabatt_default',
            'title' => 'fruehzahlerrabatt_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'newsletter_preis_default' => [
            'name' => 'newsletter_preis_default',
            'title' => 'newsletter_preis_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'footer_source_code_default' => [
            'name' => 'footer_source_code_default',
            'title' => 'footer_source_code_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'url_default' => [
            'name' => 'url_default',
            'title' => 'url_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
    ],
];}