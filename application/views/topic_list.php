<div class="container">
  <div class="row">
    <div class="col-2">
    <ul class="nav justify-content-left">
    <?php
    foreach($topics as $entry){
    ?>
        <li class="nav-item"><a href="/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
    <?php
    }
    ?>
    </ul>
    </div>
