<div class="container">
  <div class="row">
    <div class="col-2" style="margin-top: 30px;">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <?php
    foreach($topics as $entry){
    ?>
        <li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tabpane" aria-controls="profile" aria-selected="true"><a href="/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></button></li>
    <?php
    }
    ?>
    </ul>
    </div>
