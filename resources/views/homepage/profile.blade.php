@extends('layouts.homepage')
@section('title', 'الصفحة الشخصية')

@section('content')
    <!-- ================ profile section start ================= -->
    <div class="login-body mt-5">
        <div class="login-container d-flex align-items-center justify-content-center" style="padding: 40px;">
            <div class="form-container w-100">
                <h2 class="mb-4 text-center">تعديل الملف الشخصي</h2>
                <form>
                    <div class="mb-3 d-flex gap-3">
                        <div class="flex-fill">
                            <label for="father-name" class="form-label">اسم ولي أمر الطالب</label>
                            <input type="text" class="form-control" id="father-name" value="أحمد محمد" required>
                        </div>

                        <div class="flex-fill">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" value="example@example.com" required>
                        </div>
                    </div>
                    <div id="studentFields">
                        <div class="mb-3 d-flex gap-3">
                            <div class="flex-fill">
                                <label for="student-name-1" class="form-label">اسم الطالب</label>
                                <input type="text" class="form-control" id="student-name-1" name="studentName[]"
                                    value="علي أحمد" required>
                            </div>
                            <div class="flex-fill">
                                <label class="form-label" for="specificSizeSelect-1">المرحلة الدراسية</label>
                                <select class="form-select" id="specificSizeSelect-1" name="studentGrade[]">
                                    <option value="1" selected>المرحلة</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="flex-fill">
                                <label class="form-label" for="specificSizeSelect-1">البرنامج المشترك به</label>
                                <select class="form-select" id="specificSizeSelect-1" name="studentGrade[]">
                                    <option value="1" selected>البرنامج</option>
                                    <option value="4">صناع الحياة</option>
                                    <option value="5">صناع الحياة</option>
                                    <option value="5">صناع الحياة</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: -8px;">
                        <i class="fa-solid fa-plus" id="addStudentBtn" style="cursor: pointer;"></i>
                    </div>

                    <div class="mb-3 d-flex gap-3">
                        <div class="flex-fill">
                            <label for="password" class="form-label">كلمة المرور القديمة</label>
                            <input type="password" class="form-control" id="password" placeholder="********" required>
                        </div>
                        <div class="flex-fill">
                            <label for="confirm-password" class="form-label">كلمة المرور الجديدة</label>
                            <input type="password" class="form-control" id="confirm-password" placeholder="********"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex gap-3">
                        <div class="flex-fill">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <input type="tel" class="form-control" id="phone" value="123456789" required>
                        </div>
                        <div class="flex-fill">
                            <label for="emergency-phone" class="form-label">رقم الطوارئ</label>
                            <input type="text" class="form-control" id="emergency-phone" value="987654321" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="button" type="submit"><i class="fa-solid fa-user-plus"></i><a href=""
                                target="_blank" rel="noopener noreferrer" style="text-decoration: none;color: white">حفظ
                                التعديلات</a></button>
                        <button class="button btn btn-secondary" type="button" onclick="window.history.back();">
                            <i class="fa-solid fa-undo"></i> إلغاء
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ================ contact section end ================= -->

@endsection
