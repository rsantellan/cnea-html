<ul id="sortable">
  <?php foreach($list as $registro): ?>
    <li id="listItem_<?php echo $registro->id;?>" class="ui-state-default">
      <span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo $registro->code;?>
    </li>
  <?php endforeach; ?>
</ul>