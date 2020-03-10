<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');

require_once INCLUDE_DIR . 'class.page.php';

$section = 'home';
require(CLIENTINC_DIR.'header.inc.php');
?>


<div class="ui text container banner">
    <h1 class="ui inverted header">
        <!-- Imagine-a-Company -->
    </h1>
    <h2>Bem-vindos ao Sistema de Gestão de Chamados da TI da Prefeitura Municipal de Araquari</h2>
    <!-- <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div> -->

    <?php include CLIENTINC_DIR.'templates/sidebar1.tmpl.php'; ?>

</div>

</div>

<!-- <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
        <div class="row">
            <div class="eight wide column">





            </div>
            <!-- <div class="six wide right floated column">
                <!-- <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image"> -->
                <!-- <div class="thread-body"> -->
                <?php // include CLIENTINC_DIR.'templates/sidebar.tmpl.php'; ?>

            <!-- </div>  -->
            <!-- </div> -->
            <!-- <div class="clear"></div>

            <div> -->
        <!-- </div> -->
        <!-- <div class="row">
            <div class="center aligned column">
                <a class="ui huge button">Check Them Out</a>
            </div>
        </div> -->
    <!-- </div> -->
<!-- </div>  -->


<div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
        <div class="center aligned row">
            <div class="twelve wide column centered ">
                <div class="thread-body">

                    <?php
                        if($cfg && ($page = $cfg->getLandingPage()))
                            echo $page->getBodyWithImages();
                        else
                            echo  '<h1>'.__('Welcome to the Support Center').'</h1>';
                        ?>
                </div>
            </div>


            <!-- Editar aqui -->
            <div id="landing_page">

                <div class="main-content">
                    <?php if ($cfg && $cfg->isKnowledgebaseEnabled()) { ?>
                    <div class="search-form">
                        <form method="get" action="kb/faq.php">
                            <input type="hidden" name="a" value="search" />
                            <input type="text" name="q" class="search"
                                placeholder="<?php echo __('Search our knowledge base'); ?>" />
                            <button type="submit" class="green button"><?php echo __('Search'); ?></button>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php if($cfg && $cfg->isKnowledgebaseEnabled()){ 
                           //FIXME: provide ability to feature or select random FAQs ?? ?>
            <!-- <br /><br /> -->
            <?php $cats = Category::getFeatured();
                           if ($cats->all()) { ?>
            <h1><?php echo __('Featured Knowledge Base Articles'); ?></h1>
            <?php
                       }
                       foreach ($cats as $C) { ?>
            <div class="featured-category front-page">
                <i class="icon-folder-open icon-2x"></i>
                <div class="category-name">
                    <?php echo $C->getName(); ?>
                </div>
                <?php foreach ($C->getTopArticles() as $F) { ?>
                <div class="article-headline">
                    <div class="article-title"><a href="<?php echo ROOT_PATH;
                                   ?>kb/faq.php?id=<?php echo $F->getId(); ?>"><?php
                                       echo $F->getQuestion(); ?></a></div>
                    <div class="article-teaser"><?php echo $F->getTeaser(); ?></div>
                </div>
                <?php } ?>
            </div>
            <?php
                           }
                        }
                       ?>
        <!-- </div>
    </div>
        <h3>"What a Company"</h3>
        <p>That is what they all say about us</p> -->
    <!-- </div> -->
    <!-- <div class="column">
        <h3>"I shouldn't have gone with their competitor."</h3>
        <p>
            <img src="assets/images/avatar/nan.jpg" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme
            Toys
        </p> -->
    </div>
</div>
<!-- </div>
</div> -->


<div class="ui inverted vertical footer segment">
    <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
            <div class="three wide column">
                <h4 class="ui inver
          ted header">About</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Sitemap</a>
                    <a href="#" class="item">Contact Us</a>
                    <a href="#" class="item">Religious Ceremonies</a>
                    <a href="#" class="item">Gazebo Plans</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">Services</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Banana Pre-Order</a>
                    <a href="#" class="item">DNA FAQ</a>
                    <a href="#" class="item">How To Access</a>
                    <a href="#" class="item">Favorite X-Men</a>
                </div>
            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header">Footer Header</h4>
                <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
            </div>
        </div>
    </div>
</div>
</div>

</body>

</html>















<?php #require(CLIENTINC_DIR.'footer.inc.php'); ?>