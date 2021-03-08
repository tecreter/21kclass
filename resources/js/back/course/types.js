let courseType = {};

courseType.courseTypeListFormInit = function () {
    courseType.getCourseTypesList();
    setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
};

courseType.numberFormat = function (x) {

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

courseType.getCourseTypesList = function () {
    $('#courses_list').dataTable({
        "destroy": true,
        "pageLength": 10,
        //"lengthMenu": [[1, 5, 10, 25, 50, -1], [1, 5, 10, 25, 50, "All"]],
        "serverSide": true,
        //"paginationType": "full_numbers",
        "ordering": false,
        "processing": true,
        "scrollX": true,
        "searching": false,
        "ajax" : {
            "url": '/backoffice/course/getCourseTypeList',
            "type": 'POST'
        },
        "columns": [
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
                "targets": [ 1, 2, 3, 5, 6 ],
                "orderable": false
            },
            {
                "targets" : [ 0, 1, 2, 3, 4, 5, 6 ],
                "className": 'text-center',
            },
            {
                "targets" : [ 0 ],
                "render" : function(data) {
                    return '<img src="/storage/'+data.thumb+'" width="100">';
                }
            },
            {
                "targets" : [ 1 ],
                "render" : function(data) {
                    return data.name;
                }
            },
            {
                "targets" : [ 2 ],
                "render" : function(data) {
                    return data.category.name;
                }
            },
            {
                "targets" : [ 3 ],
                "render" : function(data) {
                    return '₹' + courseType.numberFormat(Math.floor(data.price), 3);
                }
            },
            {
                "targets" : [ 4 ],
                "render" : function(data) {
                    return '₹' + courseType.numberFormat(Math.floor(data.original_price), 3);
                }
            },
            {
                "targets" : [ 5 ],
                "render" : function(data) {
                    return (data.is_new == 1) ? 'Yes' : 'No';
                }
            },
            {
                "targets" : [ 6 ],
                "className": 'text-center',
                "render" : function(data) {
                    return '<a class="btn btn-info" href="/backoffice/course/types/' + data.id + '/edit"><i class="far fa-edit"></i></a> <span class="btn btn-danger" onclick="window.deleteCourseType('+data.id+')"><i class="far fa-trash-alt"></i></span>';
                }
            }
        ]
    });
};

window.changeCourseTypeEnableFlag = function (id, status) {
    if(confirm('Are you sure to update the status?')) {
        let data = {'id': id, 'enable_flag': status};
        $.ajax({
            url : "/backoffice/course/updateCoursesEnableFlag",
            data : data,
            type : 'post',
            success : function(res) {
                if (200 == res.status) {
                    location.reload();
                    // $('.toastUpdated').toast('show');
                    // $('#courses_list').dataTable().api().ajax.reload();
                    return;
                }
                else {
                    alert("An error occurred in the program.");
                    return;
                }
            },
            error : function(jqXHR, textStatus, errorThrown) {
                alert("An error occurred in the program.");
                return;
            }
        });
    }
};

window.deleteCourseType = function (id) {
    if(confirm('Are you sure to delete this course?')) {
        let data = {'id': id};
        $.ajax({
            url : "/backoffice/course/types/" + id,
            data : data,
            type : 'delete',
            success : function(res) {
                if (200 == res.status) {
                    $('.toastDestroyed').toast('show');
                    $('#courses_list').dataTable().api().ajax.reload();
                    return;
                }
                else {
                    alert("An error occurred in the program.");
                    return;
                }
            },
            error : function(jqXHR, textStatus, errorThrown) {
                alert("An error occurred in the program.");
                return;
            }
        });
    }
};

export default courseType;
