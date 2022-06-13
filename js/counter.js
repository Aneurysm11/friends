window.addEventListener('click', function(event) {
    let counter; let a = 5;
    //  Проверяем клик строго по кнопкам + или -
    if (event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus' || event.target.dataset.action === 'plusfive' || event.target.dataset.action === 'minusfive') {
        const counterWrapper = event.target.closest('.counter-wrapper');
        counter = counterWrapper.querySelector('[data-counter]'); 
    }

    console.log(event.target.dataset.action);
    if (event.target.dataset.action === 'plusfive') {
        counter.innerText = ++counter.innerText + 4;
        calcCart();
    }
    // Проверяем является ли элемент кнопкой plus
    if (event.target.dataset.action === 'plus') {
        counter.innerText = ++counter.innerText;
        calcCart();
    }
    // Проверяем является ли элемент кнопкой minus
    if (event.target.dataset.action === 'minus') {
        if (parseInt(counter.innerText) > 1) {
            // Уменьшение счётчика на единицу
            counter.innerText = --counter.innerText;
            calcCart();
        }
    }
    if (event.target.dataset.action === 'minusfive') {
        if (parseInt(counter.innerText) > 5) {
            // Уменьшение счётчика на единицу
            counter.innerText = --counter.innerText - 4;
            calcCart();
        }
    }
});


