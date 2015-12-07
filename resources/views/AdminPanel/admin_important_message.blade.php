@extends("AdminPanel.admin_master")
@section("content")

<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js')}}"></script>

<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <article class="module width_full">
        <header>
            <h3 style="text-transform: none;">
                Важно съобщение 
                <select id="messageVisibility" name="messageVisibility" style="margin-left: 5px;" required>
                    <option <?php if($data["visibility"] == 1) echo 'selected' ?> value="1">Видимо</option>
                    <option <?php if($data["visibility"] == 0) echo 'selected' ?> value="0">Невидимо</option>
                </select>
            </h3>
        </header>
        <textarea name="editor" id="editor"><?php echo $data["message"]; ?></textarea>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Редактирай" class="alt_btn">
            </div>
        </footer>
    </article>

</form>

<script type="text/javascript">
CKEDITOR.replace('editor');
</script>
@stop