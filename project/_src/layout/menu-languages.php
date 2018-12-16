<?if(count(cq()->langActives(false))>1):?>
    <?foreach (cq()->langActives(false) as $langCode):?>
        <li>
            <a class="<?=the()->project->langCode==$langCode?"active":""?>"
               data-is-lang="<?=$langCode?>" href="#"><?=$langCode?></a>
        </li>
    <?endforeach;?>
<?endif;?>