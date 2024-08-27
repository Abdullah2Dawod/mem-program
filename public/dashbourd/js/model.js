document.addEventListener('DOMContentLoaded', function () {
    const maxLength = 30; // تحديد عدد الحروف المراد عرضها
    const detailsElements = document.querySelectorAll('.program-details');

    detailsElements.forEach((element) => {
        const fullText = element.textContent.trim();
        if (fullText.length > maxLength) {
            const truncatedText = fullText.substring(0, maxLength) + '...';
            element.textContent = truncatedText;
            const readMoreLink = document.createElement('a');
            readMoreLink.href = '#';
            readMoreLink.classList.add('read-more');
            readMoreLink.setAttribute('data-toggle', 'modal');
            readMoreLink.setAttribute('data-target', '#detailsModal');
            readMoreLink.textContent = 'اقرأ المزيد';
            readMoreLink.style.display = 'inline';
            element.appendChild(readMoreLink);

            readMoreLink.addEventListener('click', function () {
                document.getElementById('modalDetailsText').textContent = fullText;
            });
        }
    });
});
