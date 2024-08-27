@extends('admin.layouts.main')
@section('title', 'تعديل إداري')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="icon-people icons me-2"></i>
                                <span>التعديل على القائمة</span>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="icon-arrow-right-circle icons font-lg me-2"></i>
                                    قائمة الإداريين
                                </button>
                            </div>
                        </div>

                        <div class="card-block p-3">
                            <div class="row">
                                <div class="form-group col-sm-6 col-md-6 pt-3">
                                    <label for="first-name">الأسم الأول</label>
                                    <input type="text" class="form-control" id="first-name" name="first-name"
                                        placeholder="الاسم الأول">
                                </div>
                                <div class="form-group col-sm-6 col-md-6 pt-3">
                                    <label for="last-name">الأسم الأخير</label>
                                    <input type="text" class="form-control" id="last-name" name="last-name"
                                        placeholder="الاسم الأخير">
                                </div>
                                <div class="form-group col-sm-6 col-md-6 pt-3">
                                    <label for="email">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="example@ps.com">
                                </div>
                                <div class="form-group col-sm-6 col-md-6 pt-3">
                                    <label for="password">كلمة المرور</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="***********">
                                </div>
                                <div class="form-group col-sm-6 col-md-6 pt-3">
                                    <label for="phone">رقم الجوال</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="059-1234567">
                                </div>
                                <div class="form-group col-sm-6 col-md-6 pt-3">
                                    <label for="program">البرنامج المتاح</label>
                                    <input type="text" class="form-control" id="program" name="program"
                                        placeholder="البرنامج المتاح">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-sm d-block mt-3">
                                <i class="icon-save icons font-lg"></i> حفظ التعديلات
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
