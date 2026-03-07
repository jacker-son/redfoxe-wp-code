<?php

/**
 * Plugin Name: Product Page Plugin
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_shortcode('product-page-shortcode-add-to-cart-placeholder', 'product_page_shortcode_add_to_cart_placeholder');

function product_page_shortcode_add_to_cart_placeholder()
{
    ?>
    <div id="add-to-cart-placeholder"></div>
    <?php
}

add_shortcode('product-page-shortcode-product-price', 'product_page_shortcode_product_price');

function product_page_shortcode_product_price()
{
    if (is_product()) {
        global $product;
        ?>
        <div class="ppp-product-price">
            <div class="ppp-p-left">
                <span class="regular-price">
                    <?php if ($product->is_type('simple') && $product->get_regular_price()): ?>
                        $<?php echo $product->get_regular_price(); ?>
                    <?php endif; ?>
                </span>
                <span class="sale-price">
                    <?php if ($product->is_type('simple') && $product->get_sale_price()): ?>
                        $<?php echo $product->get_sale_price(); ?>
                    <?php endif; ?>
                </span>
                <span class="saved-price">
                    <?php if ($product->is_type('simple') && $product->get_regular_price() - $product->get_sale_price() > 0): ?>
                        saved $<?php echo ($product->get_regular_price() - $product->get_sale_price()); ?>
                    <?php endif; ?>
                </span>
            </div>
            <div class="ppp-p-right">

            </div>
        </div>
        <?php
    }
}

add_shortcode('product-page-shortcode-title-and-wishlist', 'product_page_shortcode_title_and_wishlist');

function product_page_shortcode_title_and_wishlist()
{
    if (is_product()) {
        global $product;

        ?>
        <h1 class="pgp-product-title">
            <span class="text"><?php echo $product->get_title(); ?></span>
            <span class="add-to-wishlist">
                <?php echo do_shortcode('[yith_wcwl_add_to_wishlist browse_wishlist_text="" already_in_wishslist_text=""]'); ?>
            </span>
        </h1>
        <?php
    }
}

add_shortcode('product-page-shortcode-tab', 'product_page_shortcode_tab');

function product_page_shortcode_tab()
{
    if (is_product()) {
        ?>
        <!-- pc -->
        <div id="tab_pc" class="Stack-sc-1uzspe2-0 juJyHT">
            <div class="ItemsWrapper-sc-153z1f2-12 lRZWn">
                <div class="PerkWrapper-sc-153z1f2-9 deGXCz">
                    <div class="TextWrapper-sc-153z1f2-11 NEpzW"><img loading="lazy"
                            src="https://assets.lelo.com/dx/2022-02/icon-warranty.svg?VersionId=GddacAvXGvQPDI6pU6DsFN_popT3.qlR"
                            alt="icon-warranty.svg" class="Icon-sc-153z1f2-0 biLuSp">
                        <div class="Stack-sc-1uzspe2-0 _StyledStack-sc-18243u9-0 juJyHT RvJPQ">
                            <p class="Subtitle-sc-153z1f2-1 Title-sc-153z1f2-3 iwrrRT bdaVpQ">WARRANTY</p>
                            <p class="Subtitle-sc-153z1f2-1 iwrrRT">60 days return guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="PerkWrapper-sc-153z1f2-9 jCukIK">
                    <div class="TextWrapper-sc-153z1f2-11 lcXOxz"><img loading="lazy"
                            src="https://assets.lelo.com/dx/2024-03/Vector.svg?VersionId=bedcqhAsSIQ8LcG8MFrfNkkJij6Chu8k"
                            alt="Vector.svg" class="Icon-sc-153z1f2-0 biLuSp">
                        <div class="Stack-sc-1uzspe2-0 _StyledStack-sc-18243u9-0 juJyHT RvJPQ">
                            <p class="Subtitle-sc-153z1f2-1 Title-sc-153z1f2-3 iwrrRT bdaVpQ">SAFE SHOPPING</p>
                            <p class="Subtitle-sc-153z1f2-1 frbXmA">100% secure payment</p>
                        </div>
                    </div>
                </div>
                <div class="PerkWrapper-sc-153z1f2-9 jCukIK">
                    <div class="TextWrapper-sc-153z1f2-11 lcXOxz"><img loading="lazy"
                            src="https://assets.lelo.com/dx/2024-03/delivery_0.svg?VersionId=nDjtFBT5pdsgm3QjZVOEASu785PJznDI"
                            alt="delivery_0.svg" class="Icon-sc-153z1f2-0 biLuSp">
                        <div class="Stack-sc-1uzspe2-0 _StyledStack-sc-18243u9-0 juJyHT RvJPQ">
                            <p class="Subtitle-sc-153z1f2-1 Title-sc-153z1f2-3 iwrrRT bdaVpQ">SHIPPING INFO</p>
                            <p class="Subtitle-sc-153z1f2-1 frbXmA">Free shipping</p>
                        </div>
                    </div>
                </div>
                <div class="PerkWrapper-sc-153z1f2-9 jCukIK">
                    <div class="TextWrapper-sc-153z1f2-11 gnxfFo"><img loading="lazy"
                            src="https://assets.lelo.com/dx/2024-03/discreet.svg?VersionId=kYByM34OMIcDjSdXRbpZVYC3dAX1WrTO"
                            alt="discreet.svg" class="Icon-sc-153z1f2-0 biLuSp">
                        <div class="Stack-sc-1uzspe2-0 _StyledStack-sc-18243u9-0 juJyHT RvJPQ">
                            <p class="Subtitle-sc-153z1f2-1 Title-sc-153z1f2-3 iwrrRT bdaVpQ">Discreet Shipping</p>
                            <p class="Subtitle-sc-153z1f2-1 frbXmA">stay incognito</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-projection-id="41" style="display: none; overflow: hidden; height: auto; opacity: 1;">
                <div class="Stack-sc-1uzspe2-0 juJyHT">
                    <div class="PerkBodyWrapper-sc-153z1f2-8 kWqqt">
                        <div class="BodyButton-sc-153z1f2-4 efrekU"></div>
                        <div class="Body-sc-153z1f2-5 dhLmHw">
                            <p>If the product you receive has any manufacturing defects, you can
                                unconditionally return or exchange it within 60 days of receipt, provided it
                                is unopened and unused. For example, if a customer receives a massager
                                with a faulty battery, they can choose to return it for a full refund or receive
                                a free replacement. For specific return and exchange terms, please refer to
                                our <a href="./refund-and-returns-policy">Refund and Return Policy .</a></p>
                            <p><strong>1-year warranty: </strong>: If your purchased product fails within 1 year, you can
                                request a replacement. Learn more in our Purchase Protection Policy .</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-projection-id="42" style="display: none; overflow: hidden; height: auto; opacity: 1;">
                <div class="Stack-sc-1uzspe2-0 juJyHT">
                    <div class="PerkBodyWrapper-sc-153z1f2-8 kWqqt">
                        <div class="BodyButton-sc-153z1f2-4 efrekU"></div>
                        <div class="Body-sc-153z1f2-5 dhLmHw">
                            <p>We prioritize data security. We use secure encryption technology through
                                PCI DSS (Payment Card Industry Data Security Standard)-certified,
                                reputable payment gateways. This ensures all payment transactions are
                                encrypted, preventing unauthorized access, data breaches, and protecting
                                your personal information for a worry-free shopping experience</br>
                                </br>For more on our secure payment measures, please see our <a
                                    href="./payment-information">Payment
                                    Guide</a> and <a href="./privacy-policy-2">Privacy Policy </a></p>
                            <!--<p><a href="./privacy-policy">Find out more</a></p>-->
                            <!--<p><strong>Payment method options:</strong></p>-->
                            <!--<div class="paymentDesktop">&nbsp;</div>-->
                            <!--<div class="paymentMobile">&nbsp;</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div data-projection-id="43" style="display: none; overflow: hidden; height: auto; opacity: 1;">
                <div class="Stack-sc-1uzspe2-0 juJyHT">
                    <div class="PerkBodyWrapper-sc-153z1f2-8 kWqqt">
                        <div class="BodyButton-sc-153z1f2-4 efrekU"></div>
                        <div class="Body-sc-153z1f2-5 dhLmHw">
                            <p>We know you dislike paying for shipping. Simply place an order of $49 or
                                more to enjoy free standard shipping.We provide a supply chain tracking
                                system, allowing customers to track their items in real time from packaging
                                to final delivery. For example, each purchased item includes a "Track and
                                Confirm" option linked to our logistics partner’s website for detailed
                                shipping progress.</p>
                            <p> Learn more in our <a href="./shipping">Shipping Policy</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-projection-id="44" style="display: none; overflow: hidden; height: auto; opacity: 1;">
                <div class="Stack-sc-1uzspe2-0 juJyHT">
                    <div class="PerkBodyWrapper-sc-153z1f2-8 iBFmwC">
                        <div class="BodyButton-sc-153z1f2-4 efrekU"></div>
                        <div class="Body-sc-153z1f2-5 dhLmHw">
                            <!--<p><strong>Each LELO product is shipped in a discreet shipping box to protect your privacy.</strong></p>-->
                            <p>We use opaque, sturdy packaging materials with no labels or markings on
                                the exterior that could reveal the contents. Additionally, we employ
                                specially designed crush-resistant boxes to protect the product from
                                damage even under the harshest shipping conditions, ensuring both the
                                security of the goods and your privacy during transit. We understand the
                                sensitivity of adult products and guarantee absolute discretion and
                                confidentiality in our packaging</p>
                            <p> For more details, please refer to our <a href="./discreet-packaging">Discreet Packaging
                                    Policy</a>.</p>
                        </div>
                        <!--<div class="ImageWrapper-sc-153z1f2-6 cJbdsp"><img src="https://assets.lelo.com/dx/2024-03/box_trans%201.svg?VersionId=x_iSCWpLBBSPgkXRjiqT_QjwJaiI3CYE" alt="box_trans 1.svg" class="BodyImage-sc-153z1f2-7 bzOxYt"></div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- pc -->
        <!-- mobile -->
        <div id="tab_mobile" class="Stack-sc-1uzspe2-0 juJyHT">
            <div class="ItemsWrapper-sc-153z1f2-12 fznxld">
                <!-- 1 -->
                <div class="PerkWrapper-sc-153z1f2-9 cocHIb">
                    <div class="TextWrapper-sc-153z1f2-11 foZjeQ">
                        <img loading="lazy"
                            src="https://assets.lelo.com/dx/2022-02/icon-warranty.svg?VersionId=GddacAvXGvQPDI6pU6DsFN_popT3.qlR"
                            alt="icon-warranty.svg" class="Icon-sc-153z1f2-0 gJdZkm">
                        <div class="Stack-sc-1uzspe2-0 _StyledStack-sc-18243u9-0 juJyHT hlXUdE">
                            <p class="Subtitle-sc-153z1f2-1 Title-sc-153z1f2-3 iwrrRT bdaVpQ">WARRANTY</p>
                            <p class="Subtitle-sc-153z1f2-1 frbXmA">60 days return guarantee</p>
                        </div>
                    </div>
                    <div class="DropdownIcon-sc-153z1f2-10 dWXmma"></div>
                    <div data-projection-id="170" style="display: none; overflow: hidden; height: auto; opacity: 1;">
                        <div class="Stack-sc-1uzspe2-0 juJyHT">
                            <div class="PerkBodyWrapper-sc-153z1f2-8 LhOWD">
                                <div class="BodyButton-sc-153z1f2-4 eqOmih"></div>
                                <div class="Body-sc-153z1f2-5 dhLmHw">
                                    <p>If the product you receive has any manufacturing defects, you can
                                        unconditionally return or exchange it within 60 days of receipt, provided it
                                        is unopened and unused. For example, if a customer receives a massager
                                        with a faulty battery, they can choose to return it for a full refund or receive
                                        a free replacement. For specific return and exchange terms, please refer to
                                        our <a href="./refund-and-returns-policy">Refund and Return Policy .</a></p>
                                    <p><strong>1-year warranty: </strong>: If your purchased product fails within 1 year, you
                                        can request a
                                        replacement. Learn more in our Purchase Protection Policy .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="PerkWrapper-sc-153z1f2-9 cocHIb">
                    <div class="TextWrapper-sc-153z1f2-11 foZjeQ"><img loading="lazy"
                            src="https://assets.lelo.com/dx/2024-03/Vector.svg?VersionId=bedcqhAsSIQ8LcG8MFrfNkkJij6Chu8k"
                            alt="Vector.svg" class="Icon-sc-153z1f2-0 gJdZkm">
                        <div class="Stack-sc-1uzspe2-0 _StyledStack-sc-18243u9-0 juJyHT hlXUdE">
                            <p class="Subtitle-sc-153z1f2-1 Title-sc-153z1f2-3 iwrrRT bdaVpQ">SAFE SHOPPING</p>
                            <p class="Subtitle-sc-153z1f2-1 frbXmA">100% secure payment</p>
                        </div>
                    </div>
                    <div class="DropdownIcon-sc-153z1f2-10 dWXmma"></div>
                    <div data-projection-id="175" style="display: none; overflow: hidden; height: auto; opacity: 1;">
                        <div class="Stack-sc-1uzspe2-0 juJyHT">
                            <div class="PerkBodyWrapper-sc-153z1f2-8 LhOWD">
                                <div class="BodyButton-sc-153z1f2-4 eqOmih"></div>
                                <div class="Body-sc-153z1f2-5 dhLmHw">
                                    <p>We prioritize data security. We use secure encryption technology through
                                        PCI DSS (Payment Card Industry Data Security Standard)-certified,
                                        reputable payment gateways. This ensures all payment transactions are
                                        encrypted, preventing unauthorized access, data breaches, and protecting
                                        your personal information for a worry-free shopping experience</br>
                                        </br>For more on our secure payment measures, please see our <a
                                            href="./payment-information">Payment
                                            Guide</a> and <a href="./privacy-policy-2">Privacy Policy </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="PerkWrapper-sc-153z1f2-9 cocHIb">
                    <div class="TextWrapper-sc-153z1f2-11 foZjeQ"><img loading="lazy"
                            src="https://assets.lelo.com/dx/2024-03/delivery_0.svg?VersionId=nDjtFBT5pdsgm3QjZVOEASu785PJznDI"
                            alt="delivery_0.svg" class="Icon-sc-153z1f2-0 gJdZkm">
                        <div class="Stack-sc-1uzspe2-0 _StyledStack-sc-18243u9-0 juJyHT hlXUdE">
                            <p class="Subtitle-sc-153z1f2-1 Title-sc-153z1f2-3 iwrrRT bdaVpQ">SHIPPING INFO</p>
                            <p class="Subtitle-sc-153z1f2-1 frbXmA">Free shipping</p>
                        </div>
                    </div>
                    <div class="DropdownIcon-sc-153z1f2-10 dWXmma"></div>
                    <div data-projection-id="180" style="display: none; overflow: hidden; height: auto; opacity: 1;">
                        <div class="Stack-sc-1uzspe2-0 juJyHT">
                            <div class="PerkBodyWrapper-sc-153z1f2-8 LhOWD">
                                <div class="BodyButton-sc-153z1f2-4 eqOmih"></div>
                                <div class="Body-sc-153z1f2-5 dhLmHw">
                                    <p>We know you dislike paying for shipping. Simply place an order of $49 or
                                        more to enjoy free standard shipping.We provide a supply chain tracking
                                        system, allowing customers to track their items in real time from packaging
                                        to final delivery. For example, each purchased item includes a "Track and
                                        Confirm" option linked to our logistics partner’s website for detailed
                                        shipping progress.</p>
                                    <p> Learn more in our <a href="./shipping">Shipping Policy</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="PerkWrapper-sc-153z1f2-9 cocHIb">
                    <div class="TextWrapper-sc-153z1f2-11 foZjeQ"><img loading="lazy"
                            src="https://assets.lelo.com/dx/2024-03/discreet.svg?VersionId=kYByM34OMIcDjSdXRbpZVYC3dAX1WrTO"
                            alt="discreet.svg" class="Icon-sc-153z1f2-0 gJdZkm">
                        <div class="Stack-sc-1uzspe2-0 _StyledStack-sc-18243u9-0 juJyHT hlXUdE">
                            <p class="Subtitle-sc-153z1f2-1 Title-sc-153z1f2-3 iwrrRT bdaVpQ">DISCREET BOX</p>
                            <p class="Subtitle-sc-153z1f2-1 frbXmA">stay incognito</p>
                        </div>
                    </div>
                    <div class="DropdownIcon-sc-153z1f2-10 dWXmma"></div>
                    <div data-projection-id="185" style="display: none; overflow: hidden; height: auto; opacity: 1;">
                        <div class="Stack-sc-1uzspe2-0 juJyHT">
                            <div class="PerkBodyWrapper-sc-153z1f2-8 LhOWD">
                                <div class="BodyButton-sc-153z1f2-4 eqOmih"></div>
                                <div class="Body-sc-153z1f2-5 dhLmHw">
                                    <!--<p><strong>Each LELO product is shipped in a discreet shipping box to protect your privacy.</strong></p>-->
                                    <p>We use opaque, sturdy packaging materials with no labels or markings on
                                        the exterior that could reveal the contents. Additionally, we employ
                                        specially designed crush-resistant boxes to protect the product from
                                        damage even under the harshest shipping conditions, ensuring both the
                                        security of the goods and your privacy during transit. We understand the
                                        sensitivity of adult products and guarantee absolute discretion and
                                        confidentiality in our packaging</p>
                                    <p> For more details, please refer to our <a href="./discreet-packaging">Discreet Packaging
                                            Policy</a>.
                                    </p>
                                </div>
                                -- <div class="ImageWrapper-sc-153z1f2-6 cJbdsp"><img --
                                        src="https://assets.lelo.com/dx/2024-03/box_trans%201.svg?VersionId=x_iSCWpLBBSPgkXRjiqT_QjwJaiI3CYE"
                                        -- alt="box_trans 1.svg" class="BodyImage-sc-153z1f2-7 bzOxYt"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile -->
        <?php
    }
}

// 强行劫持旧的定制评价展示，令其直接指向 Ryviu 的分享星级组件，达到全站外观强统一
add_shortcode('product-page-shortcode-star', function ($atts = [], $content = null) {
    return do_shortcode('[ryviu-badge-share]');
});
// 废弃原先直接连库硬写 SVG 的旧逻辑（为防止其他地方仍然需要，函数体暂予保留但不主动注册短代码）
// add_shortcode('product-page-shortcode-star', 'product_page_shortcode_star');

// 在产品页面输出隐藏的 HTML
function product_page_shortcode_star()
{
    if (is_product()) {
        global $product, $wpdb;

        // 获取产品 ID
        $product_id = $product->get_id();

        // 初始化一个数组以存储每个评分的数量
        $rating_counts = [
            1 => ['count' => 0, 'percentage' => 0],
            2 => ['count' => 0, 'percentage' => 0],
            3 => ['count' => 0, 'percentage' => 0],
            4 => ['count' => 0, 'percentage' => 0],
            5 => ['count' => 0, 'percentage' => 0],
        ];

        $review_count = $product->get_review_count();

        // 初始化总评分数量
        $total_ratings = 0;

        // 查询数据库以统计每个评分的数量
        $results = $wpdb->get_results(
            $wpdb->prepare(
                "
        SELECT meta_value AS rating, COUNT(*) AS count
        FROM {$wpdb->commentmeta} AS cm
        INNER JOIN {$wpdb->comments} AS c ON cm.comment_id = c.comment_ID
        WHERE meta_key = 'rating'
          AND c.comment_post_ID = %d
          AND c.comment_approved = '1'
        GROUP BY meta_value
        ",
                $product_id
            ),
            ARRAY_A
        );

        // 将查询结果填充到数组中并计算总数
        if ($results) {
            foreach ($results as $row) {
                $rating = intval($row['rating']);
                $count = intval($row['count']);
                if ($rating >= 1 && $rating <= 5) {
                    $rating_counts[$rating]['count'] = $count;
                    $total_ratings += $count;
                }
            }
        }

        // 计算每个评分的百分比
        if ($total_ratings > 0) {
            foreach ($rating_counts as $stars => &$data) {
                $data['percentage'] = round(($data['count'] / $total_ratings) * 100, 2);
            }
        }

        ?>
        <div class="product-rating-container">
            <div class="woocommerce-product-rating">
                <?php echo wc_get_rating_html(5); ?>
            </div>
            <svg t="1735980912257" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
                p-id="4265" width="200" height="200">
                <path
                    d="M875.333052 552.332591c-17.381879 0-31.476899 14.083763-31.582299 31.472805l0 0.155543c0 0 0 0 0 0.047072l0 220.847897c0 17.896602-14.440897 32.358989-32.264844 32.358989L172.891675 837.214896c-17.815761 0-32.241308-14.45727-32.241308-32.358989L140.650367 254.650771c0-17.894555 14.439874-32.383548 32.241308-32.383548l298.973232 0c17.445324-0.034792 31.535227-14.177907 31.535227-31.652907 0-17.483186-14.104229-31.651884-31.535227-31.651884L168.641885 158.962431c-50.360991 0-91.178629 40.925085-91.178629 91.38943l0 558.753837c0 50.471508 40.820708 91.415013 91.178629 91.415013l647.092791 0c50.357921 0 91.180676-40.943504 91.180676-91.415013L906.915351 583.844282C906.844743 566.42454 892.720048 552.332591 875.333052 552.332591z"
                    fill="#303030" p-id="4266"></path>
                <path
                    d="M937.013857 335.824535l-206.523657-207.157083-8.005324-6.593162c-4.556783-2.381234-10.184967-3.292999-15.497972-3.292999-18.075681 0-32.732495 14.697747-32.732495 32.803103 0 5.333472 3.105734 13.644765 5.498224 18.213827l141.602042 142.967132L675.756621 312.765353c-221.524303 27.526937-302.548664 144.17668-322.964646 415.066297-0.028653 18.86158 14.633279 33.57877 32.703843 33.57877 14.392802 0 27.443026-12.673647 31.812543-25.645077 20.424168-243.485477 77.827553-337.180416 259.588223-357.409133l144.467299 0.053212L684.120103 516.049223l-5.925966 7.506974c-2.264577 4.474918-3.140527 10.106172-3.140527 15.269775 0 18.081821 14.656815 32.803103 32.708959 32.803103 4.581342 0 12.685927-2.552126 16.746406-4.373611l212.502835-211.896015 9.101285-9.135054L937.013857 335.824535z"
                    fill="#303030" p-id="4267"></path>
            </svg>
        </div>
        <div data-bv-modal="true" class="bv_modal_component_container" tabindex="0" role="navigation"
            style="display: none !important;">
            <div class="bv_modal_outer_content">
                <div class="bv_modal_inner_content" id="bv_components_histogram">
                    <div class="bv_histogram_component_container">
                        <!-- start -->
                        <div>
                            <div class="bv_histogram_row_container"
                                aria-label="<?php echo $rating_counts[5]['count']; ?> reviews with 5 stars. "
                                aria-expanded="false" tabindex="0" role="menuitem">
                                <div class="bv_histogram_row_prefix">5<span class="bv_histogram_row_star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 25 25"
                                            aria-hidden="true" focusable="false">
                                            <polygon
                                                points="25 9.12 15.5669599 9.12 12.512219 0 9.40860215 9.12 0 9.12 7.55131965 14.856 4.47214076 24 12.512219 18.216 20.5522972 24 17.4731183 14.856"
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_0_99.9&quot;) !important;">
                                            </polygon>
                                            <path d=""
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_0_99.9&quot;) !important;">
                                            </path>
                                            <defs>
                                                <linearGradient id="bv_histogram_component_container_star_1_0_99.9" x1="99.9%"
                                                    y1="0%" x2="100%" y2="0%">
                                                    <stop offset="0%" style="stop-color: rgb(5, 14, 35); stop-opacity: 1;">
                                                    </stop>
                                                    <stop offset="1%" style="stop-color: rgb(187, 187, 187); stop-opacity: 1;">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                        </svg></span></div>
                                <div class="bv_histogram_row_full_bar">
                                    <div class="bv_histogram_row_bar_empty">
                                        <div class="bv_histogram_row_bar_filled"
                                            style="width: <?php echo $rating_counts[5]['percentage']; ?>% !important;"></div>
                                    </div>
                                </div>
                                <div class="bv_histogram_row_rating">
                                    <?php echo $rating_counts[5]['count']; ?>
                                </div>
                            </div>
                            <div class="bv_histogram_row_container"
                                aria-label="<?php echo $rating_counts[4]['count']; ?> reviews with 4 stars. "
                                aria-expanded="false" tabindex="0" role="menuitem">
                                <div class="bv_histogram_row_prefix">4<span class="bv_histogram_row_star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 25 25"
                                            aria-hidden="true" focusable="false">
                                            <polygon
                                                points="25 9.12 15.5669599 9.12 12.512219 0 9.40860215 9.12 0 9.12 7.55131965 14.856 4.47214076 24 12.512219 18.216 20.5522972 24 17.4731183 14.856"
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_1_99.9&quot;) !important;">
                                            </polygon>
                                            <path d=""
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_1_99.9&quot;) !important;">
                                            </path>
                                            <defs>
                                                <linearGradient id="bv_histogram_component_container_star_1_1_99.9" x1="99.9%"
                                                    y1="0%" x2="100%" y2="0%">
                                                    <stop offset="0%" style="stop-color: rgb(5, 14, 35); stop-opacity: 1;">
                                                    </stop>
                                                    <stop offset="1%" style="stop-color: rgb(187, 187, 187); stop-opacity: 1;">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                        </svg></span></div>
                                <div class="bv_histogram_row_full_bar">
                                    <div class="bv_histogram_row_bar_empty">
                                        <div class="bv_histogram_row_bar_filled"
                                            style="width: <?php echo $rating_counts[4]['percentage']; ?>% !important;"></div>
                                    </div>
                                </div>
                                <div class="bv_histogram_row_rating"><?php echo $rating_counts[4]['count']; ?></div>
                            </div>
                            <div class="bv_histogram_row_container"
                                aria-label="<?php echo $rating_counts[3]['count']; ?> reviews with 3 stars. "
                                aria-expanded="false" tabindex="0" role="menuitem">
                                <div class="bv_histogram_row_prefix">3<span class="bv_histogram_row_star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 25 25"
                                            aria-hidden="true" focusable="false">
                                            <polygon
                                                points="25 9.12 15.5669599 9.12 12.512219 0 9.40860215 9.12 0 9.12 7.55131965 14.856 4.47214076 24 12.512219 18.216 20.5522972 24 17.4731183 14.856"
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_2_99.9&quot;) !important;">
                                            </polygon>
                                            <path d=""
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_2_99.9&quot;) !important;">
                                            </path>
                                            <defs>
                                                <linearGradient id="bv_histogram_component_container_star_1_2_99.9" x1="99.9%"
                                                    y1="0%" x2="100%" y2="0%">
                                                    <stop offset="0%" style="stop-color: rgb(5, 14, 35); stop-opacity: 1;">
                                                    </stop>
                                                    <stop offset="1%" style="stop-color: rgb(187, 187, 187); stop-opacity: 1;">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                        </svg></span></div>
                                <div class="bv_histogram_row_full_bar">
                                    <div class="bv_histogram_row_bar_empty">
                                        <div class="bv_histogram_row_bar_filled"
                                            style="width: <?php echo $rating_counts[3]['percentage']; ?>% !important;"></div>
                                    </div>
                                </div>
                                <div class="bv_histogram_row_rating"><?php echo $rating_counts[3]['count']; ?></div>
                            </div>
                            <div class="bv_histogram_row_container"
                                aria-label="<?php echo $rating_counts[2]['count']; ?> reviews with 2 stars. "
                                aria-expanded="false" tabindex="0" role="menuitem">
                                <div class="bv_histogram_row_prefix">2<span class="bv_histogram_row_star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 25 25"
                                            aria-hidden="true" focusable="false">
                                            <polygon
                                                points="25 9.12 15.5669599 9.12 12.512219 0 9.40860215 9.12 0 9.12 7.55131965 14.856 4.47214076 24 12.512219 18.216 20.5522972 24 17.4731183 14.856"
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_3_99.9&quot;) !important;">
                                            </polygon>
                                            <path d=""
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_3_99.9&quot;) !important;">
                                            </path>
                                            <defs>
                                                <linearGradient id="bv_histogram_component_container_star_1_3_99.9" x1="99.9%"
                                                    y1="0%" x2="100%" y2="0%">
                                                    <stop offset="0%" style="stop-color: rgb(5, 14, 35); stop-opacity: 1;">
                                                    </stop>
                                                    <stop offset="1%" style="stop-color: rgb(187, 187, 187); stop-opacity: 1;">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                        </svg></span></div>
                                <div class="bv_histogram_row_full_bar">
                                    <div class="bv_histogram_row_bar_empty">
                                        <div class="bv_histogram_row_bar_filled"
                                            style="width: <?php echo $rating_counts[2]['percentage']; ?>% !important;"></div>
                                    </div>
                                </div>
                                <div class="bv_histogram_row_rating"><?php echo $rating_counts[2]['count']; ?></div>
                            </div>
                            <div class="bv_histogram_row_container"
                                aria-label="<?php echo $rating_counts[1]['count']; ?> reviews with 1 star. "
                                aria-expanded="false" tabindex="0" role="menuitem">
                                <div class="bv_histogram_row_prefix">1<span class="bv_histogram_row_star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 25 25"
                                            aria-hidden="true" focusable="false">
                                            <polygon
                                                points="25 9.12 15.5669599 9.12 12.512219 0 9.40860215 9.12 0 9.12 7.55131965 14.856 4.47214076 24 12.512219 18.216 20.5522972 24 17.4731183 14.856"
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_4_99.9&quot;) !important;">
                                            </polygon>
                                            <path d=""
                                                style="fill: url(&quot;#bv_histogram_component_container_star_1_4_99.9&quot;) !important;">
                                            </path>
                                            <defs>
                                                <linearGradient id="bv_histogram_component_container_star_1_4_99.9" x1="99.9%"
                                                    y1="0%" x2="100%" y2="0%">
                                                    <stop offset="0%" style="stop-color: rgb(5, 14, 35); stop-opacity: 1;">
                                                    </stop>
                                                    <stop offset="1%" style="stop-color: rgb(187, 187, 187); stop-opacity: 1;">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                        </svg></span></div>
                                <div class="bv_histogram_row_full_bar">
                                    <div class="bv_histogram_row_bar_empty">
                                        <div class="bv_histogram_row_bar_filled"
                                            style="width: <?php echo $rating_counts[1]['percentage']; ?>% !important;"></div>
                                    </div>
                                </div>
                                <div class="bv_histogram_row_rating"><?php echo $rating_counts[1]['count']; ?></div>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                    <div class="bv_button_component_container" style="text-align: center;"><button type="button"
                            class="bv_button_buttonFull undefined " aria-expanded="false">Read <?php echo $review_count; ?>
                            Reviews</button></div>
                </div>
            </div>
        </div>
        <?php
    }
}

add_shortcode('ryviu-badge-share', function ($atts = [], $content = null) {
    // 定义一个静态变量，只在第一次执行时为 true
    static $css_loaded = false;

    if (!$css_loaded) {
        $css_path = plugin_dir_path(__FILE__) . 'css/jgm-preview-badge.css';

        $version = file_exists($css_path) ? filemtime($css_path) : false;

        wp_enqueue_style(
            'jgm-preview-badge-style',
            plugins_url('css/jgm-preview-badge.css', __FILE__),
            [],
            $version
        );

        $css_loaded = true;
    }

    // 调用嵌套的 Ryviu 星级评分短代码
    $output = do_shortcode('[ryviu_widget_total]');

    return '<div class="share-badge-wrapper">' . $output . '<svg t="1735980912257" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4265" width="200" height="200"><path d="M875.333052 552.332591c-17.381879 0-31.476899 14.083763-31.582299 31.472805l0 0.155543c0 0 0 0 0 0.047072l0 220.847897c0 17.896602-14.440897 32.358989-32.264844 32.358989L172.891675 837.214896c-17.815761 0-32.241308-14.45727-32.241308-32.358989L140.650367 254.650771c0-17.894555 14.439874-32.383548 32.241308-32.383548l298.973232 0c17.445324-0.034792 31.535227-14.177907 31.535227-31.652907 0-17.483186-14.104229-31.651884-31.535227-31.651884L168.641885 158.962431c-50.360991 0-91.178629 40.925085-91.178629 91.38943l0 558.753837c0 50.471508 40.820708 91.415013 91.178629 91.415013l647.092791 0c50.357921 0 91.180676-40.943504 91.180676-91.415013L906.915351 583.844282C906.844743 566.42454 892.720048 552.332591 875.333052 552.332591z" fill="#303030" p-id="4266"></path><path d="M937.013857 335.824535l-206.523657-207.157083-8.005324-6.593162c-4.556783-2.381234-10.184967-3.292999-15.497972-3.292999-18.075681 0-32.732495 14.697747-32.732495 32.803103 0 5.333472 3.105734 13.644765 5.498224 18.213827l141.602042 142.967132L675.756621 312.765353c-221.524303 27.526937-302.548664 144.17668-322.964646 415.066297-0.028653 18.86158 14.633279 33.57877 32.703843 33.57877 14.392802 0 27.443026-12.673647 31.812543-25.645077 20.424168-243.485477 77.827553-337.180416 259.588223-357.409133l144.467299 0.053212L684.120103 516.049223l-5.925966 7.506974c-2.264577 4.474918-3.140527 10.106172-3.140527 15.269775 0 18.081821 14.656815 32.803103 32.708959 32.803103 4.581342 0 12.685927-2.552126 16.746406-4.373611l212.502835-211.896015 9.101285-9.135054L937.013857 335.824535z" fill="#303030" p-id="4267"></path></svg></div>';
});
// 为了兼容性同时保留旧的 jgm-preview-badge-share 短代码映射
add_shortcode('jgm-preview-badge-share', function ($atts = [], $content = null) {
    return do_shortcode('[ryviu-badge-share]');
});

// 拦截直接裸露于 Elementor 模板底部的 Judge.me 原有评论区短代码，将其彻底截取并转换为新的 Ryviu 评论区
add_shortcode('jgm-review-widget', function ($atts = [], $content = null) {
    return do_shortcode('[ryviu_widget]');
});

// [Antigravity] 注入本地 Mock 渲染环境，以便直接看到 Ryviu 组件的效果
add_action('wp_loaded', function () {
    $urlparts = wp_parse_url(site_url());
    if (isset($urlparts['host']) && strpos($urlparts['host'], '.local') !== false) {
        // 重写简码以 Mock 星评
        remove_shortcode('ryviu_widget_total');
        add_shortcode('ryviu_widget_total', function ($atts = []) {
            return '<div class="ryviu-mock-stars" style="display:flex;align-items:center;gap:4px;color:#fdbc00;font-size:16px;">
                <span class="ryviu-svg-star" style="display:inline-block;width:20px;height:20px;"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg></span>
                <span class="ryviu-svg-star" style="display:inline-block;width:20px;height:20px;"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg></span>
                <span class="ryviu-svg-star" style="display:inline-block;width:20px;height:20px;"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg></span>
                <span class="ryviu-svg-star" style="display:inline-block;width:20px;height:20px;"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg></span>
                <span class="ryviu-svg-star" style="display:inline-block;width:20px;height:20px;"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg></span>
                <span style="color:#6c8187;font-size:14px;margin-left:6px;font-weight:600;">5.0 (24 reviews)</span>
            </div>';
        });

        // 重写简码以 Mock 底部评论区
        remove_shortcode('ryviu_widget');
        add_shortcode('ryviu_widget', function ($atts = []) {
            return '<div class="ryviu-mock-reviews" style="background:#fff;border:1px solid #eee;border-radius:12px;padding:30px;margin-top:20px;box-shadow:0 4px 15px rgba(0,0,0,0.03);">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;border-bottom:1px solid #f0f0f0;padding-bottom:15px;">
                    <h3 style="margin:0;font-size:22px;color:#333;font-weight:600;">Customer Reviews <span style="font-size:14px;color:#888;font-weight:400;margin-left:8px;">(Local Mock UI)</span></h3>
                    <div style="display:flex;align-items:center;gap:4px;color:#fdbc00;">
                        <span style="font-weight:700;font-size:24px;margin-right:8px;">5.0</span>
                        <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;gap:20px;">
                    <div class="review-item" style="padding-bottom:15px;border-bottom:1px solid #f9f9f9;">
                        <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
                            <div style="width:40px;height:40px;border-radius:50%;background:#00aeef;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;font-size:18px;">JD</div>
                            <div>
                                <div style="font-weight:600;color:#333;">John Doe <span style="color:#05d92d;font-size:12px;margin-left:5px;">✔ Verified Purchase</span></div>
                                <div style="color:#888;font-size:12px;">2 days ago</div>
                            </div>
                        </div>
                        <div style="display:flex;color:#fdbc00;margin-bottom:8px;">★★★★★</div>
                        <h4 style="margin:0 0 5px 0;font-size:16px;color:#333;">Amazing Product!</h4>
                        <p style="margin:0;color:#555;line-height:1.6;">Absolutely love the quality and design. Exceeded my expectations by a mile and feels incredibly premium. Highly recommended!</p>
                    </div>
                    <div class="review-item">
                        <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
                            <div style="width:40px;height:40px;border-radius:50%;background:#ffb102;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;font-size:18px;">SS</div>
                            <div>
                                <div style="font-weight:600;color:#333;">Sarah Smith <span style="color:#05d92d;font-size:12px;margin-left:5px;">✔ Verified Purchase</span></div>
                                <div style="color:#888;font-size:12px;">1 week ago</div>
                            </div>
                        </div>
                        <div style="display:flex;color:#fdbc00;margin-bottom:8px;">★★★★★</div>
                        <h4 style="margin:0 0 5px 0;font-size:16px;color:#333;">Will buy again</h4>
                        <p style="margin:0;color:#555;line-height:1.6;">Smooth finish and powerful. Works perfectly exactly as described. The sensors add a completely new dimension.</p>
                    </div>
                </div>
            </div>';
        });
    }
}, 999);

// 注册自定义 CSS 和 JS
function cwp_enqueue_custom_assets()
{
    wp_enqueue_style('cwp-custom-style', plugin_dir_url(__FILE__) . 'css/custom-style.css', array(), '1.6.0');

    // 注册并加载自定义 JS
    wp_enqueue_script('cwp-custom-script', plugin_dir_url(__FILE__) . 'js/custom-script.js', array('jquery'), '1.3.0', true);
}
add_action('wp_enqueue_scripts', 'cwp_enqueue_custom_assets');

?>