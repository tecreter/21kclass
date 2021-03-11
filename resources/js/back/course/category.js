let courseCategory = {};

courseCategory.categoryListFormInit = function () {
    courseCategory.getCourseCategoriesList();
    setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
};

courseCategory.getCourseCategoriesList = function () {

    let site_type = {
        1 : 'Coaching',
        2 : 'Tutoring',
        3 : 'Commerce'
    };

    $('#category_list').dataTable({
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
            "url": '/backoffice/course/getCourseCategoryList',
            "type": 'POST'
        },
        "columns": [
            { "data": "name" },
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": null },
        ],
        "order": [ [3, 'asc'] ],
        "columnDefs": [
            { // Order
                "targets": [ 1, 2, 3 ],
                "orderable": false
            },
            {
                "targets" : [ 0, 1, 2, 3 ],
                "className": 'text-center',
            },
            {
                "targets" : [ 1 ],
                "render" : function(data) {
                    return data.courses.length;
                }
            },
            {
                "targets" : [ 2 ],
                "render" : function(data) {
                    return (data.is_new == 1) ? 'Yes' : 'No';
                }
            },
            {
                "targets" : [ 3 ],
                "render" : function(data) {
                    return (site_type[data.type_id] != null) ? site_type[data.type_id] : '';
                }
            },
            {
                "targets" : [ 4 ],
                "className": 'text-center',
                "render" : function(data) {
                    return '<a class="btn btn-info" href="/backoffice/course/category/' + data.id + '/edit"><i class="far fa-edit"></i></a> <span class="btn btn-danger" onclick="window.deleteCourseCategory('+data.id+')"><i class="far fa-trash-alt"></i></span>';
                }
            }
        ]
    });
};

window.changeCourseCategoryEnableFlag = function (id, status) {
    if(confirm('Are you sure to update the status?')) {
        let data = {'id': id, 'enable_flag': status};
        $.ajax({
            url : "/backoffice/course/updateCourseCategoryEnableFlag",
            data : data,
            type : 'post',
            success : function(res) {
                if (200 == res.status) {
                    location.reload();
                    // $('.toastUpdated').toast('show');
                    // $('#category_list').dataTable().api().ajax.reload();
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

window.deleteCourseCategory = function (id) {
    if(confirm('Are you sure to delete this course category?\n\nTHIS WON\'T BE DELETE IF ANY COURSE OR TUTOR IS REGISTERED UNDER THIS CATEGORY.')) {
        let data = {'id': id};
        $.ajax({
            url : "/backoffice/course/category/" + id,
            data : data,
            type : 'delete',
            success : function(res) {
                if (200 == res.status) {
                    $('.toastDestroyed').toast('show');
                    $('#category_list').dataTable().api().ajax.reload();
                    return;
                }
                else if (400 == res.status) {
                    if (1 == res.error_code) {
                        $('.toastWarning').toast('show');
                        $('.toast-body').append('This won\'t be deleted since a course or tutor is registered under this category.');
                        $('#category_list').dataTable().api().ajax.reload();
                        return;
                    }
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

export default courseCategory;
