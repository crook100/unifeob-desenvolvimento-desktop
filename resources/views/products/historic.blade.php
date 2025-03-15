@extends('layouts.dashboard')

@section('header')
<i class="fas fa-box"></i> Histórico de: {{ $product->name }}
@endsection

@section('content')

@include('dataTable', [
    'table_id' => 'table_historic',
    'models' => $historic,
    'order' => "0",
    'searching' => "false",
    'paging' => "false",
    'info' => "false",
    'order_type' => "desc",
    'columns' => [
        "id" => [
            "header" => "ID",
            "order" => function ($model){ return date_create($model->created_at)->getTimestamp(); },
        ],
        "operation" => [
            "header" => "Operação",
            "model_function" => function ($model){ return $model->operation == 1 ? "Adição" : "Subtração"; }
        ],
        "quantity" => [
            "header" => "Quantidade"
        ],
        "created_at" => [
            "header" => "Data",
            "model_function" => function ($model){ return date_create($model->created_at)->format("d/m/Y") . "<br>" . date_create($model->created_at)->format("H:i:s") ; }
        ],
    ],
])
@endsection

@section('footer')
<p class="text-muted mb-0">Os dados são atualizados junto com a pagina.</p>
@endsection
