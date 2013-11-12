<ul class="nav">
    <li>
            <a href="<?php  echo $view['router']->generate('acme_admin_homepage') ?>">Domů</a>
    </li>
    <li>
            <a href="<?php echo $view['router']->generate('acme_admin_text') ?>">Texty</a>
            <ul>    
                <li><a href="<?php echo $view['router']->generate('acme_admin_text') ?>">Zobraz texty</a></li>
                <li><a href="<?php echo $view['router']->generate('acme_admin_text_add') ?>">Přidej text</a></li>
            </ul>
    </li>
    <li>
            <a href="<?php echo $view['router']->generate('acme_admin_task') ?>">Úkoly</a> 
            <ul>
                <li><a href="<?php echo $view['router']->generate('acme_admin_task') ?>">Zobraz úkoly</a></li>
                <li><a href="<?php echo $view['router']->generate('acme_admin_task_add') ?>">Přidej úkol</a></li>       
            </ul>
    </li>
    <li>
        <a href="<?php echo $view['router']->generate('acme_admin_messages_web') ?>">Zprávy z webu</a>
    </li>
    <li>
        <a href="">Newsletter</a>
        <ul>
            <li><a href="<?php echo $view['router']->generate('acme_admin_newsletter_users') ?>">Uživatelé</a></li>
            <li><a href="<?php echo $view['router']->generate('acme_admin_newsletter_texts') ?>">Texty</a></li>
        </ul>
    </li>
</ul>