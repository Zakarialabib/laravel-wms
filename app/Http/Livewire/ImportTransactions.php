<?php

namespace App\Http\Livewire;

use App\Csv;
use Validator;
use Livewire\Component;
use App\Models\Transaction;
use Livewire\WithFileUploads;

class ImportTransactions extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $upload;
    public $columns;
    public $fieldColumnMap = [
        'title' => '',
        'amount' => '',
        'status' => '',
        'date_for_editing' => '',
    ];

    protected $rules = [
        'fieldColumnMap.title' => 'required',
        'fieldColumnMap.amount' => 'required',
    ];

    protected $customAttributes = [
        'fieldColumnMap.title' => 'title',
        'fieldColumnMap.amount' => 'amount',
    ];

    public function updatingUpload($value)
    {
        Validator::make(
            ['upload' => $value],
            ['upload' => 'required|mimes:txt,csv'],
        )->validate();
    }

    public function updatedUpload()
    {
        $this->columns = Csv::from($this->upload)->columns();

        $this->guessWhichColumnsMapToWhichFields();
    }

    public function import()
    {
        $this->validate();

        $importCount = 0;

        Csv::from($this->upload)
            ->eachRow(function ($row) use (&$importCount) {
                Transaction::create(
                    $this->extractFieldsFromRow($row)
                );

                $importCount++;
            });

        $this->reset();

        $this->emit('refreshTransactions');

        $this->notify('Imported '.$importCount.' transactions!');
    }

    public function extractFieldsFromRow($row)
    {
        $attributes = collect($this->fieldColumnMap)
            ->filter()
            ->mapWithKeys(function($heading, $field) use ($row) {
                return [$field => $row[$heading]];
            })
            ->toArray();

        return $attributes + ['status' => 'success', 'date_for_editing' => now()];
    }

    public function guessWhichColumnsMapToWhichFields()
    {
        $guesses = [
            'title' => ['title', 'label'],
            'amount' => ['amount', 'price'],
            'status' => ['status', 'state'],
            'date_for_editing' => ['date_for_editing', 'date', 'time'],
        ];

        foreach ($this->columns as $column) {
            $match = collect($guesses)->search(fn($options) => in_array(strtolower($column), $options));

            if ($match) $this->fieldColumnMap[$match] = $column;
        }
    }
}
