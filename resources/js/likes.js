export function likes() {
    [].forEach.call(document.querySelectorAll('.like'), function(like) {
        like.addEventListener('click', function(e) {
            e.preventDefault();
            const id = like.dataset.id;

            axios.post(`/api/article/likes/${id}`)
                .then((response) => {
                    like.innerHTML = `<i class="far fa-heart"></i> ${response.data.likes}`;
                }, (error) => {
                    console.log(error.data);
                });
        });
    });
}
