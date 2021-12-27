<?php

namespace App\DataTables;

use App\Models\Artical;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Like;

class CountLikeDatatable extends DataTable
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
            ->addColumn('action', 'countlikedatatable.action')

            ->editColumn('category_id', function ($data) {
                $data = Category::where('id', $data->category_id)->first();
                return $data->name;
            })

            ->editColumn('subcategory_id', function ($data) {
                $data = Subcategory::where('id', $data->subcategory_id)->first();
                return $data->name;
            })

            ->editColumn('number_of_likes', function ($data) {
                $Like = Like::select('id')->where('article_id', $data->id)->pluck('id')->toArray();
                return count(collect($Like));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\CountLikeDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Artical $model)
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
            ->setTableId('countlikedatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
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
            Column::make('id'),
            Column::make('category_id'),
            Column::make('subcategory_id'),
            Column::make('article'),
            Column::make('number_of_likes')
            // Column::computed('action')
            //       ->exportable(false)
            //       ->printable(false)
            //       ->width(60)
            //       ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'CountLike_' . date('YmdHis');
    }
}
