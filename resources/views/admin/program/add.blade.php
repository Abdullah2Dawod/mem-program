@extends('admin.layouts.main')
@section('title', 'إضافة برنامج')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="icon-people icons me-2"></i>
                            <span>إضافة برنامج جديد</span>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="icon-arrow-right-circle icons font-lg me-2"></i>
                                قائمة البرامج
                            </button>
                        </div>
                    </div>

                    <div class="card-block p-3">
                        <div class="row">
                            <div class="form-group col-sm-6 col-md-4 pt-3">
                                <label for="name">أسم البرنامج</label>
                                <input type="text" class="form-control" name="name" placeholder="أسم البرنامج">
                            </div>
                            <div class="form-group col-sm-6 col-md-8 pt-3">
                                <label for="name">تفاصيل البرنامج</label>
                                <input type="text" class="form-control" name="name" placeholder="تفاصيل البرنامج">
                            </div>

                            <div class="form-group col-sm-6 col-md-6 pt-3">
                                <label for="name">مدة البرنامج</label>
                                <input type="name" class="form-control" name="name"
                                    placeholder="مدة البرنامج">
                            </div>

                            <div class="form-group col-sm-6 col-md-6 pt-3">
                                <label for="city">قيمة الاشتراك</label>
                                <input type="text" class="form-control" name="number"
                                    placeholder="5 دينار كويتي">
                            </div>

                            <div class="form-group col-sm-6 col-md-4 pt-3">
                                <label for="class">المرحلة الدراسية</label>
                                <select class="form-select" name="class">
                                    <option value="" disabled selected>اختر المرحلة الدراسية</option>
                                    <option value="4">المرحلة 4</option>
                                    <option value="5">المرحلة 5</option>
                                    <option value="6">المرحلة 6</option>
                                    <option value="7">المرحلة 7</option>
                                    <option value="8">المرحلة 8</option>
                                    <option value="9">المرحلة 9</option>
                                    <option value="10">المرحلة 10</option>
                                    <option value="11">المرحلة 11</option>
                                    <option value="12">المرحلة 12</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-6 col-md-4 pt-3">
                                <label for="type">المقاعد المتاحة</label>
                                <input type="text" class="form-control" name="program"
                                    placeholder="المقاعد المتاحة">
                            </div>
                            <div class="form-group col-sm-6 col-md-4 pt-3">
                                <label for="status">الحالة</label>
                                <select class="form-select" name="status">
                                    <option value="" disabled selected>اختر الحالة</option>
                                    <option value="open">مفتوح</option>
                                    <option value="closed">مغلق</option>
                                    <option value="expired">منتهي</option>
                                    <option value="deleted">مخفي</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 col-md-4 pt-3">
                                <label for="image">صورة البرنامج</label>
                                <input type="file" class="form-control" name="image" id="image" onchange="previewImage(event)">
                                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-width: 100%;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success btn-sm d-block mt-3">
                            <i class="icon-plus icons font-lg"></i>إضافة
                        </button>
                    </div>
                </div>

            </div>
            <!--/col-->

        </div>
    </div>
</div>
@endsection

