<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <title>Desenvolvimento Desktop</title>
    <link rel="canonical" href="https://theiagod.com/">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Desenvolvimento Desktop">
    <meta property="og:description" content="Desenvolvimento Desktop">
    <meta property="og:url" content="https://theiagod.com/">
    <meta property="og:site_name" content="Desenvolvimento Desktop">
    <meta property="article:modified_time" content="2022-09-14T18:28:19+00:00">
    <meta property="og:image" content="https://theiagod.com/images/faviconx192.png">
    <meta property="og:image:width" content="192">
    <meta property="og:image:height" content="192">
    <meta property="og:image:type" content="image/png">
    <meta property="description" content="Desenvolvimento Desktop">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:label1" content="Est. tempo de leitura">
    <meta name="twitter:data1" content="5 minutos">
    <meta name="keywords" content="Desenvolvimento, Desktop" />
    <meta name="description" content="Desenvolvimento Desktop">

    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "@id": "https://theiagod.com/",
                "url": "https://theiagod.com/",
                "name": "Desenvolvimento Desktop",
                "thumbnailUrl": "https://theiagod.com/images/faviconx192.png",
                "datePublished": "2022-10-06T17:30:35+00:00",
                "dateModified": "2022-10-06T13:44:31+00:00",
                "description": "Desenvolvimento Desktop",
                "inLanguage": "pt-BR"
            }]
        }
    </script>

    <!-- / Yoast SEO plugin. -->
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="alternate" type="application/rss+xml" title="Desenvolvimento Desktop" href="https://theiagod.com/">

    <link rel="shortlink" href="https://theiagod.com/">

    <link rel="icon" href="/images/faviconx192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="/images/faviconx192.png">
    <meta name="msapplication-TileImage" content="/images/faviconx192.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href='https://fonts.googleapis.com/css?family=Poppins&display=swap' rel='stylesheet'>
    </noscript>

    <link rel="preload" href="/fonts/Poppins-Bold.ttf" as="font" crossorigin="anonymous" />
    <link rel="preload" href="/fonts/Poppins-ExtraBold.ttf" as="font" crossorigin="anonymous" />
    <link rel="preload" href="/fonts/Poppins-Medium.ttf" as="font" crossorigin="anonymous" />
    <link rel="preload" href="/fonts/Poppins-Regular.ttf" as="font" crossorigin="anonymous" />
    <link rel="preload" href="/fonts/Poppins-Thin.ttf" as="font" crossorigin="anonymous" />

    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/styles/jquery-ui.css">

    <script type="module" src="https://kit.fontawesome.com/11551bd62e.js" crossorigin="anonymous"></script>

    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/jquery-ui.js"></script>
    <script src="/scripts/jquery.dataTables.min.js"></script>
    <script src="/scripts/bootstrap-autocomplete.js"></script>
    <script src="/scripts/jquery.maskMoney.min.js" type="text/javascript"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        @font-face {
            font-family: Poppins-Thin;
            font-display: swap;
            src: url("/fonts/Poppins-Thin.ttf") format("truetype");
        }

        .Poppins-Thin {
            font-family: 'Poppins-Thin', 'Poppins', sans-serif;
        }

        @font-face {
            font-family: Poppins;
            font-display: swap;
            src: url("/fonts/Poppins-Regular.ttf") format("truetype");
        }

        .Poppins {
            font-family: 'Poppins', sans-serif;
        }

        @font-face {
            font-family: Poppins-Medium;
            font-display: swap;
            src: url("/fonts/Poppins-Medium.ttf") format("truetype");
        }

        .Poppins-Medium {
            font-family: 'Poppins-Medium', 'Poppins', sans-serif;
        }

        @font-face {
            font-family: Poppins-Bold;
            font-display: swap;
            src: url("/fonts/Poppins-Bold.ttf") format("truetype");
        }

        .Poppins-Bold {
            font-family: 'Poppins-Bold', 'Poppins', sans-serif;
        }

        @font-face {
            font-family: Poppins-ExtraBold;
            font-display: swap;
            src: url("/fonts/Poppins-ExtraBold.ttf") format("truetype");
        }

        .Poppins-ExtraBold {
            font-family: 'Poppins-ExtraBold', 'Poppins', sans-serif;
        }

        .popover-body {
            padding: 0em !important;
        }
    </style>

    <script>
        var BRLFormatter = new Intl.NumberFormat('pt-BR', {
            style: 'currency',
            currency: 'BRL',
        });

        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
            $('[data-bs-toggle="popover"]').popover();

            $('[data-bs-toggle="datalist-autocomplete"]').autocomplete()

            $.ajaxSetup({
                "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')}
            });

            $(".mask-money").maskMoney({
                prefix: 'R$ ',
                allowNegative: true,
                thousands: '.',
                decimal: ',',
                affixesStay: false
            });
            $("[title]").tooltip({
                trigger: "hover"
            });

            $("table[data-table=true]").each(function(index) {
                let order = ($(this).data('order') !== undefined ? parseInt($(this).data('order')) : 0);
                let order_type = ($(this).data('order-type') !== undefined ? $(this).data('order-type') :
                    "asc");

                let searching = ($(this).data('searching') !== undefined ? false : true);
                let paging = ($(this).data('paging') !== undefined ? false : true);
                let info = ($(this).data('info') !== undefined ? false : true);

                let table = $(this).DataTable({
                    "lengthMenu": [100, 200, 500, 1000, 5000],
                    "searching": searching,
                    "paging": paging,
                    "info": info,
                    "language": {
                        "emptyTable": "Nenhum registro encontrado",
                        "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                        "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                        "infoFiltered": "(Filtrados de _MAX_ registros)",
                        "infoThousands": ".",
                        "loadingRecords": "Carregando...",
                        "processing": "Processando...",
                        "zeroRecords": "Nenhum registro encontrado",
                        "search": "Pesquisar",
                        "paginate": {
                            "next": "Próximo",
                            "previous": "Anterior",
                            "first": "Primeiro",
                            "last": "Último"
                        },
                        "aria": {
                            "sortAscending": ": Ordenar colunas de forma ascendente",
                            "sortDescending": ": Ordenar colunas de forma descendente"
                        },
                        "select": {
                            "rows": {
                                "_": "Selecionado %d linhas",
                                "1": "Selecionado 1 linha"
                            },
                            "cells": {
                                "1": "1 célula selecionada",
                                "_": "%d células selecionadas"
                            },
                            "columns": {
                                "1": "1 coluna selecionada",
                                "_": "%d colunas selecionadas"
                            }
                        },
                        "buttons": {
                            "copySuccess": {
                                "1": "Uma linha copiada com sucesso",
                                "_": "%d linhas copiadas com sucesso"
                            },
                            "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                            "colvis": "Visibilidade da Coluna",
                            "colvisRestore": "Restaurar Visibilidade",
                            "copy": "Copiar",
                            "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                            "copyTitle": "Copiar para a Área de Transferência",
                            "csv": "CSV",
                            "excel": "Excel",
                            "pageLength": {
                                "-1": "Mostrar todos os registros",
                                "_": "Mostrar %d registros"
                            },
                            "pdf": "PDF",
                            "print": "Imprimir",
                            "createState": "Criar estado",
                            "removeAllStates": "Remover todos os estados",
                            "removeState": "Remover",
                            "renameState": "Renomear",
                            "savedStates": "Estados salvos",
                            "stateRestore": "Estado %d",
                            "updateState": "Atualizar"
                        },
                        "autoFill": {
                            "cancel": "Cancelar",
                            "fill": "Preencher todas as células com",
                            "fillHorizontal": "Preencher células horizontalmente",
                            "fillVertical": "Preencher células verticalmente"
                        },
                        "lengthMenu": "Exibir _MENU_ resultados por página",
                        "searchBuilder": {
                            "add": "Adicionar Condição",
                            "button": {
                                "0": "Construtor de Pesquisa",
                                "_": "Construtor de Pesquisa (%d)"
                            },
                            "clearAll": "Limpar Tudo",
                            "condition": "Condição",
                            "conditions": {
                                "date": {
                                    "after": "Depois",
                                    "before": "Antes",
                                    "between": "Entre",
                                    "empty": "Vazio",
                                    "equals": "Igual",
                                    "not": "Não",
                                    "notBetween": "Não Entre",
                                    "notEmpty": "Não Vazio"
                                },
                                "number": {
                                    "between": "Entre",
                                    "empty": "Vazio",
                                    "equals": "Igual",
                                    "gt": "Maior Que",
                                    "gte": "Maior ou Igual a",
                                    "lt": "Menor Que",
                                    "lte": "Menor ou Igual a",
                                    "not": "Não",
                                    "notBetween": "Não Entre",
                                    "notEmpty": "Não Vazio"
                                },
                                "string": {
                                    "contains": "Contém",
                                    "empty": "Vazio",
                                    "endsWith": "Termina Com",
                                    "equals": "Igual",
                                    "not": "Não",
                                    "notEmpty": "Não Vazio",
                                    "startsWith": "Começa Com",
                                    "notContains": "Não contém",
                                    "notStarts": "Não começa com",
                                    "notEnds": "Não termina com"
                                },
                                "array": {
                                    "contains": "Contém",
                                    "empty": "Vazio",
                                    "equals": "Igual à",
                                    "not": "Não",
                                    "notEmpty": "Não vazio",
                                    "without": "Não possui"
                                }
                            },
                            "data": "Data",
                            "deleteTitle": "Excluir regra de filtragem",
                            "logicAnd": "E",
                            "logicOr": "Ou",
                            "title": {
                                "0": "Construtor de Pesquisa",
                                "_": "Construtor de Pesquisa (%d)"
                            },
                            "value": "Valor",
                            "leftTitle": "Critérios Externos",
                            "rightTitle": "Critérios Internos"
                        },
                        "searchPanes": {
                            "clearMessage": "Limpar Tudo",
                            "collapse": {
                                "0": "Painéis de Pesquisa",
                                "_": "Painéis de Pesquisa (%d)"
                            },
                            "count": "{total}",
                            "countFiltered": "{shown} ({total})",
                            "emptyPanes": "Nenhum Painel de Pesquisa",
                            "loadMessage": "Carregando Painéis de Pesquisa...",
                            "title": "Filtros Ativos",
                            "showMessage": "Mostrar todos",
                            "collapseMessage": "Fechar todos"
                        },
                        "thousands": ".",
                        "datetime": {
                            "previous": "Anterior",
                            "next": "Próximo",
                            "hours": "Hora",
                            "minutes": "Minuto",
                            "seconds": "Segundo",
                            "amPm": [
                                "am",
                                "pm"
                            ],
                            "unknown": "-",
                            "months": {
                                "0": "Janeiro",
                                "1": "Fevereiro",
                                "10": "Novembro",
                                "11": "Dezembro",
                                "2": "Março",
                                "3": "Abril",
                                "4": "Maio",
                                "5": "Junho",
                                "6": "Julho",
                                "7": "Agosto",
                                "8": "Setembro",
                                "9": "Outubro"
                            },
                            "weekdays": [
                                "Domingo",
                                "Segunda-feira",
                                "Terça-feira",
                                "Quarta-feira",
                                "Quinte-feira",
                                "Sexta-feira",
                                "Sábado"
                            ]
                        },
                        "editor": {
                            "close": "Fechar",
                            "create": {
                                "button": "Novo",
                                "submit": "Criar",
                                "title": "Criar novo registro"
                            },
                            "edit": {
                                "button": "Editar",
                                "submit": "Atualizar",
                                "title": "Editar registro"
                            },
                            "error": {
                                "system": "Ocorreu um erro no sistema (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Mais informações<\/a>)."
                            },
                            "multi": {
                                "noMulti": "Essa entrada pode ser editada individualmente, mas não como parte do grupo",
                                "restore": "Desfazer alterações",
                                "title": "Multiplos valores",
                                "info": "Os itens selecionados contêm valores diferentes para esta entrada. Para editar e definir todos os itens para esta entrada com o mesmo valor, clique ou toque aqui, caso contrário, eles manterão seus valores individuais."
                            },
                            "remove": {
                                "button": "Remover",
                                "confirm": {
                                    "_": "Tem certeza que quer deletar %d linhas?",
                                    "1": "Tem certeza que quer deletar 1 linha?"
                                },
                                "submit": "Remover",
                                "title": "Remover registro"
                            }
                        },
                        "decimal": ",",
                        "stateRestore": {
                            "creationModal": {
                                "button": "Criar",
                                "columns": {
                                    "search": "Busca de colunas",
                                    "visible": "Visibilidade da coluna"
                                },
                                "name": "Nome:",
                                "order": "Ordernar",
                                "paging": "Paginação",
                                "scroller": "Posição da barra de rolagem",
                                "search": "Busca",
                                "searchBuilder": "Mecanismo de busca",
                                "select": "Selecionar",
                                "title": "Criar novo estado",
                                "toggleLabel": "Inclui:"
                            },
                            "duplicateError": "Já existe um estado com esse nome",
                            "emptyError": "Não pode ser vazio",
                            "emptyStates": "Nenhum estado salvo",
                            "removeConfirm": "Confirma remover %s?",
                            "removeError": "Falha ao remover estado",
                            "removeJoiner": "e",
                            "removeSubmit": "Remover",
                            "removeTitle": "Remover estado",
                            "renameButton": "Renomear",
                            "renameLabel": "Novo nome para %s:",
                            "renameTitle": "Renomear estado"
                        }
                    }
                });
                if (order >= 0) {
                    table.order([order, order_type]).draw();
                }
            });
        });

        function ToggleSidebar() {
            //To do
            $(".container-fluid").toggleClass("collapsed");
            localStorage.setItem("aside_collapsed", (localStorage.getItem("aside_collapsed") == "1" ? "0" : "1"));
        }

        function randomString(length) {
            let result = '';
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            const charactersLength = characters.length;
            let counter = 0;
            while (counter < length) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
                counter += 1;
            }
            return result;
        }

        function ValidaCPF(cpf) {
            cpf = cpf.replace(/\D/g, '');
            if (cpf.toString().length != 11 || /^(\d)\1{10}$/.test(cpf)) return false;
            var result = true;
            [9, 10].forEach(function(j) {
                var soma = 0,
                    r;
                cpf.split(/(?=)/).splice(0, j).forEach(function(e, i) {
                    soma += parseInt(e) * ((j + 2) - (i + 1));
                });
                r = soma % 11;
                r = (r < 2) ? 0 : 11 - r;
                if (r != cpf.substring(j, j + 1)) result = false;
            });
            return result;
        }
    </script>
