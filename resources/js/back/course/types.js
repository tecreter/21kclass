let courseType = {};

courseType.courseTypeListFormInit = function () {
    courseType.getCourseTypesList();
    setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
};

courseType.getCourseTypesList = function () {
    $('#courses_list').dataTable({
        "destroy": true,
        "pageLength": 10,
        //"lengthMenu": [[1, 5, 10, 25, 50, -1], [1, 5, 10, 25, 50, "All"]],
        "serverSide": true,
        //"paginationType": "full_numbers",
        "ordering": true,
        "processing": true,
        "scrollX": true,
        "searching": false,
        "ajax" : {
            "url": '/backoffice/course/getCourseTypeList',
            "type": 'POST'
        },
        "columns": [
            { "data": "name" },
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": "created_at" },
            { "data": null },
        ],
        "order": [ [4, 'asc'] ],
        "columnDefs": [
            { // Order
                "targets": [ 1, 2, 3, 5 ],
                "orderable": false
            },
            {
                "targets" : [ 0, 1, 2, 3, 4, 5 ],
                "className": 'text-center',
            },
            {
                "targets" : [ 1 ],
                "render" : function(data) {
                    return data.category.name;
                }
            },
            {
                "targets" : [ 2 ],
                "render" : function(data) {
                    return '<img src="/storage/'+data.thumb+'" width="100">';
                }
            },
            {
                "targets" : [ 3 ],
                "render" : function(data) {
                    if(data.enable_flag == 1) return '<label class="c-switch c-switch-label c-switch-success mb-0"><input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off" onclick="window.changeCourseTypeEnableFlag('+data.id+', 0)"></span></label>';
                    else return '<label class="c-switch c-switch-label c-switch-success mb-0"><input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off" onclick="window.changeCourseTypeEnableFlag('+data.id+', 1)"></span></label>';
                }
            },
            {
                "targets" : [ 4 ],
                "render" : function(data) {
                    if (data != null) return moment(data).format('YYYY.MM.DD h:mm a');
                    else return '';
                }
            },
            {
                "targets" : [ 5 ],
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
