<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><b><?php echo $title; ?></b></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-9">
                        <form action="add" method="post">
                            <div class="form-group">
                                <label>категория статьи</label>
                                <select class="form-control" type="button" name="category">
                                    <option value="1">категория 1</option>
                                    <option value="2">категория 2</option>
                                    <option value="3">Категория 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" name="description">
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea name="text" id="editor" ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/public/ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
