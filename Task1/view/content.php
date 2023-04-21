
<? if (!empty($data)) : ?>
    <h2 class="title">Вывод из файла</h2>
    
    <div class="elems">
        <? foreach($data as $item) : ?>
            <div class="elem_item"><span class="str"><?= $item['string']; ?></span>  = <span class="count"><?= $item['count']; ?></span></div>
        <? endforeach; ?>
    </div>
   
<? endif; ?>