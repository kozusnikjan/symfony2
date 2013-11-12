<div class="left">
    <a href="<?php  echo $view['router']->generate('acme_admin_homepage') ?>"><h1>Admin</h1></a>
</div>
<div class="right" id="loginInfo">
    Přihlášen jako <b><?= $app->getUser()->getUsername() ?></b>
    <a href="<?php echo $view['router']->generate('logout') ?>">Odhlásit</a>
</div>

<div class="clear"></div>

<!--<div id="mainNav">
    <ul>
      <li><a href="#">Obsah</a>
          <ul>
              <li><a href="<?php // echo $view['router']->generate('acme_admin_text') ?>">Texty</a>
                  <ul>
                      <li><a href="<?php // echo $view['router']->generate('acme_admin_text') ?>">Výpis</a></li>
                      <li><a href="<?php // echo $view['router']->generate('acme_admin_text_add') ?>">Přidej</a></li>
                  </ul>
              </li>
              <li><a href="#">Galerie</a>
                  <ul>
                      <li><a href="#">Výpis</a></li>
                      <li><a href="#">Přidej</a></li>
                  </ul>
              </li>
              <li><a href="#">Ankety</a>
                  <ul>
                      <li><a href="#">Výpis</a></li>
                      <li><a href="#">Přidej</a></li>                  
                   </ul>
              </li>
          </ul>
      </li>
      <li><a href="#">Soubory</a>
          <ul>
              <li><a href="#">Výpis</a></li>
          </ul>
      </li>
      <li><a href="<?php // echo $view['router']->generate('acme_admin_task') ?>">Úkoly</a>
          <ul>
              <li><a href="<?php // echo $view['router']->generate('acme_admin_task') ?>">Výpis</a></li>
              <li><a href="<?php // echo $view['router']->generate('acme_admin_task_add') ?>">Přidej</a></li>
          </ul>
      </li>
      <li><a href="#">Uživatelé</a>
          <ul>
              <li><a href="#">Výpis</a></li>
              <li><a href="#">Přidej</a></li>
          </ul>
      </li>

    </ul>
  </div>-->
