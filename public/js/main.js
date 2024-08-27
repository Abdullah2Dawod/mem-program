
// تغيير حجم ولون النافبار عند التمرير
window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var navbar = document.querySelector('.navbar');
    var toggler = document.querySelector('.navbar-toggler');
  
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        toggler.classList.add('scrolled');
      } else {
        toggler.classList.remove('scrolled');
      }
    });
  });
  

// دالة للتبديل بين الحالة المعكوسة والمعتادة للبطاقة
function toggleCard(button) {
    const cardContainer = button.closest('.card-container');
    const allCards = document.querySelectorAll('.card-container');

    // إعادة جميع البطاقات الأخرى إلى الوضع الطبيعي
    allCards.forEach(card => {
        if (card !== cardContainer) {
            card.classList.remove('flipped');
        }
    });

    // تبديل حالة البطاقة الحالية
    cardContainer.classList.toggle('flipped');
}

// إغلاق جميع البطاقات عند الضغط خارجها
document.addEventListener('click', function (event) {
    const allCards = document.querySelectorAll('.card-container.flipped');
    let clickedInsideCard = false;

    // التحقق مما إذا كان الضغط كان داخل البطاقة
    allCards.forEach(card => {
        if (card.contains(event.target)) {
            clickedInsideCard = true;
        }
    });

    // إذا كان الضغط خارج البطاقة، قم بإزالة الكلاس "flipped" من جميع البطاقات
    if (!clickedInsideCard) {
        allCards.forEach(card => {
            card.classList.remove('flipped');
        });
    }
});

let studentCount = 1;

document.getElementById('addStudentBtn').addEventListener('click', function () {
    studentCount++;
    const newField = document.createElement('div');
    newField.className = 'mb-3 d-flex gap-3';
    newField.innerHTML = `
        <div class="flex-fill">
            <label for="student-name-${studentCount}" class="form-label">اسم الطالب</label>
            <input type="text" class="form-control" id="student-name-${studentCount}" name="studentName[]" required>
        </div>
        <div class="flex-fill">
            <label class="form-label" for="specificSizeSelect-${studentCount}">المرحلة الدراسية</label>
            <select class="form-select" id="specificSizeSelect-${studentCount}" name="studentGrade[]">
                <option selected>إختر</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    `;
    document.getElementById('studentFields').appendChild(newField);
});