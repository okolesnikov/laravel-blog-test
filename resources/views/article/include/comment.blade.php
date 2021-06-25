<form id="comment" method="POST">
    @csrf
    <input type="hidden" name="article_id" value="{{ $id }}">
    <h4>Оставить комментарий</h4>
    <div class="mb-3">
        <label for="subject" class="form-label">Тема сообщения</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Тема сообщения">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Сообщение</label>
        <textarea class="form-control" id="body" name="body" rows="5"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Отправить">
    <p id="commentError"></p>
</form>
