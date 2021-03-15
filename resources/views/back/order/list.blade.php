@extends('back.layouts.app')

@section('content')
    <body class="c-app pg-admin-list">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

    @include('back.layouts.left_menu')
    <div class="c-wrapper">
        @include('back.layouts.header')
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="ui-view">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <div class="text-center">{{ session('success') }}</div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <div class="text-center">{{ session('warning') }}</div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="fade-in">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Orders List</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mx-2 dataTables_wrapper dt-bootstrap4 no-footer">
                                        <table class="table table-striped table-bordered table-condensed dt-responsive nowrap dataTable no-footer my-2" id="orders_list" style="width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Amount Paid</th>
                                                <th>Invoice No</th>
                                                <th>Transaction ID</th>
                                                <th>Payment Status</th>
                                                <th>Paid On</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <div class="modal fade docs-order-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Invoice - <b>#<span class="title_invoice"></span></b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="container">
                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <h6 class="mb-3">From:</h6>
                                        <div><strong><span class="title_customer_name"></span></strong></div>
                                        <div><span class="title_customer_address"></span></div>
                                        <div><span class="title_customer_email"></span></div>
                                        <div><span class="title_customer_phone"></span></div>
                                    </div>

                                    <div class="col-lg-6">
                                        <h6 class="mb-3">Details:</h6>
                                        <div>Invoice <strong>#<span class="title_invoice"></span></strong></div>
                                        <div>Paid on <strong><span class="title_transaction_date"></span></strong></div>
                                        <div>Transaction Id <strong><span class="title_transaction_id"></span></strong></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                                        <thead>
                                        <tr style="background-color:#ececec">
                                            <th class="col-xs-1 text-center">#</th>
                                            <th class="col-xs-9 text-center">Course Name</th>
                                            <th class="col-xs-2 text-center">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody class="title_order_products">
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-right">Subtotal:</td>
                                            <td class="text-right">Rs. <span class="title_subtotal"></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-right">Discounts:</td>
                                            <td class="text-right">Rs. <span class="title_discount"></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-right">Tax:</td>
                                            <td class="text-right">Rs. <span class="title_tax"></span></td>
                                        </tr>
                                        <tr class="bg-gray-200 text-dark">
                                            <td colspan="2" class="text-right"><strong>Total:</strong></td>
                                            <td class="text-right"><strong>Rs. <span class="title_total"></span></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </section>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @include('back.layouts.footer')
        </div>
    </div>
    <div class="toast toastUpdated" role="alert" aria-live="assertive" aria-atomic="true" data-delay="1000" style="position: absolute;top: 3.5rem;margin: 0 auto;left: 43%;">
        <div class="toast-body alert-info">
            <i class="fa fa-1x fa-check-circle"></i> Updated Successfully.
        </div>
    </div>
    <div class="toast toastDestroyed" role="alert" aria-live="assertive" aria-atomic="true" data-delay="1000" style="position: absolute;top: 3.5rem;margin: 0 auto;left: 43%;">
        <div class="toast-body alert-warning">
            <i class="fa fa-1x fa-check-circle"></i> Deleted Successfully.
        </div>
    </div>
    </body>
@endsection

@section('script')
    <script type="text/javascript">
        window.TocAdmin.Order.orderListFormInit();

        $(document).ready(function () {
            $('.docs-order-modal-lg').on('show.bs.modal', function (e) {
                var order = $(e.relatedTarget);

                $.ajax({
                    url : "/backoffice/order/" + $(order).data('id'),
                    type : 'post',
                    success : function(res) {
                        if (200 == res.status) {

                            var order = res.data;


                            $('.title_customer_name').html( order.name );
                            $('.title_customer_email').html( order.email );
                            $('.title_customer_phone').html( order.phone );
                            $('.title_customer_address').html( order.address );

                            $('.title_invoice').html( order.invoice );
                            $('.title_transaction_date').html( order.transaction_date );
                            $('.title_transaction_id').html( order.transaction_id );

                            $('.title_subtotal').html( order.order['sub_total'] );
                            $('.title_discount').html( order.order['discounts'] );
                            $('.title_tax').html( order.order['tax'] );
                            $('.title_total').html( order.order['total'] );

                            var prd = '';
                            for (var i = 0; i < order.products.length; i++) {
                                prd += '<tr><td class="text-center">' + (i+1) + '</td><td style="white-space:pre-wrap">' + order.products[i].name + '</td><td class="text-right">Rs. ' + order.products[i].price + '</td></tr>';
                            }
                            $('.title_order_products').html( prd );

                            return;
                        }
                        else {
                            alert("An error occurred in the program.");
                            $('.docs-order-modal-lg').modal('hide');
                            return;
                        }
                    },
                    error : function(jqXHR, textStatus, errorThrown) {
                        alert("An error occurred in the program.");
                        $('.docs-order-modal-lg').modal('hide');
                        return;
                    }
                });




            })
        });

    </script>
@endsection
