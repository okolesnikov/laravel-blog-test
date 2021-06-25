export function comment() {
    const commentForm = document.getElementById('comment');

    if(commentForm) {
        commentForm.onsubmit = async function (e) {
            e.preventDefault();
            const formData = new FormData(commentForm);
            const id = formData.get('article_id');

            axios.post(`/api/article/comment/${id}`, formData)
                .then((response) => {
                    commentForm.innerHTML = `<p>${response.data.message}</p>`;
                }, (error) => {
                    const commentError = document.getElementById('commentError');
                    commentError.innerText = error.response.data.message;
                });
        }
    }
}
