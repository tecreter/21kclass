let order = {};

order.orderListFormInit = function () {
    order.getCourseTypesList();
    setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
};

order.numberFormat = function (x) {

    // 10000000 > 10,00,000
    x = x.toString();
    let lastThree = x.substring(x.length - 3);
    let otherNumbers = x.substring(0, x.length - 3);
    if (otherNumbers != '') lastThree = ',' + lastThree;

    return otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;

    // 10000000 > 10,00,000.00
    // return (x).toFixed(2).replace(/(\d)(?=(\d{2})+\d\.)/g, '$1,');

    // 10000000 > 1,000,000
    // return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};

order.getCourseTypesList = function () {

    var buttonCommon = {
        exportOptions: {
            format: {
                body: function ( data, row, column, node ) {
                    // Strip $ from salary column to make it numeric
                    return column === 3 ?
                        data.replace( /[₹,]/g, '' ) :
                        data;
                }
            }
        }
    };

    $('#orders_list').dataTable({
        "pageLength": 10,
        //"lengthMenu": [[1, 5, 10, 25, 50, -1], [1, 5, 10, 25, 50, "All"]],
        "serverSide": true,
        //"paginationType": "full_numbers",
        "ordering": false,
        "processing": true,
        "scrollX": true,
        "searching": false,
        "ajax" : {
            "url": '/backoffice/getOrdersList',
            "type": 'POST'
        },
        "dom": 'Blfrtip',
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "columns": [
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": null },
        ],
        "order": [ [4, 'asc'] ],
        "columnDefs": [
            { // Order
                "targets": [ 1, 2, 3, 5, 6, 7 ],
                "orderable": false
            },
            {
                "targets" : [ 2, 3, 4, 5, 6, 7 ],
                "className": 'text-center',
            },
            {
                "targets" : [ 0 ],
                "render" : function(data) {
                    let lName = (data.last_name != null) ? ' ' + data.last_name : '';
                    return data.first_name + lName;
                }
            },
            {
                "targets" : [ 1 ],
                "render" : function(data) {
                    return data.email_address;
                }
            },
            {
                "targets" : [ 2 ],
                "render" : function(data) {
                    return data.phone_number;
                }
            },
            {
                "targets" : [ 3 ],
                "render" : function(data) {
                    return '₹ ' + order.numberFormat(Math.floor(data.total), 3);
                }
            },
            {
                "targets" : [ 4 ],
                "render" : function(data) {
                    return '<a href="javascript:void(0);" data-toggle="modal" data-target=".docs-order-modal-lg" data-id="' + data.id + '">' + data.invoice + '</a>';
                }
            },
            {
                "targets" : [ 5 ],
                "render" : function(data) {
                    return data.transaction_id;
                }
            },
            {
                "targets" : [ 6 ],
                "render" : function(data) {
                    return data.payment_status;
                }
            },
            {
                "targets" : [ 7 ],
                "render" : function(data) {
                    if (data.payment_status == 'success') return (data.paid_at != null) ? moment(data.paid_at).format('YYYY.MM.DD h:mm a') : '';
                    else return '';
                }
            },
        ]
    });
};

export default order;
