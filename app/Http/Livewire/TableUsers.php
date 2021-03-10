<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
//use Mediconesystems\LivewireDatatables\DateColumn;
//use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TableUsers extends LivewireDatatable
{
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';

    public $model = User::class;

    public function columns()
    {
        return [

            Column::name('name')
                ->filterable()
                ->searchable(),

            Column::name('email')
                ->filterable()
                ->searchable(),


        ];
    }
}
