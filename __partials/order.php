<div class="modal fade" id="sign-in">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
                <h3>Заказать билет</h3>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sname" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control half-input" name="from" placeholder="Откуда">
                        <input type="text" class="form-control half-input" name="to" placeholder="Куда">
                    </div>
                    <div class="form-group">
                        <select name="clas" id="clas" class="form-control">
                            <option disabled selected>Выберите класс</option>
                            <option value="1">Эконом класс</option>
                            <option value="2">Премиум класс</option>
                            <option value="3">Бизнес класс</option>
                            <option value="4">Первый класс</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="date">Дата:</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="form-group">
                        <label for="passport">Копия паспорта:</label>
                        <input type="file" class="form-control" name="passport" id="passport">
                    </div>
                    <div class="form-group">
                        <label for="tel">Телефон</label>
                        <input type="tel" class="form-control" name="tel" value="+992 " id="tel">
                    </div>


                    <button type="submit" class="btn btn-success">Заказать</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="connect_footer">*Мы свяжемся с вами в течении 24-x часов</p>
                <button class="btn btn-danger" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>