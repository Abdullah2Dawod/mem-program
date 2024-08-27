@extends('layouts.homepage')
@section('title', 'الصفحة الرئيسية | برنامج ميم التعليمي')

@section('content')
    <!-- الهيدر الجديد -->
    <header class="header">
        <img src="imag/gop.png" alt="شعار الموقع">
        <h1>مرحبا بكم في موقعنا</h1>
        <p>نحن سعداء بوجودكم هنا. استمتعوا بتصفح الموقع!</p>
    </header>

    <div id="programs" style="padding-top: 20px;" class="card-show">
        <div class="container my-5">
            <div class="page-title d-flex align-items-center justify-content-center">
                <div class="line"></div>
                <h2 class="animated-title">برامجنا</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card card-container position-relative">
                        <div class="status-badge expired">منتهي

                        </div> <!-- حالة البطاقة -->
                        <img src="imag/ss.jpg" class="card-img-top card-img" alt="صورة بطاقة">
                        <div class="card-body">
                            <h5 class="card-title mb-0">برنامج صناع الحياة</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="price text-muted remaining-participants">العدد المتبقي للمشتركين : 15</p>
                                <span class="price text-muted" style="font-size: 16px;">السعر: 5 دينار</span>
                            </div>
                            <button class="button" onclick="toggleCard(this)">
                                اقرأ التفاصيل
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                    <path clip-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm1.33 12.914l-2.792 2.792c-.293.293-.767.293-1.06 0l-.53-.53c-.293-.293-.293-.767 0-1.06L10.47 12 9.03 10.56c-.293-.293-.293-.767 0-1.06l.53-.53c.293-.293.767-.293 1.06 0l2.793 2.792c.293.293.293.767 0 1.06z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="card-overlay">
                            <div class="card-back">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                        <line x1="8" y1="8" x2="16" y2="8"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                        <circle cx="12" cy="16" r="1"></circle>
                                    </svg> <b>تفاصيل البرنامج :</b> برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي
                                    يتخلل البرنامج مجموعة من الأنشطة الرياضية والثقافية.</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="6" x2="12" y2="12"></line>
                                        <line x1="12" y1="12" x2="16" y2="14"></line>
                                    </svg> <b>مدة البرنامج :</b> يوم واحد من ساعة ٣:٣٠ إلى ٥:٣٠م</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="2" y1="10" x2="22" y2="10"></line>
                                        <line x1="6" y1="15" x2="6" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="15"></line>
                                        <line x1="18" y1="15" x2="18" y2="15"></line>
                                    </svg> <b>قيمة الاشتراك :</b> ٥ دك</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="4" y="8" width="16" height="6" rx="2" ry="2"></rect>
                                        <line x1="4" y1="14" x2="4" y2="18"></line>
                                        <line x1="20" y1="14" x2="20" y2="18"></line>
                                        <line x1="8" y1="18" x2="8" y2="22"></line>
                                        <line x1="16" y1="18" x2="16" y2="22"></line>
                                    </svg> <b>عدد المقاعد المتاحة :</b> ٢٠ مقعد</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 2 L2 7 L12 12 L22 7 L12 2 Z"></path>
                                        <line x1="12" y1="12" x2="12" y2="22"></line>
                                        <path d="M7 16 L17 16"></path>
                                    </svg> <b>المرحلة :</b> الصف الرابع</div>
                                <button class="gogo" data-bs-toggle="modal" data-bs-target="#subscriptionModal">
                                    <i class="fa-solid fa-plus"></i> إشتراك
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Subscription Confirmation Modal -->
                <div class="modal fade" id="subscriptionModal" tabindex="-1" aria-labelledby="subscriptionModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="subscriptionModalLabel">تأكيد عملية الإشتراك</h5>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3 d-flex gap-3">
                                        <div class="flex-fill">
                                            <label for="name" class="form-label">اسم الطالب</label>
                                            <input class="form-control" type="text" placeholder="محمد محمود"
                                                aria-label="Disabled input example" disabled>
                                        </div>

                                        <div class="flex-fill">
                                            <label for="text" class="form-label">اسم البرنامج</label>
                                            <input class="form-control" type="text" placeholder="برنامج صناع الحياة"
                                                aria-label="Disabled input example" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex gap-3">
                                        <div class="flex-fill">
                                            <label for="father-name" class="form-label">المرحلة الدراسية</label>
                                            <input class="form-control" type="text" placeholder="4"
                                                aria-label="Disabled input example" disabled>
                                        </div>

                                        <div class="flex-fill">
                                            <label for="text" class="form-label">الرسوم</label>
                                            <input class="form-control" type="text" placeholder="5 دك"
                                                aria-label="Disabled input example" disabled>
                                        </div>
                                    </div>
                                </form>
                                <i class="fa-regular fa-envelope-open"></i> سيتم إرسال رسالة نصية عبر الهاتف والإيميل
                                لتأكيد عملية تسديد الرسوم المستحقة لديكم،
                                حتى ييتم إعتماد الإشتراك في البرنامج.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                                <button class="button" type="submit"><i class="fa-solid fa-user-plus"></i><a href=""
                                        target="_blank" rel="noopener noreferrer"
                                        style="text-decoration: none;color: white">تأكيد الإشتراك</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card card-container position-relative">
                        <div class="status-badge closed">مغلق</div> <!-- حالة البطاقة -->
                        <img src="imag/ss.jpg" class="card-img-top card-img" alt="صورة بطاقة">
                        <div class="card-body">
                            <h5 class="card-title mb-0">برنامج صناع الحياة</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="price text-muted remaining-participants">العدد المتبقي للمشتركين : 15</p>
                                <span class="price text-muted" style="font-size: 16px;">السعر: 5 دينار</span>
                            </div>
                            <button class="button" onclick="toggleCard(this)">
                                اقرأ التفاصيل
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                    <path clip-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm1.33 12.914l-2.792 2.792c-.293.293-.767.293-1.06 0l-.53-.53c-.293-.293-.293-.767 0-1.06L10.47 12 9.03 10.56c-.293-.293-.293-.767 0-1.06l.53-.53c.293-.293.767-.293 1.06 0l2.793 2.792c.293.293.293.767 0 1.06z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="card-overlay">
                            <div class="card-back">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                        <line x1="8" y1="8" x2="16" y2="8"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                        <circle cx="12" cy="16" r="1"></circle>
                                    </svg> <b>تفاصيل البرنامج :</b> برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي
                                    يتخلل البرنامج مجموعة من الأنشطة الرياضية والثقافية.</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="6" x2="12" y2="12"></line>
                                        <line x1="12" y1="12" x2="16" y2="14"></line>
                                    </svg> <b>مدة البرنامج :</b> يوم واحد من ساعة ٣:٣٠ إلى ٥:٣٠م</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="2" y1="10" x2="22" y2="10"></line>
                                        <line x1="6" y1="15" x2="6" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="15"></line>
                                        <line x1="18" y1="15" x2="18" y2="15"></line>
                                    </svg> <b>قيمة الاشتراك :</b> ٥ دك</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="4" y="8" width="16" height="6" rx="2" ry="2"></rect>
                                        <line x1="4" y1="14" x2="4" y2="18"></line>
                                        <line x1="20" y1="14" x2="20" y2="18"></line>
                                        <line x1="8" y1="18" x2="8" y2="22"></line>
                                        <line x1="16" y1="18" x2="16" y2="22"></line>
                                    </svg> <b>عدد المقاعد المتاحة :</b> ٢٠ مقعد</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 2 L2 7 L12 12 L22 7 L12 2 Z"></path>
                                        <line x1="12" y1="12" x2="12" y2="22"></line>
                                        <path d="M7 16 L17 16"></path>
                                    </svg> <b>المرحلة :</b> الصف الرابع</div>
                                <button class="gogo"><i class="fa-solid fa-plus"></i> إشتراك</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card card-container position-relative">
                        <div class="status-badge open">مفتوح</div> <!-- حالة البطاقة -->
                        <img src="imag/12.jpeg" class="card-img-top card-img" alt="صورة بطاقة">
                        <div class="card-body">
                            <h5 class="card-title mb-0">برنامج صناع الحياة</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="price text-muted remaining-participants">العدد المتبقي للمشتركين : 15</p>
                                <span class="price text-muted" style="font-size: 16px;">السعر: 5 دينار</span>
                            </div>
                            <button class="button" onclick="toggleCard(this)">
                                اقرأ التفاصيل
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                    <path clip-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm1.33 12.914l-2.792 2.792c-.293.293-.767.293-1.06 0l-.53-.53c-.293-.293-.293-.767 0-1.06L10.47 12 9.03 10.56c-.293-.293-.293-.767 0-1.06l.53-.53c.293-.293.767-.293 1.06 0l2.793 2.792c.293.293.293.767 0 1.06z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="card-overlay">
                            <div class="card-back">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                        <line x1="8" y1="8" x2="16" y2="8"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                        <circle cx="12" cy="16" r="1"></circle>
                                    </svg> <b>تفاصيل البرنامج :</b> برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي
                                    يتخلل البرنامج مجموعة من الأنشطة الرياضية والثقافية.</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="6" x2="12" y2="12"></line>
                                        <line x1="12" y1="12" x2="16" y2="14"></line>
                                    </svg> <b>مدة البرنامج :</b> يوم واحد من ساعة ٣:٣٠ إلى ٥:٣٠م</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="2" y1="10" x2="22" y2="10"></line>
                                        <line x1="6" y1="15" x2="6" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="15"></line>
                                        <line x1="18" y1="15" x2="18" y2="15"></line>
                                    </svg> <b>قيمة الاشتراك :</b> ٥ دك</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="4" y="8" width="16" height="6" rx="2" ry="2"></rect>
                                        <line x1="4" y1="14" x2="4" y2="18"></line>
                                        <line x1="20" y1="14" x2="20" y2="18"></line>
                                        <line x1="8" y1="18" x2="8" y2="22"></line>
                                        <line x1="16" y1="18" x2="16" y2="22"></line>
                                    </svg> <b>عدد المقاعد المتاحة :</b> ٢٠ مقعد</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 2 L2 7 L12 12 L22 7 L12 2 Z"></path>
                                        <line x1="12" y1="12" x2="12" y2="22"></line>
                                        <path d="M7 16 L17 16"></path>
                                    </svg> <b>المرحلة :</b> الصف الرابع</div>
                                <button class="gogo"><i class="fa-solid fa-plus"></i> إشتراك</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card card-container position-relative">
                        <div class="status-badge expired">منتهي</div> <!-- حالة البطاقة -->
                        <img src="imag/s.jpg" class="card-img-top card-img" alt="صورة بطاقة">
                        <div class="card-body">
                            <h5 class="card-title mb-0">برنامج صناع الحياة</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="price text-muted remaining-participants">العدد المتبقي للمشتركين : 15</p>
                                <span class="price text-muted" style="font-size: 16px;">السعر: 5 دينار</span>
                            </div>
                            <button class="button" onclick="toggleCard(this)">
                                اقرأ التفاصيل
                                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                    <path clip-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm1.33 12.914l-2.792 2.792c-.293.293-.767.293-1.06 0l-.53-.53c-.293-.293-.293-.767 0-1.06L10.47 12 9.03 10.56c-.293-.293-.293-.767 0-1.06l.53-.53c.293-.293.767-.293 1.06 0l2.793 2.792c.293.293.293.767 0 1.06z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="card-overlay">
                            <div class="card-back">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                        <line x1="8" y1="8" x2="16" y2="8"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                        <circle cx="12" cy="16" r="1"></circle>
                                    </svg> <b>تفاصيل البرنامج :</b> برنامج حركي ترفيهي قيمي يكون بعد الدوام المدرسي
                                    يتخلل البرنامج مجموعة من الأنشطة الرياضية والثقافية.</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="6" x2="12" y2="12"></line>
                                        <line x1="12" y1="12" x2="16" y2="14"></line>
                                    </svg> <b>مدة البرنامج :</b> يوم واحد من ساعة ٣:٣٠ إلى ٥:٣٠م</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="2" y1="10" x2="22" y2="10"></line>
                                        <line x1="6" y1="15" x2="6" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="15"></line>
                                        <line x1="18" y1="15" x2="18" y2="15"></line>
                                    </svg> <b>قيمة الاشتراك :</b> ٥ دك</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="4" y="8" width="16" height="6" rx="2" ry="2"></rect>
                                        <line x1="4" y1="14" x2="4" y2="18"></line>
                                        <line x1="20" y1="14" x2="20" y2="18"></line>
                                        <line x1="8" y1="18" x2="8" y2="22"></line>
                                        <line x1="16" y1="18" x2="16" y2="22"></line>
                                    </svg> <b>عدد المقاعد المتاحة :</b> ٢٠ مقعد</div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="black" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 2 L2 7 L12 12 L22 7 L12 2 Z"></path>
                                        <line x1="12" y1="12" x2="12" y2="22"></line>
                                        <path d="M7 16 L17 16"></path>
                                    </svg> <b>المرحلة :</b> الصف الرابع</div>
                                <button class="gogo"><i class="fa-solid fa-plus"></i> إشتراك</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <section id="moderators" class="sponsor-section">
            <div class="container">
                <div class="page-title d-flex align-items-center justify-content-center">
                    <div class="line"></div>
                    <h2 class="animated-title">برعاية</h2>
                </div>
                <div id="sponsorCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imag/gop.png" class="d-block w-100" alt="شعار الشركة 1">
                        </div>
                        <div class="carousel-item">
                            <img src="imag/gop.png" class="d-block w-100" alt="شعار الشركة 2">
                        </div>
                        <!-- تكرار الشرائح لعرضها بشكل متواصل -->
                        <div class="carousel-item">
                            <img src="imag/gop.png" class="d-block w-100" alt="شعار الشركة 1">
                        </div>
                        <div class="carousel-item">
                            <img src="imag/gop.png" class="d-block w-100" alt="شعار الشركة 2">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#sponsorCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">السابق</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#sponsorCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">التالي</span>
                    </button>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#sponsorCarousel" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#sponsorCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#sponsorCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#sponsorCarousel" data-bs-slide-to="3"></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- محتوى الصفحة -->
    </div>
@endsection