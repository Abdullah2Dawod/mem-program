@extends('admin.layouts.main')
@section('title', 'تعديل الصفحة الشخصية')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">تعديل المعلومات الشخصية</div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">الاسم</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="الاسم الكامل">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="example@domain.com">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">كلمة المرور القديمة</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="********">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">كلمة المرور الجديدة</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="********">
                                </div>
                                <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
