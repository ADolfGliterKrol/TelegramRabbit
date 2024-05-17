// Проверяем, есть ли значение счетчика в localStorage
if(localStorage.getItem('visits')) {
    // Если значение существует, увеличиваем его на 1 и обновляем на странице
    let visits = parseInt(localStorage.getItem('visits')) + 1;
    localStorage.setItem('visits', visits);
    updateCounter(visits);
} else {
    // Если значение не существует, устанавливаем его равным 1 и обновляем на странице
    localStorage.setItem('visits', 1);
    updateCounter(1);
}

// Функция для обновления значения счетчика на странице
function updateCounter(visits) {
    // Находим элемент с id="counter" и обновляем его текст значением счетчика
    let counterElement = document.getElementById('counter');
    if (counterElement) {
        counterElement.textContent = "Количество посещений: " + visits;
    }
}
