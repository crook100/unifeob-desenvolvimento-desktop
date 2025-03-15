@extends('layouts.dashboard')

@section('header')
    <i class="fas fa-box"></i> Produtos <a href="/products/create" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>
        Criar produto</a>
@endsection

@section('content')
    <script>
        function Edit(id, quantity) {
            $("#edit_form").attr("action", `/products/${id}`);
            $("#old_quantity").val(quantity);
            $("#edit_modal").modal("show");
        }

        function Delete(id) {
            Swal.fire({
                title: 'Você realmente deseja excluir esse produto?',
                showCancelButton: true,
                confirmButtonText: 'Sim',
                cancelButtonText: 'Voltar',
                denyButtonColor: "#0d6efd",
                confirmButtonColor: "#dc3545"
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#delete_form").attr("action", `/products/${id}`);
                    $("#delete_form").submit();
                } else if (result.isDenied) {

                }
            });
        }
    </script>

    @include('dataTable', [
        'table_id' => 'table_products',
        'models' => $products,
        'order' => '0',
        'searching' => 'false',
        'paging' => 'false',
        'info' => 'false',
        'order_type' => 'desc',
        'columns' => [
            'id' => [
                'header' => 'ID do produto',
                'order' => function ($model) {
                    return date_create($model->created_at)->getTimestamp();
                },
                'model_function' => function ($model) {
                    return str_pad($model->id, 6, '0', STR_PAD_LEFT);
                },
            ],
            'name' => [
                'header' => 'Nome',
            ],
            'quantity' => [
                'header' => 'Estoque',
            ],
            'description' => [
                'header' => 'Descrição',
            ],
            'created_at' => [
                'header' => 'Data criação',
                'model_function' => function ($model) {
                    return date_create($model->created_at)->format('d/m/Y') .
                        '<br>' .
                        date_create($model->created_at)->format('H:i:s');
                },
            ],
        ],
        'action_column' => function ($model) {
            return '
        <button onclick="Edit(\''.$model->id.'\',\''.$model->quantity.'\');" title="Alterar estoque" class="btn btn-sm btn-success"><i class="fas fa-pen"></i></button>
        <a href="/products/'.$model->id.'/historic" title="Histórico" class="btn btn-sm btn-primary"><i class="fas fa-history"></i></a>
        <button onclick="Delete(\''.$model->id.'\');" title="Excluir" class="btn btn-sm btn-danger"><i class="fas fa-trash-can"></i></button>
        ';
        },
    ])

    <form id="delete_form" action="/products/delete" method="post">
        @csrf
        @method('DELETE')
    </form>

    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="edit_modal" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar quantidade</h5>
                </div>
                <form id="edit_form" method="POST" action="/products/edit">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <label class="w-100">
                                    Nova quantidade
                                    <input id="old_quantity" class="form-control" type="number" name="quantity">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" class="btn btn-danger">Voltar</button>
                        <input class="btn btn-success" type="submit" value="Alterar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <p class="text-muted mb-0">Os dados são atualizados junto com a pagina.</p>
@endsection
