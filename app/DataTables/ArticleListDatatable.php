<?php

namespace App\DataTables;

use App\Models\Artical;
use App\Models\Category;
use App\Models\Subcategory;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ArticleListDatatable extends DataTable
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
            // ->addColumn('action', 'articlelistdatatable.action');
            ->addColumn('action', function ($data) {
                $result = '<div class="btn-group">';
                $result .= '<a href="' . route('admin.show_article', $data->id) . '"><button class="btn-sm btn-outline-warning" style="border-radius: 2.1875rem;"><i class="fa fa-eye" aria-hidden="true"></i></button></a>';
                $result .= '<a href="' . route('admin.edit_article', $data->id) . '"><button class="btn-sm btn-outline-info" style="border-radius: 2.1875rem;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>';
                $result .= '<button type="submit" data-id="' . $data->id . '" class="btn-sm btn-outline-danger delete" style="border-radius: 2.1875rem;"><i class="fa fa-trash" aria-hidden="true"></i></button>';
                return $result;
            })

            ->editColumn('status', function ($data) {
                if ($data['status'] == 'Active') {
                    return '<button type="button" data-id="' . $data->id . '" class="badge rounded-pill bg-success status"> Active </button>';
                } else {
                    return '<button type="button" data-id="' . $data->id . '" class="badge rounded-pill bg-danger status"> Deactive </button>';
                }
            })

            ->editColumn('category_id', function ($data) {
                $data = Category::where('id', $data->category_id)->first();
                return $data->name;
            })

            ->editColumn('subcategory_id', function ($data) {
                $data = Subcategory::where('id', $data->subcategory_id)->first();
                return $data->name;
            })

            ->filterColumn('category_id', function ($data, $keyword) {
                $sql = "categories.name like ?";
                $data->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->filterColumn('subcategory_id', function ($data, $keyword) {
                $sql = "subcategories.name like ?";
                $data->whereRaw($sql, ["%{$keyword}%"]);
            })

            ->rawColumns(['action', 'status'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ArticleListDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Artical $model)
    {
        $model = $model
            ->join('categories', 'categories.id', '=', 'articals.category_id')
            ->join('subcategories', 'subcategories.id', '=', 'articals.subcategory_id')
            ->select('articals.*', 'categories.name', 'subcategories.name')
            ->newQuery();
        return $model->with(['category', 'subcategory'])->newQuery();
        // return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('articlelistdatatable-table')
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
            Column::make('id'),
            Column::make('category_id')->searchable(),
            Column::make('subcategory_id')->searchable(),
            Column::make('article')->searchable(),
            Column::make('status'),
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
        return 'ArticleList_' . date('YmdHis');
    }
}
