<?php

namespace App\Containers\Indicator\Repositories;

use App\Containers\Indicator\Models\Indicator;
use App\Ship\Abstracts\Repositories\Repository;

class IndicatorRepository extends Repository
{
    protected $fieldSearchable = [
        'name'  => 'like',
        'email' => '=',
    ];

    public function getFaculties()
    {
        return Indicator::all();
    }

    public function getIndicator($id)
    {
        return Indicator::find($id);
    }

    public function update(array $attributes, $id)
    {
        return parent::update($attributes, $id); // TODO: Change the autogenerated stub
    }
}
