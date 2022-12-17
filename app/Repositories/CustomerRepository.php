<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'first_name',
        'last_name',
        'phone',
        'city',
        'zip',
        'updated_date',
        'registered_date',
        'removed_date',
        'active',
        'manager',
        'site',
        'image',
        'shift_start',
        'shift_end',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Customer::class;
    }
}
