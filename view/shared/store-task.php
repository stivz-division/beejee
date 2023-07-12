<div class="card mt-3">
  <div class="card-header">
    Создание заказа
  </div>
  <div class="card-body">
    <form action="/task/store" method="post">
      <div class="mb-3">
        <label for="author" class="form-label">Имя пользователя</label>
        <input type="text" class="form-control" name="author" id="author"
               placeholder="Ванька" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email
          address</label>
        <input type="email" name="email" class="form-control"
               id="exampleFormControlInput1" placeholder="name@example.com"
               required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Текст
          задачи</label>
        <textarea class="form-control" name="body"
                  id="exampleFormControlTextarea1" rows="3"
                  required></textarea>
      </div>

      <input type="submit" class="btn btn-primary mt-2" value="Создать">

    </form>
  </div>
</div>