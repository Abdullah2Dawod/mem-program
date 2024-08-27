@extends('admin.layouts.main')
@section('title', 'المشتركين')

@section('content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="icon-people icons me-2"></i>
                                <span>قائمة المشتركين</span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم ولي امر الطالب</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>كلمة المرور</th>
                                            <th>الطلاب</th>
                                            <th>رقم الهاتف</th>
                                            <th>رقم الطوارئ</th>
                                            <th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>محمود محمد</td>
                                            <td>mahmoud@gmail.com</td>
                                            <td>********</td>
                                            <td>
                                                <svg class="icon-te-xx-w" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 64 64" width="40" height="35"
                                                    data-toggle="modal" data-target="#studentsModal1">
                                                    <!-- Student 1 -->
                                                    <circle cx="16" cy="20" r="6" fill="#6fa3ef" />
                                                    <rect x="13" y="28" width="6" height="16" fill="#6fa3ef" />

                                                    <!-- Student 2 -->
                                                    <circle cx="32" cy="20" r="6" fill="#f39c12" />
                                                    <rect x="29" y="28" width="6" height="16" fill="#f39c12" />

                                                    <!-- Student 3 -->
                                                    <circle cx="48" cy="20" r="6" fill="#e74c3c" />
                                                    <rect x="45" y="28" width="6" height="16" fill="#e74c3c" />
                                                </svg>
                                            </td>
                                            <td>972-0000000</td>
                                            <td>972-00035300</td>
                                            <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                                        </tr>

                                        <!-- باقي الصفوف... -->
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination justify-content-center mt-3">
                                <li class="page-item"><a class="page-link" href="#">السابق</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">التالي</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Students -->
    <div class="modal fade" id="studentsModal1" tabindex="-1" role="dialog" aria-labelledby="studentsModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="studentsModalLabel1">الطلاب المسجلين</h5>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الطالب</th>
                                <th>المرحلة الدراسية</th>
                                <th>البرنامج المسجل له</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>سعيد محمود</td>
                                <td>المرحلة 4</td>
                                <td>برنامج العلوم</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>محمد محمود</td>
                                <td>المرحلة 3</td>
                                <td>برنامج الرياضيات</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>أحمد محمود</td>
                                <td>المرحلة 5</td>
                                <td>برنامج اللغة العربية</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

@endsection
