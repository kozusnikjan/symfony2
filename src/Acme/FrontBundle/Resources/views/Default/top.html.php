<!-- src/Acme/FrontBundle/Resources/views/Default/top.html.php -->


    <div id="contentTop">
                   <div id="header">
                    <div class="left">
                        <a href="http://www.kozusnikjan.com">
                            
                        <img src="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/images/logo.png') ?>" alt="Jan Kožušník">
                        </a>
                    </div>
                    <div id="nav" class="right">
                        <?php echo $view->render('AcmeFrontBundle:Components:menu.html.php') ?>
                    </div>
                    <div class="clear"></div>
                </div>
                    <div id="topText">
                <div id="bigText">
                    Ahoj, jsem 19 letý student posledního ročníku gymnázia.<br>
                    Zabývám se tvorbou webových stránek a poradenstvím v tomto oboru.<br>
                    Chcete kvalitní a úspěšný web? Přihlaste se k odběru tipů a e-book
                </div>
                    <div class="textSeparator"></div>
                <div id="normalText">
                    <span style="color: #00a284; font-weight:bold">Chcete kvalitní web?</span> Kvalitních webů je dnes málo a proto jsem se rozhodl, že zájemcům pošlu 5 emailů, ve kterých bude 5 tipů, jak si (nechat) vytvořit kvalitní web. Tyto emaily poté shrnu a pošlu Vám e-book, který bude rovněž zdarma <br>
                    Chcete vědět, jak na kvalitní web? Přihlaste se k odběru 5 tipů pro kvalitní a prosperující web<br>
                    Možnost přihlásit se bude již brzy dostupná. Omlouvám se za vzniklé nepříjemnosti
                    <div class="clear"></div>
                    <div id="ebook">
                        <div id="ebookForm" class="left">
<?php foreach ($view['session']->getFlash('noticeNewsletter') as $message): ?>
    <div class="flash-notice">
        <?php echo "<div class='flash-error'>$message</div>" ?>
    </div>
<?php endforeach; ?>
                        <?php echo $view['form']->start($newsletterForm) ?>
                            <div class="errBig">
                                    <?php echo $view['form']->errors($newsletterForm) ?>
                            </div>

                                <?php echo $view['form']->row($newsletterForm['name']) ?>
                                <?php echo $view['form']->row($newsletterForm['email']) ?>
                                <?php echo $view['form']->row($newsletterForm['send']) ?>
                        <?php echo $view['form']->end($newsletterForm) ?>
                        <span class="right" style="font-size: 13px; position: relative; left: -16px; top: -28px; width: 350px">
                            Již brzy bude možno přihlásit se k odběru tipů pro web.
                            Váš email nebude nijak zneužit. Odběr lze kdykoliv odhlásit

                        </span>
                        </div>

                    <!--</form>-->
<!--                    <div class="right" id="ebookFormInfo">
                        Váš email nebude nijak zneužit. Odběr lze kdykoliv odhlásit
                    </div>-->
                    <div class="clear"></div>
                    </div>
                </div>
                </div>
                <div id="moreArrow">
                    Více
                </div>
                </div>
