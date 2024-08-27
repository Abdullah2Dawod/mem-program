@extends('admin.layouts.main')
@section('title', 'البرامج')

@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="icon-people icons me-2"></i>
                            <span>قائمة البرامج</span>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="icon-arrow-right-circle icons font-lg me-2"></i>
                                إضافة برنامج جديد
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم البرنامج</th>
                                        <th>صورة البرنامج</th>
                                        <th>تفاصيل البرنامج</th>
                                        <th>مدة البرنامج</th>
                                        <th>قيمة الإشتراك</th>
                                        <th>المرحلة الدراسية</th>
                                        <th>المقاعد المتاحة</th>
                                        <th>الحالة</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>صناع الحياة</td>
                                        <td>
                                            <img src="../../imag/gop.png" class="img-thumbnail"
                                                style="max-width: 50px;cursor: pointer;" alt="صورة البرنامج"
                                                data-toggle="modal" data-target="#imageModal">
                                        </td>
                                        <td class="details-column">
                                            برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي يتخلل البرنامج
                                            مجموعة من الأنشطة الرياضية والثقافية.
                                        </td>
                                        <td class="details-column">يوم واحد من ساعة ٣:٣٠ إلى ٥:٣٠م</td>
                                        <td>5 دك</td>
                                        <td>مرحلة 5</td>
                                        <td>15 مقعد</td>
                                        <td class="status-open"><span class="tag tag-default">مفتوح</span></td>
                                        <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                        <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>صناع الحياة</td>
                                        <td>
                                            <img src="../../imag/gop.png" class="img-thumbnail"
                                                style="max-width: 50px;cursor: pointer;" alt="صورة البرنامج"
                                                data-toggle="modal" data-target="#imageModal">
                                        </td>
                                        <td class="details-column">
                                            برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي يتخلل البرنامج
                                            مجموعة من الأنشطة الرياضية والثقافية.
                                        </td>
                                        <td class="details-column">يوم واحد من ساعة ٣:٣٠ إلى ٥:٣٠م</td>
                                        <td>5 دك</td>
                                        <td>مرحلة 5</td>
                                        <td>20 مقعد</td>
                                        <td class="status-closed"><span class="tag tag-default">مغلق</span></td>
                                        <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                        <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>صناع الحياة</td>
                                        <td>
                                            <img src="../../imag/gop.png" class="img-thumbnail"
                                                style="max-width: 50px;cursor: pointer;" alt="صورة البرنامج"
                                                data-toggle="modal" data-target="#imageModal">
                                        </td>
                                        <td class="details-column">
                                            برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي يتخلل البرنامج
                                            مجموعة من الأنشطة الرياضية والثقافية.
                                        </td>
                                        <td class="details-column">يوم واحد من ساعة ٣:٣٠ إلى ٥:٣٠م</td>
                                        <td>5 دك</td>
                                        <td>مرحلة 7</td>
                                        <td>20 مقعد</td>
                                        <td class="status-expired"><span class="tag tag-default">منتهي</span>
                                        </td>
                                        <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                        <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>صناع الحياة</td>
                                        <td>
                                            <img src="../../imag/gop.png" class="img-thumbnail"
                                                style="max-width: 50px;cursor: pointer;" alt="صورة البرنامج"
                                                data-toggle="modal" data-target="#imageModal">
                                        </td>
                                        <td class="details-column">
                                            برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي يتخلل البرنامج
                                            مجموعة من الأنشطة الرياضية والثقافية.
                                        </td>
                                        <td class="details-column">يوم واحد من ساعة ٣:٣٠ إلى ٥:٣٠م</td>
                                        <td>5 دك</td>
                                        <td>مرحلة 11</td>
                                        <td>20 مقعد</td>
                                        <td class="status-deleted"><span class="tag tag-default">مخفي</span>
                                        </td>
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


<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img src="../../imag/gop.png" alt="صورة البرنامج" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection

