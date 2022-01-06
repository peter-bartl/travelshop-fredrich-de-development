<?php

namespace Custom\MediaType;

use Pressmind\ORM\Object\MediaType\AbstractMediaType;
use Pressmind\ORM\Object\MediaObject\DataType;

/**
 * Class Ort
 * @property integer $id
 * @property integer $id_media_object
 * @property string $language
 * @property DataType\Categorytree[] $zielgebiet_default
 * @property DataType\Picture[] $bilder_default
 * @property string $headline_default
 * @property string $newsletter_preline_default
 * @property string $beschreibung_default
 * @property string $newsletter_headline_default
 * @property string $newsletter_subline_default
 * @property string $newsletter_termin_default
 * @property string $newsletter_beschreibung_default
 * @property string $newsletter_preis_default
 */
class Ort extends AbstractMediaType {
protected $_definitions = [
    'class' => [
        'name' => 'Ort',
    ],
    'database' => [
        'table_name' => 'objectdata_828',
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
        'headline_default' => [
            'name' => 'headline_default',
            'title' => 'headline_default',
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
        'beschreibung_default' => [
            'name' => 'beschreibung_default',
            'title' => 'beschreibung_default',
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
        'newsletter_subline_default' => [
            'name' => 'newsletter_subline_default',
            'title' => 'newsletter_subline_default',
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
        'newsletter_beschreibung_default' => [
            'name' => 'newsletter_beschreibung_default',
            'title' => 'newsletter_beschreibung_default',
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
    ],
];}