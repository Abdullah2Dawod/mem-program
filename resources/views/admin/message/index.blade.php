@extends('admin.layouts.main')
@section('title', 'رسائل المستخدمين')

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
                                        <th>الموضوع</th>
                                        <th>نص الرسالة</th>
                                        <th>اسم المرسل</th>
                                        <th>الإيميل</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>برنامج صناع الحياة</td>
                                        <td class="details-column">
                                            برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي يتخلل البرنامج
                                            مجموعة من الأنشطة الرياضية والثقافية.
                                        </td>
                                        <td>سعيد سبانخ</td>
                                        <td>ad@gmail.com</td>
                                        <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                                    </tr>

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
