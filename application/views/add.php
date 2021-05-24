<div class="container">
  <div class="row">
    <div class="col-2">
        <form action="/index.php/topic/add" method="post">
            <?php echo validation_errors(); ?>
            <input type="text" name="title" placeholder="제목"/>
            <textarea name="description" placeholder="본문" rows="15"></textarea>
            <input type="submit" />
        </form>
    </div>