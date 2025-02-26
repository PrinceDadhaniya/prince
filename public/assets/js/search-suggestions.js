document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const searchResults = document.getElementById('search-suggestions');

    searchInput.addEventListener('input', function() {
        const query = this.value;

        if (query.length < 1) {
            searchResults.style.display = 'none';
            return;
        }

        fetch(`/search?q=${query}`)
            .then(response => response.json())
            .then(products => {
                searchResults.innerHTML = '';

                if (products.length > 0) {
                    products.forEach(product => {
                        const a = document.createElement('a');
                        a.href = `/product/${product.id}`;
                        a.classList.add('list-group-item', 'list-group-item-action');
                        a.textContent = product.name;
                        searchResults.appendChild(a);
                    });
                    searchResults.style.display = 'block';
                } else {
                    const span = document.createElement('span');
                    span.classList.add('list-group-item');
                    span.textContent = 'No products found';
                    searchResults.appendChild(span);
                    searchResults.style.display = 'block';
                }
            });
    });

    document.addEventListener('click', function(event) {
        if (!event.target.closest('#search-input') && !event.target.closest('#search-suggestions')) {
            searchResults.style.display = 'none';
        }
    });
});
