<?php

namespace App\Repositories;

use App\Models\Skill;

/**
 * Class SkillRepository
 * @package App\Repositories
 * @version June 22, 2020, 5:43 am UTC
 */
class SkillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
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
        return Skill::class;
    }
}
