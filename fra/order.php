<?php
include('../links.php');
include('../segments.php');
require('../segments_order.php');
display_head();
?>
            <div><!-- Buy WinMessenger content -->
              <h1><em>WinMessenger:</em> Un utilitaire de messagerie en temps réel simple er facile</h1>
              <h2>Acheter WinMessenger</h2>

              <ul style="list-style-type:disc;">
                <li>
                  <a href="#ordering">Commande et paiement</a>
                </li>
                <li>
                  <a href="#prices">Tarifs et numéros de produits</a>
                </li>
                <li>
                  <a href="#academic">Rabais éducatifs</a>
                </li>
              </ul>

              <div class="hr"></div>

              <a id="prices"></a>
              <h4>Tarifs et numéros de produits</h4>

              <p>Nous sommes très heureux de votre intérêt en WinMessenger ! Nous espérons que WinMessenger vous sera toujours d’une grande utilité.</p>
              <p>
                VyPRESS Research offre son logiciel à un prix incroyablement bas qui <b>comprend les mises à jour et le soutien technique gratuits et à vie !</b>
              </p>

<?php display_price_table(); ?>

              <p>
                WinMessenger est vendu sous forme de licence par ordinateur et non de licence par réseau, site ou entreprise (à l’exception de la licence illimitée, qui s’applique à toute une entreprise).
              </p>
              <p>
                Nous pouvons personnaliser WinMessenger pour l’adapter aux besoins spécifiques de votre organisation, au tarif de 80$ l’heure. Si vous désirez une version personnalisée, veuillez contacter notre personnel des ventes :  <?=MAIL_SALES_LINK?>
            </p>

              <div class="hr"></div>

              <a id="ordering"></a>
              <h4>Commande et paiement</h4>
              <p>
                Nous acceptons cinq modes de paiement :
                  <a href="#www">en ligne</a>, télécopieur, téléphone, transfert bancaire
                et par la poste. <a href="#www">Paiement sécuritaire</a> garanti. Les paiements doivent être effectués en dollars US ($) ou en euros (&euro;).
              </p>

              <p>
                Votre licence sera valide pour toutes les versions ultérieures du produit. Vous n’aurez jamais à débourser pour une mise à jour !
              </p>
              <p>
                Si vous n’obtenez pas votre licence d’exploitation après un délai raisonnable (généralement deux jours ouvrables pour les paiements par carte de crédit, deux semaines pour les autres modes de paiement), veuillez nous en informer (<?=MAIL_SALES_LINK?>) ! Nous nous excusons pour tout contretemps résultant de tels délais.
              </p>
              <ul>
                <li>
                  <a href="http://www.shareit.com/ccc/index.html?publisherid=11132&amp;cccid=[DASID_3980]&amp;languageid=6">Comment dois-je procéder pour commander via le service clientèle ?</a>
                </li>
                <li>
                  <a href="http://www.shareit.com/ccc/index.html?publisherid=11132&amp;cccid=[DASID_6004]&amp;languageid=6">Comment puis-je commander sur facture ?</a>
                </li>
                <li>
                  <a href="http://www.shareit.com/ccc/index.html?publisherid=11132&amp;languageid=6">Customer Care Center</a>
                </li>
              </ul>
              <p>
                WinMessenger est disponible sous forme de <a href="download.php">téléchargement</a>. Après avoir acheté le produit en remplissant le <a href="#www">formulaire de commande en ligne</a>, vous recevrez une licence d’exploitation par e-mail pour déverrouiller le logiciel. Vous pouvez télécharger la version d’essai du logiciel avant ou après avoir complété la procédure d’achat.
              </p>


              <a id="www"></a>
              <h5>Commander sur le web</h5>

              <p>
                C’est la façon la plus simple et la plus rapide de commander WinMessenger.
                Les informations de votre carte de crédit sont acheminées directement et en toute sécurité
                (<img src="../img/pix/SiteSecurityGraphic.gif" width="20" height="20" alt="Lock" style="vertical-align:middle;"/>)
                au processeur de cartes de crédit.
                Afin de vous protéger, nous nous assurons que seuls vous et le processeur automatisé de cartes de crédit êtes en mesure de voir
                les informations de votre carte de crédit. Accédez directement au formulaire de commande :
              </p>

<?php display_order_form(); ?>
              
              <div class="hr"></div>

              <a id="academic"></a>
              <h4>Rabais éducatifs</h4>

              <img src="../img/school.jpg" width="219" height="147" alt="School" class="floating_block"/>
              
              <p>
                Les institutions académiques et d’enseignement éligibles, ainsi que les étudiants,
                membres du corps enseignant et du personnel de collèges, universités et autres institutions d’enseignement peuvent se prévaloir d’un
                rabais allant jusqu’à 50 % sur les logiciels VyPRESS. Pour plus d’informations au sujet de votre éligibilité,
                <a href="<?=VYPRESS_ACADEMIC_URL?>" >cliquez ici</a>.
                Pour faire l’achat de versions académiques de logiciels VyPRESS,
                informez-vous des tarifs en vigueur et de la façon de procéder à l’adresse suivante : <?=MAIL_SALES_LINK?>.
                </p>
              </div><!-- Buy WinMessenger content -->
<?php display_foot(); ?>