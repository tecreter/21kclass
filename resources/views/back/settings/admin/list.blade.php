@extends('back.layouts.app')

@section('content')
    <body class="c-app pg-admin-list">
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

                            <div class="mb-3 text-right">
                                <a href="{{ route('back.settings.admin.create') }}">
                                    <button type="button" class="btn btn-dark btn-square"><i class="fa fa-plus-circle"></i> NEW ADMIN</button>
                                </a>
                            </div>
                            <div class="fade-in">
                                <div class="card">
                                    <div class="card-header">
                                        Admins List
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-2 dataTables_wrapper dt-bootstrap4 no-footer">
                                            <table class="table table-striped table-bordered table-condensed dt-responsive nowrap dataTable no-footer my-2" id="admins_list" style="width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>성명</th>
                                                    <th>로그인 아이디</th>
                                                    <th>적용여부</th>
                                                    <th>등록일자</th>
                                                    <th>설정</th>
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
        window.KolonLsiAdmin.Admin.adminsFormInit();
        window.KolonLsiAdmin.Admin.LoggedAdminId = {{ $loggedInAdminId }};
    </script>
@endsection