</head>

<body class="antialiased">
    <div id="content-wrapper">
        <div class="container-fluid">
            <script>
                if (localStorage.getItem("aside_collapsed") == "1") {
                    $(".container-fluid").toggleClass("collapsed", true);
                }
            </script>
            <nav style="background-color: black" class="nav w-100 d-print-none">
                <div class="ps-2 pe-2"
                    style="min-width: 96px; border-right: 1px solid #818181; border-bottom-right-radius: 5px; border-bottom: 1px solid #818181;">
                    <button onclick="ToggleSidebar();" style="height: 32px; margin-top: 9px;"
                        class="p-1 w-100 btn btn-outline-primary text-white">
                        <i class="fas fa-fw fa-bars"></i>
                        Menu
                    </button>
                </div>
                <div class="ps-1 text-white text-center desktop-only"
                    style="align-content: center; flex-grow: 1; border-left: 1px solid #6c6c6c; border-bottom: 1px solid #6c6c6c; border-bottom-left-radius: 5px; margin-left: -1px;">
                    <!-- additional data in the header -->
                </div>
                <div style="margin-left: auto!important; border-bottom: 1px solid #6c6c6c; display: inline-flex;">
                </div>
            </nav>
            <aside style="background-color: black" class="text-white sidebar d-print-none">
                <ul class="ms-0 me-0 p-0 list-unstyled"
                    style="border-right: 1px solid #6c6c6c; border-top: 1px solid #6c6c6c; border-radius: 5px; margin-top: -1px; font-size: 0;">
                    @include('sidebarItem', [
                        'item_title' => 'Produtos',
                        'item_url' => '/products',
                        'item_icon' => 'fa-box',
                    ])
                </ul>
            </aside>
            <div id="app" class="main-content">
                <div class="card">
                    <div class="card-header">
                        @yield('header')
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                    <div class="card-footer">
                        @yield('footer')
                    </div>
                </div>
                @include('sweetalert::alert')
            </div>
        </div>
    </div>
    <script src="/scripts/popper.min.js"></script>
    <script src="/scripts/bootstrap.bundle.min.js"></script>
    <form class="d-none" id="logout_form" method="post" action="/dashboard/logout">
        @csrf
    </form>
</body>

</html>
