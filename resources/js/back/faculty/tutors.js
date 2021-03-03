let tutors = {};

tutors.tutorsListFormInit = function () {
    tutors.getTutorsList();
    setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
};

tutors.getTutorsList = function () {
    $('#tutors_list').dataTable({
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
            "url": '/backoffice/faculty/getTutorsList',
            "type": 'POST'
        },
        "columns": [
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": null },
            { "data": "created_at" },
            { "data": null },
        ],
        "order": [ [4, 'asc'] ],
        "columnDefs": [
            { // Order
                "targets": [ 1, 2, 3, 6 ],
                "orderable": false
            },
            {
                "targets" : [ 0, 1, 2, 3, 4, 5, 6 ],
                "className": 'text-center',
            },
            {
                "targets" : [ 0 ],
                "render" : function(data) {

                    let hono = (data.honorifics != null) ? ' ' + data.honorifics : '';
                    let lName = (data.last_name != null) ? ' ' + data.last_name : '';

                    return hono + ' ' + data.first_name + ' ' + lName;
                }
            },
            {
                "targets" : [ 1 ],
                "render" : function(data) {
                    return (data.position != null) ? data.position : '';
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
                    if(data.profile_picture != null) return '<img src="/storage/'+data.profile_picture+'" width="100">';
                    else return '';
                }
            },
            {
                "targets" : [ 4 ],
                "render" : function(data) {
                    return data.order;
                }
            },
            {
                "targets" : [ 5 ],
                "render" : function(data) {
                    if (data != null) return moment(data).format('YYYY.MM.DD h:mm a');
                    else return '';
                }
            },
            {
                "targets" : [ 6 ],
                "className": 'text-center',
                "render" : function(data) {
                    return '<a class="btn btn-info" href="/backoffice/faculty/tutor/' + data.id + '/edit"><i class="far fa-edit"></i></a> <span class="btn btn-danger" onclick="window.deleteTutor('+data.id+')"><i class="far fa-trash-alt"></i></span>';
                }
            }
        ]
    });
};

window.deleteTutor = function (id) {
    if(confirm('Are you sure to delete this tutor?')) {
        let data = {'id': id};
        $.ajax({
            url : "/backoffice/faculty/tutor/" + id,
            data : data,
            type : 'delete',
            success : function(res) {
                if (200 == res.status) {
                    $('.toastDestroyed').toast('show');
                    $('#tutors_list').dataTable().api().ajax.reload();
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

export default tutors;
