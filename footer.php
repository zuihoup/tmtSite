<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

<div class="footer">
<!------ Include the above in your HEAD tag ---------->

<footer class="section footer-classic context-dark bg-image" >
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <p style="text-align:center;" id="quote">เราจะพยายามอย่างต่อเนื่องเพื่อนำเสนอ Business Mapping ใหม่ๆในฐานะบริษัทชั้นนำด้าน GIS ในการทำการตลาดด้านพื้นที่เราจะทำงานอย่างสุดความสามารถเพื่อมอบ Discovery & Value ใหม่ๆให้แก่ลูกค้า</p>
                    <script>
                        var language = {
                            eng: {
                                quote: "TerraMap Thailand is Geo Marketing GIS. We support your location evaluation with Map × Data. We will continue various challenges to suggest new ideas of business mapping for our customers. As a leading company of Geo Marketing GIS field, we work with the best to provide new Discovery & Value to our customers."
                            },
                            th: {
                                quote: "เราจะพยายามอย่างต่อเนื่องเพื่อนำเสนอ Business Mapping ใหม่ๆในฐานะบริษัทชั้นนำด้าน GIS ในการทำการตลาดด้านพื้นที่เราจะทำงานอย่างสุดความสามารถเพื่อมอบ Discovery & Value ใหม่ๆให้แก่ลูกค้า"
                            },
                            jp: {
                                quote:"TerraMap ThailandはエリアマーケティングGISです。 「地図 × データ」で貴社の立地評価をサポートいたします。 新しい発想のビジネスマッピングのご提案をさせていただくために、 さまざまな挑戦を続けております。 エリアマーケティングGIS業界のリーディングカンパニーとして、 常に新しい「発見」と「価値」をお客様にご提供いたします。"
                            }
                        };
                        if (window.location.hash) {
                            if (window.location.hash === "#eng") {
                                quote.textContent = language.eng.quote;
                            }
                            if (window.location.hash === "#jp") {
                                quote.textContent = language.jp.quote;
                            }
                        }
                    </script>
                <!-- Rights-->
                <p class="rights" style="text-align:center;"><span>©Copyright©Map Marketing Co., Ltd. All Right Reserved.</p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>54 BB Building, 14th Floor, Suite 1408 Sukhumvit 21 Road (Asoke) Klong Toey Nua, Wattana, Bangkok THAILAND 10110</dd>
              </dl>
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:#">vvvv@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>TEL:</dt>
                <dd><p>+66 (0)2-118-2817</p>
                </dd>
              </dl>
			   
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="https://www.mapmarketing.co.jp/"target="_blank">Map marketing Japan</a></li>
                <li><a href="https://www.terramap-asia.com/thai-product/"target="_blank">Terramap Thailand</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
