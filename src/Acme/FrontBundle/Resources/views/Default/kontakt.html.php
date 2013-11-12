<!-- src/Acme/FrontBundle/Resources/views/Default/kontakt.html.php -->



<div id="kontakt" class="content twoColumns">
                <h2>Kontakt</h2>
                <div id="kontaktList" class="column left">
                    <ul>
                        <li>Zaujaly Vás <span class="highlight">mé</span> práce?</li>
                        <li><span class="highlight">Zaujal</span> jsem Vás?</li>
                        <li>Potřebujete <span class="highlight">poradit</span>?</li>
                        <li class="textSeparator" style="width: 100%"></li>
                        <li>Kontaktuje mě</li>
                    </ul>
                </div>
                <div id="kontaktForm" class="right">
                <div class="column">
                    <h3 style="">Na tomto emailu:</h3>
                    <a href="mailto:kozusnikjan@gmail.com" title="kozusnikjan@gmail.com" style=""><i class="icon-mail-forward"></i> kozusnikjan@gmail.com</a>
                </div><br>
                <div class="column">
                    <h3>Nebo tímto kontaktním formulářem: </h3>
<?php foreach ($view['session']->getFlash('noticeMessagesWeb') as $message): ?>
    <div class="flash-notice">
        <?php echo "<div class='flash-error'>$message</div>" ?>
    </div>
<?php endforeach; ?>
                   <?php echo $view['form']->form($messagesWebForm) ?>
                </div>
                </div>
                <div class="clear"></div>
                <br>
            </div>
