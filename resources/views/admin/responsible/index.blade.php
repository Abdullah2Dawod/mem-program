@extends('admin.layouts.main')
@section('title', 'الإداريين')

@section('content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="icon-people icons me-2"></i>
                                <span>قائمة الإداريين</span>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="icon-arrow-right-circle icons font-lg me-2"></i>
                                    إضافة إداري جديد
                                </button>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الإداري</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>رقم الهاتف</th>
                                            <th>البرنامج المتاح</th>
                                            <th>تعديل</th>
                                            <th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>محمود محمد</td>
                                            <td>mahmoud@gmail.com</td>
                                            <td>972-0000000</td>
                                            <td>برنامج صناع الحياة</td>
                                            <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                            <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>محمود محمد</td>
                                            <td>mahmoud@gmail.com</td>
                                            <td>972-0000000</td>
                                            <td>برنامج صناع الحياة</td>
                                            <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                            <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>محمود محمد</td>
                                            <td>mahmoud@gmail.com</td>
                                            <td>972-0000000</td>
                                            <td>برنامج صناع الحياة</td>
                                            <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
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
@endsection
