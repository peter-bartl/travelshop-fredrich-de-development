<?php

namespace Custom\MediaType;

use Pressmind\ORM\Object\MediaType\AbstractMediaType;
use Pressmind\ORM\Object\MediaObject\DataType;

/**
 * Class Unterkunft
 * @property integer $id
 * @property integer $id_media_object
 * @property string $language
 * @property DataType\Categorytree[] $zielgebiet_default
 * @property DataType\File[] $pdf_download_default
 * @property DataType\Link[] $video_default
 * @property DataType\Picture[] $bilder_default
 * @property string $title_default
 * @property string $headline_default
 * @property string $leistungen_default
 * @property string $newsletter_preline_default
 * @property string $meta_description_default
 * @property string $einleitung_default
 * @property string $newsletter_headline_default
 * @property DataType\Categorytree[] $reisekategorie_default
 * @property string $beschreibung_text_default
 * @property string $newsletter_subline_default
 * @property DataType\Location[] $geodaten_default
 * @property string $vorteile_default
 * @property string $newsletter_termin_default
 * @property DataType\Categorytree[] $kategorie_hotel_default
 * @property string $dauer_default
 * @property string $newsletter_beschreibung_default
 * @property string $ab_preis_default
 * @property string $newsletter_preis_default
 * @property DataType\Link[] $website_default
 */
class Unterkunft extends AbstractMediaType {
protected $_definitions = [
    'class' => [
        'name' => 'Unterkunft',
    ],
    'database' => [
        'table_name' => 'objectdata_745',
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
        'pdf_download_default' => [
            'name' => 'pdf_download_default',
            'title' => 'pdf_download_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\File',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'pdf_download_default',
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
        'leistungen_default' => [
            'name' => 'leistungen_default',
            'title' => 'leistungen_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'newsletter_preline_default' => [
            'name' => 'newsletter_preline_default',
            'title' => 'newsletter_preline_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'meta_description_default' => [
            'name' => 'meta_description_default',
            'title' => 'meta_description_default',
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
        'newsletter_headline_default' => [
            'name' => 'newsletter_headline_default',
            'title' => 'newsletter_headline_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'reisekategorie_default' => [
            'name' => 'reisekategorie_default',
            'title' => 'reisekategorie_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Categorytree',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'reisekategorie_default',
                ],
            ],
        ],
        'beschreibung_text_default' => [
            'name' => 'beschreibung_text_default',
            'title' => 'beschreibung_text_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'newsletter_subline_default' => [
            'name' => 'newsletter_subline_default',
            'title' => 'newsletter_subline_default',
            'type' => 'string',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
        ],
        'geodaten_default' => [
            'name' => 'geodaten_default',
            'title' => 'geodaten_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Location',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'geodaten_default',
                ],
            ],
        ],
        'vorteile_default' => [
            'name' => 'vorteile_default',
            'title' => 'vorteile_default',
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
        'kategorie_hotel_default' => [
            'name' => 'kategorie_hotel_default',
            'title' => 'kategorie_hotel_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Categorytree',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'kategorie_hotel_default',
                ],
            ],
        ],
        'dauer_default' => [
            'name' => 'dauer_default',
            'title' => 'dauer_default',
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
        'ab_preis_default' => [
            'name' => 'ab_preis_default',
            'title' => 'ab_preis_default',
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
        'website_default' => [
            'name' => 'website_default',
            'title' => 'website_default',
            'type' => 'relation',
            'required' => false,
            'validators' => NULL,
            'filters' => NULL,
            'relation' => [
                'type' => 'hasMany',
                'class' => '\\Pressmind\\ORM\\Object\\MediaObject\\DataType\\Link',
                'related_id' => 'id_media_object',
                'filters' => [
                    'var_name' => 'website_default',
                ],
            ],
        ],
    ],
];}