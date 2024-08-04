<?php

namespace App\DataTables\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Jishadp\SaasLeadModule\Models\Lead;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class LeadDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($model){
                return '<a href="#" class="btn btn-primary editModal">Edit</a>
                <a href="#" class="btn btn-danger waves-effect waves-light deleteAction">Delete</a>';
            })
            ->addColumn('serial_number', function ($row) {
                static $counter = 0;
                $counter++;
                return request('start')+$counter;
            })
            ->addColumn('full_name', function ($row) {
                return $row->fname." ".$row->lname;
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Lead $model): QueryBuilder
    {
        return $model->latest('id');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('users-table')
                    ->columns($this->getColumns())
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('serial_number')->title('Sr.No')->width(50),
            Column::make('full_name')->title('Name'),
            Column::make('mobile'),
            Column::make('email'),
            Column::computed('action')
            ->exportable(true)
            ->printable(true)
            ->width(190)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Leads_' . date('YmdHis');
    }
}
