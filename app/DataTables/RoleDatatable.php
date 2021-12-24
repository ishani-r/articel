<?php

namespace App\DataTables;

use App\Models\Role;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use App\Models\RoleHasPermission;

class RoleDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
        ->eloquent($query)
        // ->addColumn('action', 'roledatatable.action');
        ->addColumn('action', function($data){
            $result = '<div class="btn-group">';
            // $result .= '<a href="'.route('admin.premium.show',$data->id).'"><button class="btn-sm btn-outline-warning" style="border-radius: 2.1875rem;"><i class="fa fa-eye" aria-hidden="true"></i></button></a>';
            $result .= '<a href="'.route('admin.role.edit',$data->id).'"><button class="btn-sm btn-outline-info" style="border-radius: 2.1875rem;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>';
            $result .= '<button type="submit" data-id="'.$data->id.'" class="btn-sm btn-outline-danger delete" style="border-radius: 2.1875rem;"><i class="fa fa-trash" aria-hidden="true"></i></button></form></div>';
            return $result;
        })
        
        
        
            ->editColumn('permission', function ($a) {
                $a = RoleHasPermission::all();
                dd($a);

            })

            // ->editColumn('status', function ($data) {
            //     if($data['status'] == 'Active')
            //     {
            //         return '<button type="button" data-id="'.$data->id.'" class="badge rounded-pill bg-success status"> Active </button>';
            //     }else{
            //         return '<button type="button" data-id="'.$data->id.'" class="badge rounded-pill bg-danger status"> Deactive </button>';
            //     }
            // })

            ->rawColumns(['action','permission'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\RoleDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Role $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('roledatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->data('DT_RowIndex'),
            Column::make('name'),
            Column::make('permission'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Role_' . date('YmdHis');
    }
}