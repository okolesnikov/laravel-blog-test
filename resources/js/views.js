export function views() {
    const articleView = () => {
        const view = document.getElementById('articleView');

        if (view) {
            const id = view.dataset.id;

            axios.post(`/api/article/views/${id}`)
                .then((response) => {
                    view.innerHTML = `<i class="far fa-eye"></i> ${response.data.views}`;
                }, (error) => {
                    console.log(error.data);
                });
        }
    }

    setTimeout(articleView, 5000);
}
