const injectCarsToDOM = cars => {
    const resultsDiv = document.querySelector('#results');
    resultsDiv.innerHTML = '';

    cars.forEach(car => {
        let html = `
            <div class="result">
                <div class="img">
                    <img src="${car.image}" alt="${car.title}">
                </div>
                <div class="content">
                    <div class="header">
                        <div class="col1">
                            <h2>${car.title}</h2>
                            <p>${car.description}</p>
                        </div>
                        <div class="col2">
                            <b>${car.price}</b>
                            <span>${car.date} <br> ${car.time}</span>
                        </div>
                    </div>
                    <div class="location">
                        <p>${car.location}</p>
                    </div>
                </div>
            </div>
        `;

        resultsDiv.innerHTML += html;
    });
}

const getCars = search => fetch(`/api/olxCrawler/${search}`)
    .then(res => res.ok ? res.json() : Promise.reject(res))
    .then(data => injectCarsToDOM(data))
    .then(() => location = '#results');

const form = document.getElementById('form');

form.addEventListener('submit', e => {
    e.preventDefault();

    const search = e.target[0].value;

    getCars(search);
})
