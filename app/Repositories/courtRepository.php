<?php

namespace App\Repositories;

use App\Models\court;
use App\Repositories\BaseRepository;

/**
 * Class courtRepository
 * @package App\Repositories
 * @version March 31, 2025, 3:40 pm UTC
*/

class courtRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'surface',
        'floodlights',
        'indoor'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return court::class;
    }
}
